# is\_a()
``is_a()`` is a PHP native function, that checks if an object is of a specific class. 

Usually, ``is_a()`` is better replaced by ``instanceof``, which is a PHP operator. The function might be needed to create a closure, though.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/is_a.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/is_a.ini.html","name":"is_a()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:30:29 +0000","dateModified":"Tue, 04 Aug 2026 11:30:29 +0000","description":"``is_a()`` is a PHP native function, that checks if an object is of a specific class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/is_a().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $object = (object) ['a' => 1];

    var_dump(is_a($object, stdClass::class));

?>
```

**[Documentation](https://www.php.net/manual/en/function.is-a.php)**
## See Also

+ [is_a() versus instanceof](https://php-tips.readthedocs.io/en/latest/tips/is_a_and_instanceof.html)

## Related

+ [instanceof](instanceof.ini.html)
+ [Type Checking](type-checking.ini.html)
+ [Object](object.ini.html)
+ [Polymorphism](polymorphism.ini.html)
+ [Class](class.ini.html)
+ [is\_object()](is_object.ini.html)
