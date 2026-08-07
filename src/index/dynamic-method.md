# Dynamic Method
A dynamic method is a method which is defined at execution time. 

This is convenient for module systems or SOAP clients, where the actual methods are defined at the remote server.

PHP calls this overloading.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-method.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-method.html","name":"Dynamic Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A dynamic method is a method which is defined at execution time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Dynamic Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Dynamic Method"}]}]}</script>
```php
<?php

class X {
    function __call($name, $args) {
        if ($name === 'aaa') { 
            echo 'OK';
            return;
        }
        
        if ($name === 'bbb') { 
            echo 'OK';
            return;
        }

        echo 'KO';
    }
}

$x = new X;
$x->aaa(); // OK
$x->bbb(); // OK
$x->ccc(); // KO

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.overloading.php)**
## See Also

+ [PHP: Dynamic method calling](https://medium.com/@erlandmuchasaj/php-dynamic-method-calling-3c5dfbe816a2)

## Related

+ [Dynamic](dynamic.html)
+ [Overloading](overloading.html)
