# Callbacks
Callbacks are functions or methods which are used as parameters for other functions. Such functions are used to customize the calling function. For example, ``array_map()``, which applies a callback to every element of an array, or ``usort()``, which sorts an array using a function.

Callback is akin to a functioncall: it is actually hidden inside the caller function. 

Callback may be build with on closures, arrow-functions, native PHP functions, methods and static methods. They also use string, such as ``strtolower``, and array, such as ``[X::class, 'methodName']``, or ``[$object, 'methodName']``, syntax. In fact, anything that ``is_callable()`` may be used.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callback.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callback.html","name":"Callbacks","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Callbacks are functions or methods which are used as parameters for other functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Callbacks.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"callback"}]}]}</script>
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

+ [Callables](callable.html)
+ [Closure](closure.html)
+ [String](string.html)
+ [Arrow Functions](arrow-function.html)
+ [Functions](function.html)
+ [Method](method.html)
+ [Magic Methods](magic-method.html)
+ [Array Callback](array-callback.html)
+ [Listener](listener.html)
+ [one](one.html)
