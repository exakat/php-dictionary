# Coroutine
Coroutines are methods whose execution may be suspended and resumed. 

PHP generators are a sort of coroutines.

Swoole, Openswoole and fibers extensions offer coroutines.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/coroutine.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/coroutine.html","name":"Coroutine","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:23:12 +0000","dateModified":"Tue, 14 Jul 2026 06:23:12 +0000","description":"Coroutines are methods whose execution may be suspended and resumed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Coroutine.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Generator](generator.ini.html)
+ [Blocking Wait](blocking-wait.ini.html)
+ [Stealth Generator](stealth-generator.ini.html)
+ [Actor Model](actor-model.ini.html)
+ [Channel](channel.ini.html)
+ [Continuation](continuation.ini.html)
+ [Green Thread](green-thread.ini.html)
+ [AMP (Asynchronous Markup Protocol)](amp.ini.html)
+ [OpenSwoole](openswoole.ini.html)
+ [ReactPHP](reactphp.ini.html)
+ [Swoole](swoole.ini.html)

## Related packages

+ [swow/swow](https://packagist.org/packages/swow/swow)
+ [swlib/saber](https://packagist.org/packages/swlib/saber)
+ [amphp/amp](https://packagist.org/packages/amphp/amp)
