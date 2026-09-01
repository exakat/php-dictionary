# Anonymous Catch
Traditionally, the catch statement requires specifying both an Exception class and an identifier variable to hold the caught exception.

PHP 8.0 introduced a new language construct that makes the identifier variable optional, allowing for a fully anonymous catch statement. This means there is no need to specify a variable to hold the caught exception.

The motivation behind this proposal is to simplify exception handling code, especially in cases where there is no need to use the caught exception object. It leads to cleaner and more concise code, especially when the specific details of the exception are not interesting and can be handled generically.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous-catch.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous-catch.html","name":"Anonymous Catch","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:58:53 +0000","dateModified":"Tue, 11 Aug 2026 20:58:53 +0000","description":"Traditionally, the catch statement requires specifying both an Exception class and an identifier variable to hold the caught exception","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous-catch.html"]}],"keywords":["rfc","feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/catch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/try-catch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.exceptions.php"},{"@type":"CreativeWork","name":"PHP RFC: Support for anonymous catches","url":"https:\/\/wiki.php.net\/rfc\/anonymous_catch"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"anonymous-catch"}]}]}</script>
```php
<?php

    try {
        $a / 0;
    } catch (DivisionByZero) {
    
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.exceptions.php)**
## See Also

+ [PHP RFC: Support for anonymous catches](https://wiki.php.net/rfc/anonymous_catch)

## Related

+ [Catch](catch.html)
+ [Exception](exception.html)
+ [Try-catch](try-catch.html)
+ [Anonymous](anonymous.html)
