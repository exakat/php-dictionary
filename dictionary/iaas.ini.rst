.. _iaas:
.. _infrastructure-as-a-service:
.. meta::
	:description:
		IaaS: IaaS, Infrastructure as a Service, is a cloud-computing model in which a provider supplies virtualized computing resources, such as servers, storage, and networking, over the internet, on demand and billed by usage.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: IaaS
	:twitter:description: IaaS: IaaS, Infrastructure as a Service, is a cloud-computing model in which a provider supplies virtualized computing resources, such as servers, storage, and networking, over the internet, on demand and billed by usage
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: IaaS
	:og:type: article
	:og:description: IaaS, Infrastructure as a Service, is a cloud-computing model in which a provider supplies virtualized computing resources, such as servers, storage, and networking, over the internet, on demand and billed by usage
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/iaas.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/iaas.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/iaas.ini.html","name":"IaaS","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:10 +0000","dateModified":"Fri, 19 Jun 2026 21:24:10 +0000","description":"IaaS, Infrastructure as a Service, is a cloud-computing model in which a provider supplies virtualized computing resources, such as servers, storage, and networking, over the internet, on demand and billed by usage","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/IaaS.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


IaaS
----

IaaS, Infrastructure as a Service, is a cloud-computing model in which a provider supplies virtualized computing resources, such as servers, storage, and networking, over the internet, on demand and billed by usage.

Unlike PaaS or SaaS, IaaS gives the consumer control over the operating system, runtime, and application stack. The provider manages physical hardware and hypervisors; the consumer manages everything above.

PHP applications hosted on IaaS run on virtual machines or bare-metal instances managed by the team. Common IaaS providers include AWS EC2, Google Compute Engine, and Azure Virtual Machines. Automation tools such as Ansible, Terraform, or Chef are typically used to provision and configure the PHP runtime, web server, and database on top of the raw infrastructure.

.. code-block:: php
   
   <?php
   
       // Interacting with IaaS resources via an SDK — AWS example
       use Aws\Ec2\Ec2Client;
   
       $client = new Ec2Client([
           'region'  => 'eu-west-1',
           'version' => 'latest',
       ]);
   
       // List running instances
       $result = $client->describeInstances([
           'Filters' => [['Name' => 'instance-state-name', 'Values' => ['running']]],
       ]);
   
       foreach ($result['Reservations'] as $reservation) {
           foreach ($reservation['Instances'] as $instance) {
               echo $instance['InstanceId'] . PHP_EOL;
           }
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Infrastructure_as_a_service>`__

See also `AWS EC2 <https://aws.amazon.com/ec2/>`_, `Google Compute Engine <https://cloud.google.com/compute>`_ and `Azure Virtual Machines <https://azure.microsoft.com/en-us/products/virtual-machines/>`_.

Related : :ref:`PaaS <paas>`, :ref:`Software-as-a-Service (SAAS) <saas>`, :ref:`Cloud <cloud>`, :ref:`Application <application>`, :ref:`Docker <docker>`, :ref:`Hosting <hosting>`, :ref:`Pay-as-you-go <pay-as-you-go>`, :ref:`Serverless <serverless>`

Related packages : `aws/aws-sdk-php <https://packagist.org/packages/aws/aws-sdk-php>`_
