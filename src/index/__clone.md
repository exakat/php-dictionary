# \_\_clone() Method
To clone an object is the creation of a new distinct object, from an existing one. This is basically a copy, although the object itself is multiplied by calling the clone operator.

By default PHP does a shallow clone, duplicating the scalars, like string, integer..., and keeping the same reference to objects. To make a deep clone, the class must define the ``__clone`` magic method.

Cloning is similar to creating another object of the same class, without requiring all the constructor arguments.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__clone.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__clone.html","name":"__clone() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"To clone an object is the creation of a new distinct object, from an existing one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__clone() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"__clone() Method"}]}]}</script>
```php
<?php

    $spike = new Dog('Spike', 'Teckel', 'red');
    $medor = clone $spike;
    
    $medor->setCollar('green'); // distinguish spike and medor by collar

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.cloning.php)**
## See Also

+ [How to clone an object in PHP](https://linuxhint.com/cloning_objects_php/)

## Related

+ [Readonly](readonly.html)
+ [Magic Methods](magic-method.html)
+ [Deep Clone](deep-clone.html)
+ [Shallow Clone](shallow-clone.html)
