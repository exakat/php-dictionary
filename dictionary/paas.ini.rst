.. _paas:
.. _platform-as-a-service:
.. meta::
	:description:
		PaaS: PaaS, or Platform as a Service, is a cloud-computing model in which a provider manages the underlying infrastructure, like hardware, operating system, and runtime, so that developers can focus on deploying and running applications without administering servers.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PaaS
	:twitter:description: PaaS: PaaS, or Platform as a Service, is a cloud-computing model in which a provider manages the underlying infrastructure, like hardware, operating system, and runtime, so that developers can focus on deploying and running applications without administering servers
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PaaS
	:og:type: article
	:og:description: PaaS, or Platform as a Service, is a cloud-computing model in which a provider manages the underlying infrastructure, like hardware, operating system, and runtime, so that developers can focus on deploying and running applications without administering servers
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/paas.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/paas.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/paas.ini.html","name":"PaaS","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:27:08 +0000","dateModified":"Fri, 19 Jun 2026 21:27:08 +0000","description":"PaaS, or Platform as a Service, is a cloud-computing model in which a provider manages the underlying infrastructure, like hardware, operating system, and runtime, so that developers can focus on deploying and running applications without administering servers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/PaaS.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


PaaS
----

PaaS, or Platform as a Service, is a cloud-computing model in which a provider manages the underlying infrastructure, like hardware, operating system, and runtime, so that developers can focus on deploying and running applications without administering servers.

For PHP applications, PaaS abstracts away web server configuration, PHP version management, and OS patching. The developer pushes code, via Git, a container image, or a deployment CLI, and the platform handles provisioning, scaling, and availability. Examples include Heroku, Platform.sh, Google App Engine, and AWS Elastic Beanstalk.

PaaS sits between IaaS, full infrastructure control, and SaaS, fully managed software. It trades flexibility for operational simplicity, making it well-suited for teams that want to ship PHP applications quickly without dedicated infrastructure engineers.

.. code-block:: php
   
   <?php
   
       // A typical PaaS entry point: the platform injects environment variables
       // for database credentials, ports, and other service bindings.
   
       $dsn = sprintf(
           'pgsql:host=%s;port=%s;dbname=%s',
           getenv('DB_HOST'),
           getenv('DB_PORT') ?: '5432',
           getenv('DB_NAME')
       );
   
       $pdo = new PDO($dsn, getenv('DB_USER'), getenv('DB_PASSWORD'), [
           PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
       ]);
   
       // The platform also controls the HTTP port
       $port = getenv('PORT') ?: 8080;
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Platform_as_a_service>`__

See also `Heroku PHP <https://devcenter.heroku.com/categories/php-support>`_ and `Platform.sh <https://platform.sh/>`_.

Related : :ref:`IaaS <iaas>`, :ref:`Software-as-a-Service (SAAS) <saas>`, :ref:`Cloud <cloud>`, :ref:`Application <application>`, :ref:`Docker <docker>`, :ref:`Hosting <hosting>`, :ref:`Pay-as-you-go <pay-as-you-go>`, :ref:`Serverless <serverless>`
