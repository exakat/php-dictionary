# Async
The ``async`` keyword is used in programming, and especially in languages like JavaScript, Python, and C#, to define a function that runs asynchronously. It means that it can perform operations without blocking the rest of the program.

PHP does not support a notion of ``async``. The closest feature is called ``fiber`` or parallel processing, yet it is quite different from asynchronous. Generators also provide a pseudo-asynchronous processing.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/async.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/async.ini.html","name":"Async","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:23:54 +0000","dateModified":"Tue, 14 Jul 2026 06:23:54 +0000","description":"The ``async`` keyword is used in programming, and especially in languages like JavaScript, Python, and C#, to define a function that runs asynchronously","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Async.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Fibers](fiber.ini.html)
+ [Generator](generator.ini.html)
+ [Asynchronous](asynchronous.ini.html)
+ [Fibers](fibers.ini.html)
+ [Spiral](spiral.ini.html)
+ [Thread](thread.ini.html)
+ [Blocking Wait](blocking-wait.ini.html)
+ [Stealth Generator](stealth-generator.ini.html)
+ [C10K](c10k.ini.html)
+ [Edge Triggered](edge-triggered.ini.html)
+ [Fire-and-forget](fire-and-forget.ini.html)
+ [Non-blocking](non-blocking.ini.html)
+ [One-shot](one-shot.ini.html)
+ [AMP (Asynchronous Markup Protocol)](amp.ini.html)
+ [Channel](channel.ini.html)
+ [Green Thread](green-thread.ini.html)
+ [ReactPHP](reactphp.ini.html)

## Related packages

+ [amphp/amp](https://packagist.org/packages/amphp/amp)
