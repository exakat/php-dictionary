# Dynamic Class
A dynamic class is a class whose fully qualified name is defined at execution time. 

This is convenient for module systems, where the actual class is named from an external configuration.

The name of the class is a string. It may be also accessed with the ``::class`` operator. 

For a dynamic call, the name of the class may or may not start with a ``\`` char: both cases work.

Dynamic class may be used with static calls, class constants, enum cases, static method or static property. Here, the call is static, as it actually does not depends on the object, but on the class of the object. 

It may also be used with the instantiation operator ``new``.

It is also possible to use an object of the same class for all these calls.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dynamic-class.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dynamic-class.ini.html","name":"Dynamic Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:46:53 +0000","dateModified":"Thu, 23 Jul 2026 13:46:53 +0000","description":"A dynamic class is a class whose fully qualified name is defined at execution time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Dynamic Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class AB {}
    
    class AC {}
    
    $name = '\A'.(rand(0, 1) ? 'B' : 'C');
    
    $object = new $name;    // creates a class of AB or AC
    $object2 = new $object; // creates another object of AB or AC, same as $object

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.basic.php)**
## See Also

+ [How to Dynamically Generate Classes at Runtime in PHP: A Guide to Using __autoload and Avoiding eval() Issues](https://www.codestudy.net/blog/dynamically-generate-classes-at-runtime-in-php/#google_vignette)

## Related

+ [new](new.ini.html)
+ [Static Call](static-call.ini.html)
+ [Late Static Binding](late-binding.ini.html)
+ [Early Binding](early-binding.ini.html)
