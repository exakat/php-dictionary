# Dynamic Class Constant
Dynamic class constant access has always been possible with a call to the ``constant()`` function. With the ``class::constant`` syntax, it is possible to reach any visible constant, or, also, enumeration cases.

A new syntax is available since version 8.3 to do the same: ``class::{$name}``. The curly braces are important in that call.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-class-constant.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-class-constant.html","name":"Dynamic Class Constant","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:48 +0000","dateModified":"Fri, 19 Jun 2026 21:24:48 +0000","description":"Dynamic class constant access has always been possible with a call to the constant() function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-class-constant.html"]}],"keywords":["class-constant","dynamic"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/enum.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-function.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.constants.php"},{"@type":"CreativeWork","name":"PHP 8.3: Dynamic class constant and Enum member fetch support","url":"https:\/\/php.watch\/versions\/8.3\/dynamic-class-const-enum-member-syntax-support"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"dynamic-class-constant"}]}]}</script>
```php
<?php

enum E: string {
    case A = 'abc';
    const B = 'def';
}

$name = 'E::A';
echo constant($name)->value;
// PHP 8.3+ 
echo E::{$name}->value;

$name = 'E::B';
echo constant($name);
// PHP 8.3+ 
echo E::{$name};

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.constants.php)**
## See Also

+ [PHP 8.3: Dynamic class constant and Enum member fetch support](https://php.watch/versions/8.3/dynamic-class-const-enum-member-syntax-support)

## Related

+ [Static Constant](class-constant.html)
+ [Constants](constant.html)
+ [Dynamic](dynamic.html)
+ [Enumeration (enum)](enum.html)
+ [Functions](function.html)
+ [constant()](constant-function.html)
