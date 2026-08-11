# Temporary Expression
A temporary expression is an expression which is used on the spot, and it is not stored in a variable, or a container for later reuse. 

The storage in a variable confers certain feature to the resulting value, while an anonymous expression cannot use them. For example, ``array_pop()`` extracts the last value in an array, but reduces that array by one, which makes no sense outside a variable.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/temporary-expression.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/temporary-expression.html","name":"Temporary Expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:27 +0000","dateModified":"Fri, 19 Jun 2026 21:24:27 +0000","description":"A temporary expression is an expression which is used on the spot, and it is not stored in a variable, or a container for later reuse","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Temporary Expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"temporary-expression"}]}]}</script>
```php
<?php

    // object x is created, assigned a new value to its 'p' property, then never stored anywhere. 
    (new x)->p = 2;
    
    // x = 3 (constant assignation) would yield a syntax error
    // on the other hand, x[3] is a temporary expression, used for reading, but not available for writing.
    x[3] = 3;

    // x is again a constant, and it may be an object since PHP 8.4
    x->p = 4;

?>
```

**[Documentation](https://www.php.net/manual/en/language.expressions.php)**
## Related

+ [Expression](expression.html)
