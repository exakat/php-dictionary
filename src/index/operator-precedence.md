# Operator Precedence
The operator precedence dictates in which order the operators in a same sequence are executed. 

For example, in the code ``1 + 2 * 3``, the order is the mathematical order: multiplication has precedence over addition. The results is 7, not 9. 

Operators have different precedence: ``.``, dot, has a lower priority than addition ``+`` and ``-``.  

Precedence may lead to unexpected behavior. For example, ``-9 ** 2 == -9``, because ``-`` has lower precedence than ``**``, and PHP doesn't parse negative numbers in one pass. 

Also, ``$a = $b & $c;`` means that ``$a = $b;``, because ``=`` has a higher priority than ``&``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/operator-precedence.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/operator-precedence.html","name":"Operator Precedence","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The operator precedence dictates in which order the operators in a same sequence are executed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/operator-precedence.html"]}],"keywords":["feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/operator.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.operators.precedence.php#language.operators.precedence"},{"@type":"CreativeWork","name":"Understanding the PHP Operator Precedence","url":"https:\/\/flatcoding.com\/tutorials\/php\/understanding-the-php-operator-precedence\/"},{"@type":"CreativeWork","name":"Which Operators Come First?","url":"https:\/\/www.dinocajic.com\/php-operator-precedence\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"operator-precedence"}]}]}</script>
```php
<?php

// 7, not 9
$a = 1 + 2 * 3; 

// 11
$a = 4 * 2 + 3; 

// equivalent to !($a instanceof aClass)
// ! has lower precedence than instanceof
$b = !$a instanceof aClass;

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.precedence.php#language.operators.precedence)**
## See Also

+ [Understanding the PHP Operator Precedence](https://flatcoding.com/tutorials/php/understanding-the-php-operator-precedence/)
+ [Which Operators Come First?](https://www.dinocajic.com/php-operator-precedence/)

## Related

+ [Operators](operator.html)
