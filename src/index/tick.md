# Tick
Ticks are events that occur for a group of statements, executed by PHP. 

Ticks are started within the declare block. 

Ticks are deprecated since PHP 5.3. They might entirely disappear in version 9.0.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/tick.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/tick.html","name":"Tick","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 09:04:11 +0000","dateModified":"Tue, 30 Jun 2026 09:04:11 +0000","description":"Ticks are events that occur for a group of statements, executed by PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Tick.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    declare(ticks=1);
    
    // A function called on each tick event
    function tick_handler()
    {
        echo 'tick_handler() called'.PHP_EOL;
    }
    
    register_tick_function('tick_handler'); // causes a tick event
    
    $a = 1; // causes a tick event
    
    if ($a > 0) {
        $a += 2; // causes a tick event
        print($a); // causes a tick event
    }

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.declare.php#control-structures.declare.ticks)**
## See Also

+ [The declare() function and ticks](http://www.hackingwithphp.com/4/21/0/the-declare-function-and-ticks)
+ [PHP RFC: Deprecate ticks](https://wiki.php.net/rfc/deprecate_ticks)

## Related

+ [declare()](declare.ini.html)
