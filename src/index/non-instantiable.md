# Non-instantiable
Usually, classes are turned into objects via instantiation. Yet, some classes are not capable of that: they are non-instantiable.

This is the case of some native classes, such as SQLite3Result, which must be created by the dedicated methods: they can't be created by custom code. 

In userland code, non-instantiable classes have a private constructor, which makes them impossible to instantiate, unless there is a named constructor.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-instantiable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-instantiable.html","name":"Non-instantiable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:46 +0000","dateModified":"Fri, 19 Jun 2026 21:25:46 +0000","description":"Usually, classes are turned into objects via instantiation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Non-instantiable.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"non-instantiable"}]}]}</script>
```php
<?php

class X {
    private function __construct() {}
}

// 
new X();

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.basic.php)**
## Related

+ [instance](instance.html)
