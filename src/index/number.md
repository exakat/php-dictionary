# Number
A number is either a float or an integer. 

Numbers are always signed. They are limited, in range, by the constants ``PHP_INT_MAX``, ``PHP_INT_MIN``, and ``PHP_FLOAT_MAX``, ``PHP_FLOAT_MIN``.

PHP also has a concept of numeric strings, which are strings that hold numbers. Other types do not have direct conversion to numbers and need to be converted or cast.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/number.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/number.html","name":"Number","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A number is either a float or an integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/number.html"]}],"keywords":["math","integer"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/float.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/integer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/numeric-string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abs.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.php"},{"@type":"CreativeWork","name":"PHP Numbers Basics","url":"https:\/\/www.codeguage.com\/v1\/courses\/php\/numbers-basics"},{"@type":"CreativeWork","name":"PHP Numbers Explained","url":"https:\/\/www.pixemweb.com\/php\/php-numbers\/"},{"@type":"CreativeWork","name":"Exploring Number Manipulation in PHP","url":"https:\/\/medium.com\/@philippebeck\/exploring-number-manipulation-in-php-e51c85b44630"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"number"}]}]}</script>
```php
<?php

    echo 1;
    echo -1.5;
    
    echo PHP_INT_MAX; 

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.php)**
## See Also

+ [PHP Numbers Basics](https://www.codeguage.com/v1/courses/php/numbers-basics)
+ [PHP Numbers Explained](https://www.pixemweb.com/php/php-numbers/)
+ [Exploring Number Manipulation in PHP](https://medium.com/@philippebeck/exploring-number-manipulation-in-php-e51c85b44630)

## Related

+ [Floating Point Numbers](float.html)
+ [integer](integer.html)
+ [Numeric String](numeric-string.html)
+ [Cast Operator](cast.html)
+ [abs()](abs.html)
