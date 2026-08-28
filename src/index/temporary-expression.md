# Temporary Expression
A temporary expression is an expression which is used on the spot, and it is not stored in a variable, or a container for later reuse. 

The storage in a variable confers certain features to the resulting value, while an anonymous expression cannot use them. For example, ``array_pop()`` extracts the last value in an array, but reduces that array by one, which makes no sense outside a variable.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/temporary-expression.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/temporary-expression.html","name":"Temporary Expression","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 28 Aug 2026 09:39:42 +0000","dateModified":"Fri, 28 Aug 2026 09:39:42 +0000","description":"A temporary expression is an expression which is used on the spot, and it is not stored in a variable, or a container for later reuse","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/temporary-expression.html"]}],"keywords":["syntax","_nocompileOK"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/expression.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.expressions.php"},{"@type":"CreativeWork","name":"PHP: array_pop()","url":"https:\/\/www.php.net\/manual\/en\/function.array-pop.php"},{"@type":"CreativeWork","name":"Value (computer science): lvalue and rvalue - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Value_(computer_science)#lvalue_and_rvalue"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"temporary-expression"}]}]}</script>
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
## See Also

+ [PHP: array_pop()](https://www.php.net/manual/en/function.array-pop.php)
+ [Value (computer science): lvalue and rvalue - Wikipedia](https://en.wikipedia.org/wiki/Value_(computer_science)#lvalue_and_rvalue)

## Related

+ [Expression](expression.html)
