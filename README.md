# HiPanel Site

**Selling site for HiPanel**

[![Latest Stable Version](https://poser.pugx.org/hiqdev/hipanel-site/v/stable)](https://packagist.org/packages/hiqdev/hipanel-site)
[![Total Downloads](https://poser.pugx.org/hiqdev/hipanel-site/downloads)](https://packagist.org/packages/hiqdev/hipanel-site)
[![Build Status](https://img.shields.io/travis/hiqdev/hipanel-site.svg)](https://travis-ci.org/hiqdev/hipanel-site)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqdev/hipanel-site.svg)](https://scrutinizer-ci.com/g/hiqdev/hipanel-site/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqdev/hipanel-site.svg)](https://scrutinizer-ci.com/g/hiqdev/hipanel-site/)
[![Dependency Status](https://www.versioneye.com/php/hiqdev:hipanel-site/dev-master/badge.svg)](https://www.versioneye.com/php/hiqdev:hipanel-site/dev-master)

[![Logo](https://raw.githubusercontent.com/hiqdev/hipanel-core/master/docs/logo.png)](https://hipanel.com/)

[HiPanel](http://hipanel.com) is next generation billing and control panel for hosting, domains and more.

This package is the selling site for HiPanel. Provides:

- Service description pages
- Contact page
- Prices and order forms
- Shopping cart
- FAQ
- Terms and rules

## Installation

The preferred way to install this yii2-extension is through [composer](http://getcomposer.org/download/).

Either run

```sh
php composer.phar require "hiqdev/hipanel-site"
```

or add

```json
"hiqdev/hipanel-site": "*"
```

to the require section of your composer.json.

## Container overrides must be singletons, not definitions

`config/web.php` registers `AbstractMainMenu`/`AbstractNavbarMenu`/`AbstractFooterMenu`
under `container.singletons`, not `container.definitions`. `yii\di\Container` applies
the `singletons` section after `definitions`, so a `definitions`-based override here
used to always lose to `yii2-thememanager`'s own generic singleton defaults for the
same abstract classes, regardless of composer package merge order - the site's real
menus (via `hipanel\site\menus\*`) silently fell back to thememanager's generic
placeholder menus. Any new `AbstractSomethingMenu` override added here should follow
the same `singletons` convention.

Note: `hiqdev/hipanel-core` separately registers its own `AbstractNavbarMenu` default
(a dashboard navbar) under `container.definitions`. Because both this package and
hipanel-core declare the same key, the composer-config-plugin output can end up with
duplicate `AbstractNavbarMenu` entries under the same `singletons` array - a plain
PHP array literal with a duplicate key, where whichever is written last in the
generated file wins, independent of the singletons/definitions rule above. Consuming
projects that need this to be reliable (not dependent on generation order) should
force it from a `bootstrap` closure calling `Yii::$container->set()` instead of
relying on static config alone.

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2016-2017, HiQDev (http://hiqdev.com/)
