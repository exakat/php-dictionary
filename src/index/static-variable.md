# Static Variables
A static variable is a variable that retains its value across multiple function calls. Unlike regular variables, which are created and destroyed each time a function is called, static variables are initialized only once and persist throughout the entire execution of the script. 

To declare a static variable, use the ``static`` keyword inside a function. 

Static variables are commonly used when to keep track of certain information across function calls without the need to use global variables or properties. They are especially useful for counters, accumulators, caching, and memoization. However, it's essential to use them judiciously and avoid excessive reliance on them, as they can make code harder to maintain and understand if used indiscriminately.

Static variables may be refactored as a global variable or a property. 

Static variables may be declared only once, starting with PHP 8.3. Until that version, it is a best practice to only declare them once.

Static variables may use any PHP expressions to define their default value. That value is used when the variable is used for the first time.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-variable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-variable.html","name":"Static Variables","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A static variable is a variable that retains its value across multiple function calls","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Static Variables.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"static-variable"}]}]}</script>
```php
<?php

function counter() {
    static $count = 0;
    
    return ++$count;
}

counter(); // print 1
counter(); // print 2

?>
```

**[Documentation](https://www.php.net/manual/en/language.variables.scope.php#language.variables.scope.static)**
## See Also

+ [Static Variables and Methods](https://brainbell.com/php/static.html)
+ [5 usages of static keyword in PHP](https://www.exakat.io/en/5-usages-of-static-keyword-in-php/)
+ [PHP Static Variables](https://www.scaler.com/topics/static-variable-in-php/)
+ [static $variable in PHP: a silent trap with Laravel Octane](https://medium.com/@arthurmonney/static-variable-in-php-a-silent-trap-with-laravel-octane-3a51013a0aa9)

## Related

+ [Variables](variable.html)
+ [Variable Variables](variable-variable.html)
+ [Global Variables](global-variable.html)
+ [global Scope](global.html)
+ [$GLOBALS]($globals.html)
+ [Local Variable](local-variable.html)
+ [Superglobal Variables](superglobal.html)
+ [Static Property](static-property.html)
+ [New In Initializers](new-in-initializer.html)
