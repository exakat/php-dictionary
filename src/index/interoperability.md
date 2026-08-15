# Interoperability
Interoperability is the ability of distinct software components or systems to exchange information and work together effectively, without special adaptation effort.

In the PHP ecosystem, interoperability is promoted by PHP-FIG, the PHP Framework Interop Group, through PSR standards, which define common interfaces for loggers, the PSR-3, HTTP messages, the PSR-7, dependency injection containers, the PSR-11, caches, the PSR-6 and PSR-16, event dispatchers, the PSR-14, and HTTP handlers, the PSR-15.

Designing against interfaces rather than concrete implementations enables components from different libraries and frameworks to be composed freely. This is the foundation of the modern PHP package ecosystem.

Interoperability also extends beyond the PHP ecosystem itself: PHP natively handles many exchange formats, such as JSON, XML, YAML, CSV, and Protocol Buffers, which lets it talk to services and applications written in any other language. A PHP application can consume a JSON API served by a Node.js backend, exchange Protobuf messages with a Go microservice over gRPC, or parse a CSV export produced by a legacy system, without either side knowing what language the other is written in. The FFI extension pushes this further, allowing PHP to call C libraries directly, in process.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interoperability.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interoperability.html","name":"Interoperability","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 06:22:05 +0000","dateModified":"Tue, 04 Aug 2026 06:22:05 +0000","description":"Interoperability is the ability of distinct software components or systems to exchange information and work together effectively, without special adaptation effort","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Interoperability.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"interoperability"}]}]}</script>
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

+ [PHP Standards Recommendations (PSR)](psr.html)
+ [Interface](interface.html)
+ [Framework Interoperability Group (FIG)](php-fig.html)
+ [Dependency Injection](dependency-injection.html)
+ [Composition](composition.html)
+ [Decoupling](decoupling.html)
+ [Compatibility](compatibility.html)
+ [Clock](clock.html)
+ [Foreign Function Interface (FFI)](ffi.html)
+ [JavaScript Object Notation (JSON)](json.html)
+ [Extensible Markup Language (XML)](xml.html)
+ [YAML Ain't Markup Language (YAML)](yaml.html)
+ [Comma Separated Values (CSV)](csv.html)
+ [Protocol Buffers](protobuf.html)
+ [gRPC (Google Remote Procedure Call)](grpc.html)
+ [Serialization](serialization.html)
+ [Simple Object Access Protocol (SOAP)](soap.html)
