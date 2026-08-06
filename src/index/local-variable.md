# Local Variable
A local variable is a variable in a method or a function. It is in the local scope, and is not available anywhere else.

A local variable is created by assigning it a value in a method, using the ``static`` keyword, or using the ``extract()`` function. It might be removed by the ``unset()`` function.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/local-variable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/local-variable.html","name":"Local Variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:53 +0000","dateModified":"Fri, 19 Jun 2026 21:24:53 +0000","description":"A local variable is a variable in a method or a function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Local Variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function foo() {
        $localVariable = 1;
        // ... more code
    }
    
    function goo() {
        // this variable is distinct from the one in foo()
        $localVariable = 2;
        // ... more code
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.variables.scope.php)**
## See Also

+ [PHP local variable](https://www.educba.com/local-variable-in-php/)

## Related

+ [Static Variables](static-variable.ini.html)
+ [extract()](extract.ini.html)
+ [unset()](unset.ini.html)
+ [Global Variables](global-variable.ini.html)
+ [Superglobal Variables](superglobal.ini.html)
