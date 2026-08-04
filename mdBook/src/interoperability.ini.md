# Interoperability
Interoperability is the ability of distinct software components or systems to exchange information and work together effectively, without special adaptation effort.

In the PHP ecosystem, interoperability is promoted by PHP-FIG, the PHP Framework Interop Group, through PSR standards, which define common interfaces for loggers, the PSR-3, HTTP messages, the PSR-7, dependency injection containers, the PSR-11, caches, the PSR-6 and PSR-16, event dispatchers, the PSR-14, and HTTP handlers, the PSR-15.

Designing against interfaces rather than concrete implementations enables components from different libraries and frameworks to be composed freely. This is the foundation of the modern PHP package ecosystem.

Interoperability also extends beyond the PHP ecosystem itself: PHP natively handles many exchange formats, such as JSON, XML, YAML, CSV, and Protocol Buffers, which lets it talk to services and applications written in any other language. A PHP application can consume a JSON API served by a Node.js backend, exchange Protobuf messages with a Go microservice over gRPC, or parse a CSV export produced by a legacy system, without either side knowing what language the other is written in. The FFI extension pushes this further, allowing PHP to call C libraries directly, in process.
```php
<?php

    use Psr\Log\LoggerInterface;
    
    // Any PSR-3 compliant logger may be injected
    function process(LoggerInterface $logger): void {
        $logger->info('Processing started');
    }

?>
```

## See Also

+ [Understanding PSR Standards and Their Importance in Modern PHP Development](https://dev.to/abhay_yt_52a8e72b213be229/understanding-psr-standards-and-their-importance-in-modern-php-development-32ho)

Related : [PHP Standards Recommendations (PSR)](PHP Standards Recommendations (PSR)), [Interface](Interface), [Framework Interoperability Group (FIG)](Framework Interoperability Group (FIG)), [Dependency Injection](Dependency Injection), [Composition](Composition), [Decoupling](Decoupling), [Compatibility](Compatibility), [Clock](Clock), [Foreign Function Interface (FFI)](Foreign Function Interface (FFI)), [JavaScript Object Notation (JSON)](JavaScript Object Notation (JSON)), [Extensible Markup Language (XML)](Extensible Markup Language (XML)), [YAML Ain't Markup Language (YAML)](YAML Ain't Markup Language (YAML)), [Comma Secparated Values (CSV)](Comma Secparated Values (CSV)), [Protocol Buffers](Protocol Buffers), [gRPC (Google Remote Procedure Call)](gRPC (Google Remote Procedure Call)), [Serialization](Serialization), [Simple Object Access Protocol (SOAP)](Simple Object Access Protocol (SOAP))
