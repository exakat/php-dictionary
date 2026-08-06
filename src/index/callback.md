# Callbacks
Callbacks are functions or methods which are used as parameters for other functions. Such functions are used to customize the calling function. For example, ``array_map()``, which applies a callback to every element of an array, or ``usort()``, which sorts an array using a function.

Callback is akin to a functioncall: it is actually hidden inside the caller function. 

Callback may be build with on closures, arrow-functions, native PHP functions, methods and static methods. They also use string, such as ``strtolower``, and array, such as ``[X::class, 'methodName']``, or ``[$object, 'methodName']``, syntax. In fact, anything that ``is_callable()`` may be used.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/callback.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/callback.html","name":"Callbacks","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 08:23:05 +0000","dateModified":"Mon, 20 Jul 2026 08:23:05 +0000","description":"Callbacks are functions or methods which are used as parameters for other functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Callbacks.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $array = ['Damien', 'Dan', 'Daniel', 'Davey', 'David', 'Dennis', 'Derick', 'Dmitry', 'Dustin',];
    $array = array_map('strtolower', $array);

    //['damien', 'dan', 'daniel', 'davey', 'david', 'dennis', 'derick', 'dmitry', 'dustin',];

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.callable.php)**
## See Also

+ [The Wonderful World of Callbacks](https://markbakeruk.net/2021/12/22/the-wonderful-world-of-callbacks/)
+ [Using callbacks to prevent code duplication](https://doeken.org/tip/using-callbacks-to-prevent-code-duplication)
+ [How to Use PHP Callbacks: Examples and Guide](https://codernex.hashnode.dev/how-to-use-php-callbacks-examples-and-guide)

## Related

+ [Callables](callable.ini.html)
+ [Closure](closure.ini.html)
+ [String](string.ini.html)
+ [Arrow Functions](arrow-function.ini.html)
+ [Functions](function.ini.html)
+ [Method](method.ini.html)
+ [Magic Methods](magic-method.ini.html)
+ [Array Callback](array-callback.ini.html)
+ [Listener](listener.ini.html)
+ [one](one.ini.html)
