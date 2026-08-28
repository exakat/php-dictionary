# Silent Behavior
Silent behaviors are expressions that do not raise any error, yet perform a transformation on data, with or without the programmer's knowledge.

Silent behaviors also describes extra actions that are taken by PHP, without signaling it or making it obvious.

Since they are silent, their usage or absence of usage is never signaled and the code may stay in the repository long before being discovered and removed or fixed.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/silent.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/silent.html","name":"Silent Behavior","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Aug 2026 08:56:20 +0000","dateModified":"Thu, 20 Aug 2026 08:56:20 +0000","description":"Silent behaviors are expressions that do not raise any error, yet perform a transformation on data, with or without the programmer's knowledge","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/silent.html"]}],"alternateName":["silent-cast"],"keywords":["pattern","noSeeAlso"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-juggling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/max_input_vars.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Defensive_programming"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"silent"}]}]}</script>
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

+ [Type Juggling](type-juggling.html)
+ [Typo](typo.html)
+ [max\_input\_vars](max_input_vars.html)
