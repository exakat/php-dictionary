# Async
The ``async`` keyword is used in programming, and especially in languages like JavaScript, Python, and C#, to define a function that runs asynchronously. It means that it can perform operations without blocking the rest of the program.

PHP does not support a notion of ``async``. The closest feature is called ``fiber`` or parallel processing, yet it is quite different from asynchronous. Generators also provide a pseudo-asynchronous processing.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/async.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/async.html","name":"Async","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:23:54 +0000","dateModified":"Tue, 14 Jul 2026 06:23:54 +0000","description":"The async keyword is used in programming, and especially in languages like JavaScript, Python, and C#, to define a function that runs asynchronously","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Async.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"async"}]}]}</script>
```php
<?php

    // Starting another process for parallel processing
    shell_exec('php other.php &');

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Async/await)**
## See Also

+ [TrueAsync](https://github.com/true-async)

## Related

+ [Fibers](fiber.html)
+ [Generator](generator.html)
+ [Asynchronous](asynchronous.html)
+ [Fibers](fibers.html)
+ [Spiral](spiral.html)
+ [Thread](thread.html)
+ [Blocking Wait](blocking-wait.html)
+ [Stealth Generator](stealth-generator.html)
+ [C10K](c10k.html)
+ [Edge Triggered](edge-triggered.html)
+ [Fire-and-forget](fire-and-forget.html)
+ [Non-blocking](non-blocking.html)
+ [One-shot](one-shot.html)
+ [AMP (Asynchronous Markup Protocol)](amp.html)
+ [Channel](channel.html)
+ [Green Thread](green-thread.html)
+ [ReactPHP](reactphp.html)

## Related packages

+ [amphp/amp](https://packagist.org/packages/amphp/amp)
