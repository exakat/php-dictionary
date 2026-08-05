# Silent Behavior
Silent behaviors are expressions that do not raise any error, yet perform a transformation on data, with or without the programmer's knowledge.

Silent behaviors also describes extra actions that are taken by PHP, without signaling it or making it obvious.

Since they are silent, their usage or absence of usage is never signaled and the code may stay in the repository long before being discovered and removed or fixed.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/silent.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/silent.ini.html","name":"Silent Behavior","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:23:51 +0000","dateModified":"Fri, 19 Jun 2026 21:23:51 +0000","description":"Silent behaviors are expressions that do not raise any error, yet perform a transformation on data, with or without the programmer's knowledge","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Silent Behavior.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Importing a non existent class
    use Unknown\Namespace\theClass;
    
    // Typing with a non-existent class, or a trait, but still allowing other types
    function foo(UndefinedType|string $t) : \aTrait|string {}
    
    // The whole try catch is now useless.
    try {
    
    } catch (unknownException $e) {}
    
    // null is automatically turned into an int, so 0
    $a = [null => 1];
    echo $a[0]; // displays 1

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Defensive_programming)**
## Related

+ [Type Juggling](type-juggling.ini.html)
+ [Typo](typo.ini.html)
