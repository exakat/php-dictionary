# \_\_clone() Method
To clone an object is the creation of a new distinct object, from an existing one. This is basically a copy, although the object itself is multiplied by calling the clone operator.

By default PHP does a shallow clone, duplicating the scalars, like string, integer..., and keeping the same reference to objects. To make a deep clone, the class must define the ``__clone`` magic method.

Cloning is similar to creating another object of the same class, without requiring all the constructor arguments.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__clone.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__clone.html","name":"__clone() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:44:58 +0000","dateModified":"Thu, 09 Jul 2026 08:56:44 +0000","description":"To clone an object is the creation of a new distinct object, from an existing one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__clone() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Readonly](readonly.ini.html)
+ [Magic Methods](magic-method.ini.html)
+ [Deep Clone](deep-clone.ini.html)
+ [Shallow Clone](shallow-clone.ini.html)
