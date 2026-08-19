# Static Expression
A static expression is an expression that is wholly defined at coding time. It is akin to hardcoded information. The opposite is dynamic expression.

A static expression is built with literals and operators. 

It is similar to a constant scalar expression, which is used by PHP to define constant with other constants. PHP does verify the constant scalar expressions at linting time, and exclude some operators from being used.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-expression.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-expression.html","name":"Static Expression","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 19:40:12 +0000","dateModified":"Mon, 06 Jul 2026 19:40:12 +0000","description":"A static expression is an expression that is wholly defined at coding time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Static Expression.html"]}],"alternateName":["static-constant-expression"],"keywords":["pattern"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-expression.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-inference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-scalar-expression.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.constants.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"static-expression"}]}]}</script>
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

+ [Dynamic Expression](dynamic-expression.html)
+ [Type Inference](type-inference.html)
+ [Constant Scalar Expression](constant-scalar-expression.html)
