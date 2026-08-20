# Collision
A collision happens when two entities of the same type have two distinct definitions. This usually leads to a PHP Fatal error, as the engine can't tell the difference between the two structures.

Note that structures of different types may have the same name, although it might lead to ambiguities. 

Structures with the same name, and defined in different namespaces are possible. The naming collision may happen at import time, a.k.a. with a ``use`` expression, and may be solved with an alias. 

Some structures resolve collisions by simply overwriting the previous one: this is the case for variables.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/collision.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/collision.html","name":"Collision","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:26:11 +0000","dateModified":"Fri, 19 Jun 2026 21:26:11 +0000","description":"A collision happens when two entities of the same type have two distinct definitions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Collision.html"]}],"alternateName":["name-collision"],"keywords":["name"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use-trait.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use-alias.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Collision_(computer_science)"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"collision"}]}]}</script>
```php
<?php

    function foo() {}
    
    // name collision: no two functions can have the same name
    // name collision: function names are case insensitive, so foo === FOO
    // function FOO() {} 
    
    // FOO as a constant and FOO as a function are distinct elements. 
    const FOO = 1;
    
    // variable collisions are silent : the variable's value is simply changed
    $a = 1;
    foreach($array as $a) {
        print $a; // may print a different value than 1
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Collision_(computer_science))**
## Related

+ [Namespaces](namespace.html)
+ [Use In Traits](use-trait.html)
+ [Use Alias](use-alias.html)
