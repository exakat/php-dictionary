# Ellipsis
Ellipsis operator is the ``...`` operator. It also bears the name of three dots, and even ``dot dot dot``. 

It is used to implements the array spread feature, and the variadic arguments. The actual feature depends on the context. 

Ellipsis is the classic punctuation description of the operator, and it applies to both features.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ellipsis.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ellipsis.html","name":"Ellipsis","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Ellipsis operator is the ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ellipsis.html"]}],"keywords":["token","feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-spread.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variadic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/three-dots.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Ellipsis"},{"@type":"CreativeWork","name":"The many uses of ... ellipsis operator in PHP","url":"https:\/\/www.amitmerchant.com\/the-many-uses-of-ellipsis-operator-in-php\/"},{"@type":"CreativeWork","name":"The Splat Operator In PHP","url":"https:\/\/www.hashbangcode.com\/article\/splat-operator-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ellipsis"}]}]}</script>
```php
<?php

$array = [1, 2, 3];
$more = [...$array, 4, 5];

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Ellipsis)**
## See Also

+ [The many uses of ... ellipsis operator in PHP](https://www.amitmerchant.com/the-many-uses-of-ellipsis-operator-in-php/)
+ [The Splat Operator In PHP](https://www.hashbangcode.com/article/splat-operator-php)

## Related

+ [Array Spread](array-spread.html)
+ [Variadic](variadic.html)
+ [Three Dots](three-dots.html)
