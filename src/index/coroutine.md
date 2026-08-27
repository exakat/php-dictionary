# Coroutine
Coroutines are methods whose execution may be suspended and resumed. 

PHP generators are a sort of coroutines.

Swoole, Openswoole and fibers extensions offer coroutines.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coroutine.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coroutine.html","name":"Coroutine","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:23:12 +0000","dateModified":"Tue, 14 Jul 2026 06:23:12 +0000","description":"Coroutines are methods whose execution may be suspended and resumed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coroutine.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/blocking-wait.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stealth-generator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/actor-model.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/channel.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/continuation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/green-thread.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/amp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/openswoole.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reactphp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/swoole.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Coroutine"},{"@type":"CreativeWork","name":"Coroutine in PHP","url":"https:\/\/openswoole.com\/coroutine"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"coroutine"}]}]}</script>
```php
<?php

    // Example from OpenSwoole (https://openswoole.com/docs/modules/swoole-coroutine)
    Co\run(function()
    {
        go(function()
        {
            Co::sleep(1);
            echo "Done 1\n";
        });
    
        go(function()
        {
            Co::sleep(1);
            echo "Done 2\n";
        });
    });

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Coroutine)**
## See Also

+ [Coroutine in PHP](https://openswoole.com/coroutine)

## Related

+ [Generator](generator.html)
+ [Blocking Wait](blocking-wait.html)
+ [Stealth Generator](stealth-generator.html)
+ [Actor Model](actor-model.html)
+ [Channel](channel.html)
+ [Continuation](continuation.html)
+ [Green Thread](green-thread.html)
+ [AMP (Asynchronous Markup Protocol)](amp.html)
+ [OpenSwoole](openswoole.html)
+ [ReactPHP](reactphp.html)
+ [Swoole](swoole.html)

## Related packages

+ [swow/swow](https://packagist.org/packages/swow/swow)
+ [swlib/saber](https://packagist.org/packages/swlib/saber)
+ [amphp/amp](https://packagist.org/packages/amphp/amp)
