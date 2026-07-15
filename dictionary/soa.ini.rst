.. _soa:
.. _service-oriented-architecture:
.. meta::
	:description:
		Service-Oriented Architecture (SOA): Service-Oriented Architecture, or SOA, is an architectural style where software is composed of discrete, reusable services that communicate over a network through well-defined interfaces.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Service-Oriented Architecture (SOA)
	:twitter:description: Service-Oriented Architecture (SOA): Service-Oriented Architecture, or SOA, is an architectural style where software is composed of discrete, reusable services that communicate over a network through well-defined interfaces
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Service-Oriented Architecture (SOA)
	:og:type: article
	:og:description: Service-Oriented Architecture, or SOA, is an architectural style where software is composed of discrete, reusable services that communicate over a network through well-defined interfaces
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/soa.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/soa.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/soa.ini.html","name":"Service-Oriented Architecture (SOA)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 04 Jul 2026 08:21:56 +0000","dateModified":"Sat, 04 Jul 2026 08:21:56 +0000","description":"Service-Oriented Architecture, or SOA, is an architectural style where software is composed of discrete, reusable services that communicate over a network through well-defined interfaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Service-Oriented Architecture (SOA).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Service-Oriented Architecture (SOA)
-----------------------------------

Service-Oriented Architecture, or SOA, is an architectural style where software is composed of discrete, reusable services that communicate over a network through well-defined interfaces. Each service encapsulates a specific business capability and can be consumed by other services or applications.

SOA predates microservices and typically operates at a coarser granularity. Services are usually coordinated by an Enterprise Service Bus, which handles routing, transformation, and orchestration. Communication is commonly done via SOAP/WSDL contracts, though REST-based SOA also exists.

SOA principles appear in SOAP-based web services ``ext-soap``, service layer patterns inside frameworks, and large enterprise integrations where PHP acts as a consumer or producer of shared business services.

SOA and microservices share the goal of decomposing a system into services, but differ in coupling, governance, and deployment model. SOA tends toward centralised orchestration; microservices favour decentralised choreography.

.. code-block:: php
   
   <?php
   
       // PHP as a SOAP service consumer in an SOA context
       $client = new SoapClient('https://services.example.com/orders?wsdl');
       
       $result = $client->getOrderStatus([
           'orderId'    => 42,
           'customerId' => 100,
       ]);
       
       echo $result->status; // 'shipped'
       
       // PHP as a REST service in SOA
       // Each endpoint maps to a shared business capability
       // consumed by multiple internal applications
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Service-oriented_architecture>`__

See also `How to Implement Service-Oriented Architecture with PHP <https://datatas.com/how-to-implement-service-oriented-architecture-with-php/>`_.

Related : :ref:`Microservice <microservice>`, :ref:`Monolith <monolith>`, :ref:`Simple Object Access Protocol (SOAP) <soap>`, :ref:`REST API <rest-api>`, :ref:`API Gateway <api-gateway>`, :ref:`Separation Of Concerns <separation-of-concerns>`
