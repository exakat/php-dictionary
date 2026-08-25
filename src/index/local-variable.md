# Local Variable
A local variable is a variable in a method or a function. It is in the local scope, and is not available anywhere else.

A local variable is created by assigning it a value in a method, using the ``static`` keyword, or using the ``extract()`` function. It might be removed by the ``unset()`` function.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/local-variable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/local-variable.html","name":"Local Variable","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:53 +0000","dateModified":"Fri, 19 Jun 2026 21:24:53 +0000","description":"A local variable is a variable in a method or a function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/local-variable.html"]}],"keywords":["variable"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/extract.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unset.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global-variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/superglobal.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.variables.scope.php"},{"@type":"CreativeWork","name":"PHP local variable","url":"https:\/\/www.educba.com\/local-variable-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"local-variable"}]}]}</script>
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

+ [Static Variables](static-variable.html)
+ [extract()](extract.html)
+ [unset()](unset.html)
+ [Global Variables](global-variable.html)
+ [Superglobal Variables](superglobal.html)
