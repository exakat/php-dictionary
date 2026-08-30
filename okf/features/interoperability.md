---
type: "PHP Feature"
title: "Interoperability"
description: "Interoperability is the ability of distinct software components or systems to exchange information and work together effectively, without special adaptation effort."
resource: "https://www.php-fig.org/"
tags: ["standard"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php-fig.org/](https://www.php-fig.org/)

## See Also
- [Understanding PSR Standards and Their Importance in Modern PHP Development](https://dev.to/abhay_yt_52a8e72b213be229/understanding-psr-standards-and-their-importance-in-modern-php-development-32ho)

## Related
- [PHP Standards Recommendations (PSR)](/features/psr.md)
- [Interface](/features/interface.md)
- [Framework Interoperability Group (FIG)](/features/php-fig.md)
- [Dependency Injection](/features/dependency-injection.md)
- [Composition](/features/composition.md)
- [Decoupling](/features/decoupling.md)
- [Compatibility](/features/compatibility.md)
- [Clock](/features/clock.md)
- [Foreign Function Interface (FFI)](/features/ffi.md)
- [JavaScript Object Notation (JSON)](/features/json.md)
- [Extensible Markup Language (XML)](/features/xml.md)
- [YAML Ain't Markup Language (YAML)](/features/yaml.md)
- [Comma Separated Values (CSV)](/features/csv.md)
- [Protocol Buffers](/features/protobuf.md)
- [gRPC (Google Remote Procedure Call)](/features/grpc.md)
- [Serialization](/features/serialization.md)
- [Simple Object Access Protocol (SOAP)](/features/soap.md)

