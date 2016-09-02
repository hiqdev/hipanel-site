<?php

namespace hipanel\site\helpers;

use Yii;
use yii\base\InvalidConfigException;

class SiteHelper
{
    /**
     * @return mixed
     * @throws InvalidConfigException
     */
    public static function getSeller()
    {
        if (Yii::$app->user->isGuest) {
            if (isset(Yii::$app->params['seller'])) {
                $seller = Yii::$app->params['seller'];
            } else throw new InvalidConfigException('"seller" param must be set');
        } else {
            $seller = Yii::$app->user->identity->seller;
        }

        return $seller;
    }

    /**
     * @param $resources
     * @param $zones
     * @return mixed
     */
    public static function domain($resources, $zones)
    {
        foreach ($resources as $k => $v) {
            if ($zones[$v['object_id']]) $resource['zone:.' . $zones[$v['object_id']]][$v['type']] = $v;
            if (preg_match('/^premium_dns/', $v['type'])) $resource['ref:class,feature'][$v['type']] = $v;
        }

        return $resource;
    }

    /**
     * @param $resources
     * @param $models
     * @param null $profile_to_model
     * @return mixed
     */
    public static function server($resources, $models, $profile_to_model = null)
    {
        if (!$profile_to_model) {
            foreach ($resources as $resource) {
                if ($resource['partno']) $resource['partno'] = trim(str_ireplace(['xen', 'openvz', 'cpu', 'ram', 'hdd', 'ssd'], '', $resource['partno']));
                if ($models[$resource['object_id']]) {
                    $resource['partno'] = $models[$resource['object_id']]['partno'];
                    $resource['partno'] = trim(str_ireplace(['xen', 'openvz', 'cpu', 'ram', 'hdd', 'ssd'], '', $resource['partno']));
                    $resource['model_type'] = $models[$resource['object_id']]['model_type'];
                }
                $_resources[$resource['model_type'] ?: $resource['type']] = $resource;
            }
        } else {
            foreach ($resources as $resource) {
                if ($resource['partno']) $resource['partno'] = trim(str_ireplace(['xen', 'openvz', 'cpu', 'ram', 'hdd', 'ssd'], '', $resource['partno']));
                $model_id = $profile_to_model[$resource['object_id']];
                if (array_key_exists($resource['object_id'], $profile_to_model)) {
                    $resource['partno'] = $models[$model_id]['partno'];
                    $resource['partno'] = trim(str_ireplace(['xen', 'openvz', 'cpu', 'ram', 'hdd', 'ssd'], '', $resource['partno']));
                    $resource['model_type'] = $models[$model_id]['type_name'];
                }
                $_resources[$resource['model_type'] ?: $resource['type']] = $resource;
            }
        }

        return $_resources;
    }

    /**
     * @param string $type (svds|ovds)
     * @param integer $tariff_id
     * @throws NotFoundHttpException
     * @throws UnprocessableEntityHttpException
     * @return Package|array
     */
    public static function getAvailablePackages($type = null, $tariff_id = null)
    {
        $part_ids = [];
        $parts = [];
        /** @var Calculation[] $calculations */
        $calculations = [];

        $cacheKeys = [
            Yii::$app->params['seller'],
            Yii::$app->user->id,
            $type,
            $tariff_id,
        ];

        /** @var Tariff[] $tariffs */
        $tariffs = Yii::$app->getCache()->getTimeCached(3600, $cacheKeys, function ($seller, $client_id, $type, $tariff_id) {
            return Tariff::find(['scenario' => 'get-available-info'])
                ->joinWith('resources')
                ->where(['seller' => $seller])
                ->andFilterWhere(['id' => $tariff_id])
                ->andFilterWhere(['type' => $type])
                ->all();
        });

        foreach ($tariffs as $tariff) {
            $part_ids = ArrayHelper::merge($part_ids, array_filter(ArrayHelper::getColumn($tariff->resources, 'object_id')));
            $calculations[] = $tariff->getCalculationModel();
        }

        if (!empty($part_ids)) {
            $parts = Part::find()->where(['id' => $part_ids])->indexBy('id')->all();
        }

        $calculationData = [];
        foreach ((array) $calculations as $calculation) {
            $calculationData[$calculation->getPrimaryKey()] = $calculation->getAttributes();
        }

        try {
            $prices = Calculation::perform('CalcValue', $calculationData, true);
        } catch (ErrorResponseException $e) {
            $prices = $e->errorInfo['response'];
        } catch (\Exception $e) {
            throw new UnprocessableEntityHttpException('Failed to calculate tariff value', 0, $e);
        }

        $packages = [];

        foreach ($tariffs as $tariff) {
            $tariffParts = [];
            $tariffPartsIds = array_filter(ArrayHelper::getColumn($tariff->resources, 'object_id'));

            foreach ($parts as $id => $part) {
                if (in_array($id, $tariffPartsIds)) {
                    $tariffParts[$id] = $part;
                }
            }

            $packages[] = Yii::createObject([
                'class' => static::buildPackageClass($tariff),
                'tariff' => $tariff,
                'parts' => $tariffParts,
                'calculation' => $prices[$tariff->id],
            ]);
        }

        ArrayHelper::multisort($packages, 'price', SORT_ASC, SORT_NUMERIC);

        if (empty($packages)) {
            throw new NotFoundHttpException('Requested tariff is not available');
        }

        if (isset($tariff_id) && !is_array($tariff_id)) {
            return reset($packages);
        }

        return $packages;
    }
}
