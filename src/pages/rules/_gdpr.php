<?php
use yii\helpers\Html;

?>

<h5>What is the GDPR?</h5>

<p>
    The General Data Protection Regulation (GDPR) is a new European privacy law becomes enforceable on May 25, 2018.
</p>


<h5>Who does the GDPR apply to?</h5>

<p>
    The GDPR applies to all entities and individuals based in the EU and to entities and individuals, whether or not based in the EU, that process the personal data of EU individuals. The GDPR defines personal data as any information relating to an identified or identifiable natural person. This is a broad definition, and includes data that is obviously personal (such as an individual’s name or contact details) as well as data that can be used to identify an individual indirectly (such as an individual’s IP address).
</p>


<h5>What is a controller, and what is a processor?</h5>

<p>
    According to article 4 of the EU GDPR Controller – “means the natural or legal person, public authority, agency or other body which, alone or jointly with others, determines the purposes and means of the processing of personal data”
</p>
<p>
    Processor – “means a natural or legal person, public authority, agency or other body which processes personal data on behalf of the controller” What is Our role under GDPR, controller or processor?
</p>


<h5>We combine data processor and a data controller roles:</h5>

<p>
    When you use Our products and services to process EU personal data, We act as a data processor. We act as a data controller for the EU customer information We collect to provide Our products and services and to provide timely customer support.
</p>


<h5>What personal data do We collect and store from you?</h5>

<p>
    We store data that you have given us voluntarily. You decide what personal data, if any, is uploaded to Our products and services.
</p>
<p>
    The list of Personal Data We collect:
</p>
<ul>
    <li>contact data – such as personal name, private address, phone number, private email;</li>
    <li>other data collected that could directly or indirectly identify you;</li>
    <li>account information – information about the products or services that you purchase or consider purchasing from Us, domain name registration information, IP addresses assigned by Us, your ID or any other information related to your account;</li>
    <li>information on communications with Us - information about enquiries made to Us to resolve a technical or administrative query, information about a chat session with Us, an e-mail or letter sent to Us or other of any contact or communication with Us</li>
</ul>


<h5>What are purposes of personal data collected?</h5>

<p>
    We collect the personal data for:
</p>
<ul>
    <li>performing a contract with you, processing of orders and provision of products and services;</li>
    <li>allowing the technical support personnel to provide assistance to you if needed;</li>
    <li>communicating with you, including providing information about Our services, offers, orders, provision of services, order status and payment and/or to answer questions from you;</li>
    <li>improving the quality of Our website and Our products and services;</li>
    <li>performing financial process, including calculating, invoicing and collecting of service charges and processing financial transaction regarding the acceptance of orders;</li>
    <li>performing statistical analysis of the usage of Our website or applications or tools that are accessed via the website, marketing activities (including through email, newsletter), conducting sales activities (including analyzing Data and the use of Our services for marketing offers) investigating and processing suspected violations of Our Acceptable Use Policy;</li>
    <li>to ensure security of persons and find and prevent fraud, to detect or prevent illegal activities;</li>
    <li>for law compliance purposes.</li>
</ul>


<h5>What personal data We collect for payment processing?</h5>

<p>
    We may provide paid products and/or services within the Service. In that case, We use third-party services for payment processing (e.g. payment processors).
</p>
<p>
    We will not store or collect your payment card details. That information is provided directly to Our third- party payment processors whose use of your personal information is governed by their Privacy Policy.
</p>
<p>
    These payment processors adhere to the standards set by PCI-DSS as managed by the PCI Security Standards Council, which is a joint effort of brands like Visa, MasterCard, American Express and Discover. PCI-DSS requirements help ensure the secure handling of payment information.
</p>


<h5>
    How long We retain your personal data?
</h5>

<p>
    We retain Personal Data We collect from you where We have an ongoing legitimate business need to do so (for example, to provide you with a service you have requested or to comply with applicable legal, tax, or accounting requirements).
</p>
<p>
    When We have no ongoing legitimate and business need to process your Personal Data, We will delete your Personal Data.
</p>


<h5>With whom do We share personal data?</h5>

<p>
    We do not share your data with third parties except as in accordance with this Privacy Policy, any agreement We have with you or as required by law.
</p>
<p>
    We may share Data about you with:
</p>
<ul>
    <li>partners or agents involved in delivering/purchasing the services you’ve ordered with Us;</li>
    <li>fraud prevention agencies;</li>
    <li>We will also share your information to the extent necessary to comply with ICANN or any ccTLD rules, regulations and policies when you register a domain name with Us.</li>
    <li>law enforcement agencies, regulatory organizations, courts or other public authorities to the extent required by law</li>
</ul>


<h5>What are the secure options used?</h5>

<p>
    According to the GDPR, the controller and the processor shall implement appropriate technical and organizational measures to ensure a level of security appropriate to the risk.
</p>
<p>
    We are constantly reviewing and enhancing its technical, physical and managerial procedures and rules to protect your personal data from unauthorized access, accidental loss and/or destruction. We use industry standard TLS certificates to provide encryption of data in transit, for example, all access to Our websites and management portals is covered by HTTPS protocol.
</p>


<h5>What is changing with WHOIS privacy?</h5>

<p>
    Also, from May 25th, We will not publish the personal data of domain name registrants located in the EU in the WHOIS. This is to ensure Our WHOIS output is compliant with the GDPR.
</p>
<p>
    However, access to personal data of domain name registrants may be granted when such access is necessary for technical reasons such as for the facilitation of transfers, or for law enforcement when it is legally entitled to such access.
</p>


<h5>What is the Data Processing Agreement (DPA)?</h5>

<p>
    Customers that handle EU personal data are required to comply with the privacy and security requirements under the GDPR. As part of this, they must ensure that the vendors they use to process the EU personal data also have privacy and security protections in place. We are committed to GDPR compliance and to helping you to comply with the GDPR when they use Our services. We have therefore made Our DPA available for you and it can be found <?= Html::a('here', ['/pages/rules/index#privacyPolicy']) ?>
</p>


<h5>Are You required to sign the DPA?</h5>

<p>
    In order to use Our products and services, you need to accept Our DPA, which We have provided a link to on Our website: <?= Yii::$app->params['organization.name'] ?>. By agreeing to Our Terms of Service Agreement, you are automatically accepting Our DPA and do not need to sign a separate document.
</p>


<h5>Can a you share the DPA to other?</h5>

<p>
    Yes. The DPA is a publicly available document and if you wish to share it with other to confirm Our security measures and other terms may feel free to do so.
</p>


<h5>What if I have additional questions?</h5>

<p>If you, have any additional questions, please do not hesitate to contact Us:</p>
<p>Email: <?= Html::mailto(Yii::$app->params['gdprEmail']) ?></p>

