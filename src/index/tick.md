# Tick
Ticks are events that occur for a group of statements, executed by PHP. 

Ticks are started within the declare block. 

Ticks are deprecated since PHP 5.3. They might entirely disappear in version 9.0.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tick.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tick.html","name":"Tick","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Ticks are events that occur for a group of statements, executed by PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tick.html"]}],"keywords":["declare","rfc"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/declare.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/control-structures.declare.php#control-structures.declare.ticks"},{"@type":"CreativeWork","name":"The declare() function and ticks","url":"http:\/\/www.hackingwithphp.com\/4\/21\/0\/the-declare-function-and-ticks"},{"@type":"CreativeWork","name":"PHP RFC: Deprecate ticks","url":"https:\/\/wiki.php.net\/rfc\/deprecate_ticks"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"tick"}]}]}</script>
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

+ [declare()](declare.html)
