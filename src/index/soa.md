# Service-Oriented Architecture (SOA)
Service-Oriented Architecture, or ``SOA``, is an architectural style where software is composed of discrete, reusable services that communicate over a network through well-defined interfaces. Each service encapsulates a specific business capability and can be consumed by other services or applications.

``SOA`` predates microservices and typically operates at a coarser granularity. Services are usually coordinated by an Enterprise Service Bus, which handles routing, transformation, and orchestration. Communication is commonly done via SOAP/WSDL contracts, though REST-based ``SOA`` also exists.

``SOA`` principles appear in SOAP-based web services ``ext-soap``, service layer patterns inside frameworks, and large enterprise integrations where PHP acts as a consumer or producer of shared business services.

``SOA`` and microservices share the goal of decomposing a system into services, but differ in coupling, governance, and deployment model. ``SOA`` tends toward centralised orchestration; microservices favour decentralised choreography.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/soa.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/soa.html","name":"Service-Oriented Architecture (SOA)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 17:09:09 +0000","dateModified":"Mon, 03 Aug 2026 17:09:09 +0000","description":"Service-Oriented Architecture, or ``SOA``, is an architectural style where software is composed of discrete, reusable services that communicate over a network through well-defined interfaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Service-Oriented Architecture (SOA).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
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
```

**[Documentation](https://en.wikipedia.org/wiki/Service-oriented_architecture)**
## See Also

+ [How to Implement Service-Oriented Architecture with PHP](https://datatas.com/how-to-implement-service-oriented-architecture-with-php/)

## Related

+ [Microservice](microservice.ini.html)
+ [Monolith](monolith.ini.html)
+ [Simple Object Access Protocol (SOAP)](soap.ini.html)
+ [REST API](rest-api.ini.html)
+ [API Gateway](api-gateway.ini.html)
+ [Separation Of Concerns](separation-of-concerns.ini.html)
