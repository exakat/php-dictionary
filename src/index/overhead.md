# Overhead
Overhead is the extra cost a system pays to do a task, on top of the work the task actually needs. The cost may be time, memory, network bytes, or code complexity. An HTTP request carries headers beyond its body, a function call pushes a frame before it does anything, and an ORM builds objects for every row before the application reads a single field.

Overhead is not always a problem. Abstractions, framework layers and safety checks exist because they buy maintainability or correctness, and paying a small overhead for them is usually the right trade. It becomes a problem when it is large compared with the work, or when it is paid many times, such as per request, per row or per loop iteration.

Overhead is measured against a baseline: the same work done without the layer, or the cost of the layer alone. Profilers and benchmarks show where the time goes, and often the overhead sits in bootstrap code that runs on every request rather than in the business logic.

Overhead is not the same as zero-cost abstraction, a design where the layer adds no runtime cost at all.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overhead.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overhead.html","name":"Overhead","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 06 Nov 2026 10:13:45 +0000","dateModified":"Fri, 06 Nov 2026 10:13:45 +0000","description":"Overhead is the extra cost a system pays to do a task, on top of the work the task actually needs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overhead.html"]}],"alternateName":["performance-overhead"],"keywords":["concept","performance"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/performance.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/latency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throughput.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zero-cost.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/benchmarking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/profiler.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/opcache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/decorator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abstraction.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.microtime.php"},{"@type":"CreativeWork","name":"Overhead (computing) - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Overhead_(computing)"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.40","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"overhead"}]}]}</script>
```php
<?php

    // Measure the cost of a layer against the work it wraps
    $start = microtime(true);
    for ($i = 0; $i < 100000; $i++) {
        $direct = strlen($text);
    }
    $direct_time = microtime(true) - $start;

    $start = microtime(true);
    for ($i = 0; $i < 100000; $i++) {
        $wrapped = $stringService->length($text); // extra method call per iteration
    }
    $wrapped_time = microtime(true) - $start;

    // The difference is the overhead of the layer
    echo 'overhead: ' . round($wrapped_time - $direct_time, 4) . "s\n";

?>
```

**[Documentation](https://www.php.net/manual/en/function.microtime.php)**
## See Also

+ [Overhead (computing) - Wikipedia](https://en.wikipedia.org/wiki/Overhead_(computing))

## Related

+ [Performance](performance.html)
+ [Latency](latency.html)
+ [Throughput](throughput.html)
+ [Zero Cost](zero-cost.html)
+ [Benchmarking](benchmarking.html)
+ [PHP Profiler](profiler.html)
+ [Opcache](opcache.html)
+ [Decorator Pattern](decorator.html)
+ [Abstraction](abstraction.html)
