# Implicit
A feature is implicit when it is available, yet not explicitly visible. 

For example, objects are passed by reference to functions: any change applied to that object, inside the function, is also available in the calling context.

Until PHP 8.4, it was possible to assign ``null`` as a default value to any typed parameter: ``null`` was implicitely an accepted type for that value. 

The contrary to implicit is explicit. This notion share similarities with hidden features and collateral features.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/implicit.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/implicit.html","name":"Implicit","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:20 +0000","dateModified":"Fri, 19 Jun 2026 21:24:20 +0000","description":"A feature is implicit when it is available, yet not explicitly visible","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Implicit.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Explicit](explicit.ini.html)
+ [Appeasement Pattern](appeasement-pattern.ini.html)
+ [Distributed State](distributed-state.ini.html)
+ [Hidden State](hidden-state.ini.html)
+ [Implicit State](implicit-state.ini.html)
