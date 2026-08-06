# Static Expression
A static expression is an expression that is wholly defined at coding time. It is akin to hardcoded information. The opposite is dynamic expression.

A static expression is built with literals and operators. 

It is similar to a constant scalar expression, which is used by PHP to define constant with other constants. PHP does verify the constant scalar expressions at linting time, and exclude some operators from being used.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/static-expression.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/static-expression.html","name":"Static Expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 19:40:12 +0000","dateModified":"Mon, 06 Jul 2026 19:40:12 +0000","description":"A static expression is an expression that is wholly defined at coding time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Static Expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $alphabet = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';

    // This is a static expression
    $letters = explode(',', $alphabet);
    
    const A = 1 * 2; // a constant scalar expression

?>
```

**[Documentation](https://www.php.net/manual/en/language.constants.php)**
## Related

+ [Dynamic Expression](dynamic-expression.ini.html)
+ [Type Inference](type-inference.ini.html)
+ [Constant Scalar Expression](constant-scalar-expression.ini.html)
