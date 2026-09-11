# Parameter
A parameter is a variable in a method definition. They have a name, and may have a default value and type. They may also be passed by reference, or by value, which is the default way.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parameter.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parameter.html","name":"Parameter","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 11 Sep 2026 08:47:00 +0000","dateModified":"Fri, 11 Sep 2026 08:47:00 +0000","description":"A parameter is a variable in a method definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parameter.html"]}],"keywords":["parameter","function","feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/argument.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-expression.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/comma.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variadic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-scalar-expression.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/default-value.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inherited-variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new-in-initializer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/optional-parameter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/positional-parameter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/named-parameter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arbitrary-argument.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/by-reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/by-value.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/composite-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/copy-on-write.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/functions.arguments.php"},{"@type":"CreativeWork","name":"PHP Default Parameters","url":"https:\/\/www.phptutorial.net\/php-tutorial\/php-default-parameters\/"},{"@type":"CreativeWork","name":"How to create default function parameter in PHP?","url":"https:\/\/www.geeksforgeeks.org\/php\/how-to-create-default-function-parameter-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.35","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"parameter"}]}]}</script>
```php
<?php

    function trumpet($parameter) {}

    $argument = 1;
    trumpet($argument);

?>
```

**[Documentation](https://www.php.net/manual/en/functions.arguments.php)**
## See Also

+ [PHP Default Parameters](https://www.phptutorial.net/php-tutorial/php-default-parameters/)
+ [How to create default function parameter in PHP?](https://www.geeksforgeeks.org/php/how-to-create-default-function-parameter-in-php/)

## Related

+ [Argument](argument.html)
+ [Static Expression](static-expression.html)
+ [Comma](comma.html)
+ [References](reference.html)
+ [Type System](type.html)
+ [Variadic](variadic.html)
+ [Constant Scalar Expression](constant-scalar-expression.html)
+ [Default Value](default-value.html)
+ [Inherited Variable](inherited-variable.html)
+ [New In Initializers](new-in-initializer.html)
+ [Optional Parameter](optional-parameter.html)
+ [Positional Parameters](positional-parameter.html)
+ [Named Parameters](named-parameter.html)
+ [Arbitrary Number Of Argument](arbitrary-argument.html)
+ [Passing By Reference](by-reference.html)
+ [Passing By Value](by-value.html)
+ [Composite Type](composite-type.html)
+ [Copy On Write (COW)](copy-on-write.html)
