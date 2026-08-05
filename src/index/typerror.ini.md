# Type Error
A ``TypeError`` is an error that occurs when there is a mismatch between the expected data type and the actual data type of a variable or value in your code. This applies to method arguments, property types and method return types. 

PHP is a dynamically typed language, which means that variable types are not explicitly declared, and PHP determines the data type at runtime. ``TypeError`` can occur when PHP encounters a situation where the expected data type does not match the actual data type.

``TypeError`` apply to typed custom methods, native PHP methods and operators. ``TypeError`` do not represent an invalid value: for example, an argument may be typed ``int``, and later used in a division, while being zero. This situation will yield a different exception.

``TypeError`` are a kind of ``Throwable``. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/typerror.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/typerror.ini.html","name":"Type Error","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A ``TypeError`` is an error that occurs when there is a mismatch between the expected data type and the actual data type of a variable or value in your code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Type Error.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

function foo(User $user) {

}

try {
    foo('a');
} catch (TypeError $e) {
    print "Wrong type of data\n";
}

?>
```

**[Documentation](https://www.php.net/manual/en/class.typeerror.php)**
## See Also

+ [Guide to handling PHP TypeError: A step-by-step approach to fixing common programming errors](https://www.zipy.ai/blog/debug-php-typeerror)

## Related

+ [Exception](exception.ini.html)
+ [Throwable](throwable.ini.html)
