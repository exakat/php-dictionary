.. _cloud:
.. _cloud-computing:
.. meta::
	:description:
		Cloud: Cloud computing refers to the delivery of computing services, servers, storage, databases, networking, software, analytics.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cloud
	:twitter:description: Cloud: Cloud computing refers to the delivery of computing services, servers, storage, databases, networking, software, analytics
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cloud
	:og:type: article
	:og:description: Cloud computing refers to the delivery of computing services, servers, storage, databases, networking, software, analytics
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cloud.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/cloud.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/cloud.ini.html","name":"Cloud","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Cloud computing refers to the delivery of computing services, servers, storage, databases, networking, software, analytics","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Cloud.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Cloud
-----

Cloud computing refers to the delivery of computing services, servers, storage, databases, networking, software, analytics..., over the internet. Instead of owning and maintaining physical hardware, developers and organizations rent these resources from cloud providers on a pay-as-you-go basis.

The main service models are:

+ IaaS, Infrastructure as a Service: virtual machines, storage, networking
+ PaaS, Platform as a Service: managed runtime environments, databases, deployment pipelines
+ SaaS, Software as a Service: fully managed applications

For PHP applications, cloud platforms provide hosting environments, e.g. AWS Elastic Beanstalk, Google Cloud Run, Azure App Service..., managed databases, object storage like S3, and serverless functions. The cloud enables horizontal scaling, geographic distribution, and resilience.


.. code-block:: php
   
   <?php
   
       // Reading AWS S3 object using the AWS SDK
       require 'vendor/autoload.php';
   
       $s3 = new Aws\S3\S3Client([
           'region'  => 'eu-west-1',
           'version' => 'latest',
       ]);
       
       $result = $s3->getObject([
           'Bucket' => 'my-bucket',
           'Key'    => 'my-file.txt',
       ]);
       
       echo $result['Body'];
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Cloud_computing>`__

See also `Cloud computing - Wikipedia <https://en.wikipedia.org/wiki/Cloud_computing>`_.

Related : :ref:`IaaS <iaas>`, :ref:`PaaS <paas>`, :ref:`Software-as-a-Service (SAAS) <saas>`, :ref:`Horizontal Scaling <horizontal-scaling>`, :ref:`Microservice <microservice>`, :ref:`Docker Container <docker-container>`, :ref:`Deployment <deploy>`, :ref:`Pay-as-you-go <pay-as-you-go>`, :ref:`Docker <docker>`, :ref:`Hosting <hosting>`, :ref:`Serverless <serverless>`

Related packages : `aws/aws-sdk-php <https://packagist.org/packages/aws/aws-sdk-php>`_, `google/cloud <https://packagist.org/packages/google/cloud>`_
