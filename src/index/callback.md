# Callbacks
Callbacks are functions or methods which are used as parameters for other functions. Such functions are used to customize the calling function. For example, ``array_map()``, which applies a callback to every element of an array, or ``usort()``, which sorts an array using a function.

Callback is akin to a functioncall: it is actually hidden inside the caller function. 

Callback may be build with on closures, arrow-functions, native PHP functions, methods and static methods. They also use string, such as ``strtolower``, and array, such as ``[X::class, 'methodName']``, or ``[$object, 'methodName']``, syntax. In fact, anything that ``is_callable()`` may be used.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callback.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callback.html","name":"Callbacks","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Callbacks are functions or methods which are used as parameters for other functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callback.html"]}],"keywords":["function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arrow-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-callback.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/listener.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/one.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.callable.php"},{"@type":"CreativeWork","name":"The Wonderful World of Callbacks","url":"https:\/\/markbakeruk.net\/2021\/12\/22\/the-wonderful-world-of-callbacks\/"},{"@type":"CreativeWork","name":"Using callbacks to prevent code duplication","url":"https:\/\/doeken.org\/tip\/using-callbacks-to-prevent-code-duplication"},{"@type":"CreativeWork","name":"How to Use PHP Callbacks: Examples and Guide","url":"https:\/\/codernex.hashnode.dev\/how-to-use-php-callbacks-examples-and-guide"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"callback"}]}]}</script>
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
