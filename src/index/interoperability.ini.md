# Interoperability
Interoperability is the ability of distinct software components or systems to exchange information and work together effectively, without special adaptation effort.

In the PHP ecosystem, interoperability is promoted by PHP-FIG, the PHP Framework Interop Group, through PSR standards, which define common interfaces for loggers, the PSR-3, HTTP messages, the PSR-7, dependency injection containers, the PSR-11, caches, the PSR-6 and PSR-16, event dispatchers, the PSR-14, and HTTP handlers, the PSR-15.

Designing against interfaces rather than concrete implementations enables components from different libraries and frameworks to be composed freely. This is the foundation of the modern PHP package ecosystem.

Interoperability also extends beyond the PHP ecosystem itself: PHP natively handles many exchange formats, such as JSON, XML, YAML, CSV, and Protocol Buffers, which lets it talk to services and applications written in any other language. A PHP application can consume a JSON API served by a Node.js backend, exchange Protobuf messages with a Go microservice over gRPC, or parse a CSV export produced by a legacy system, without either side knowing what language the other is written in. The FFI extension pushes this further, allowing PHP to call C libraries directly, in process.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/interoperability.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/interoperability.ini.html","name":"Interoperability","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 06:22:05 +0000","dateModified":"Tue, 04 Aug 2026 06:22:05 +0000","description":"Interoperability is the ability of distinct software components or systems to exchange information and work together effectively, without special adaptation effort","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Interoperability.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    use Psr\Log\LoggerInterface;
    
    // Any PSR-3 compliant logger may be injected
    function process(LoggerInterface $logger): void {
        $logger->info('Processing started');
    }

?>
```

**[Documentation](https://www.php-fig.org/)**
## See Also

+ [Understanding PSR Standards and Their Importance in Modern PHP Development](https://dev.to/abhay_yt_52a8e72b213be229/understanding-psr-standards-and-their-importance-in-modern-php-development-32ho)

## Related

+ [PHP Standards Recommendations (PSR)](psr.ini.html)
+ [Interface](interface.ini.html)
+ [Framework Interoperability Group (FIG)](php-fig.ini.html)
+ [Dependency Injection](dependency-injection.ini.html)
+ [Composition](composition.ini.html)
+ [Decoupling](decoupling.ini.html)
+ [Compatibility](compatibility.ini.html)
+ [Clock](clock.ini.html)
+ [Foreign Function Interface (FFI)](ffi.ini.html)
+ [JavaScript Object Notation (JSON)](json.ini.html)
+ [Extensible Markup Language (XML)](xml.ini.html)
+ [YAML Ain't Markup Language (YAML)](yaml.ini.html)
+ [Comma Secparated Values (CSV)](csv.ini.html)
+ [Protocol Buffers](protobuf.ini.html)
+ [gRPC (Google Remote Procedure Call)](grpc.ini.html)
+ [Serialization](serialization.ini.html)
+ [Simple Object Access Protocol (SOAP)](soap.ini.html)
