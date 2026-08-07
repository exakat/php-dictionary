# Implicit
A feature is implicit when it is available, yet not explicitly visible. 

For example, objects are passed by reference to functions: any change applied to that object, inside the function, is also available in the calling context.

Until PHP 8.4, it was possible to assign ``null`` as a default value to any typed parameter: ``null`` was implicitely an accepted type for that value. 

The contrary to implicit is explicit. This notion share similarities with hidden features and collateral features.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implicit.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implicit.html","name":"Implicit","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:20 +0000","dateModified":"Fri, 19 Jun 2026 21:24:20 +0000","description":"A feature is implicit when it is available, yet not explicitly visible","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Implicit.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Implicit"}]}]}</script>
```php
<?php

function foo($object) {
    $object->p = 1;
}

$object = new stdClass();
foo($object);
echo $object->p; 

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Implicit_type_conversion)**
## Related

+ [Explicit](explicit.html)
+ [Appeasement Pattern](appeasement-pattern.html)
+ [Distributed State](distributed-state.html)
+ [Hidden State](hidden-state.html)
+ [Implicit State](implicit-state.html)
