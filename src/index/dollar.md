# Dollar $
``$`` is character, used in various situations: 

+ As the first character of a variable
+ As an operator, for variable variables.

When associated, PHP and ``$`` often leads to the conversion rate of dollars to Philippine Pesos.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dollar.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dollar.html","name":"Dollar $","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:34:15 +0000","dateModified":"Sat, 08 Aug 2026 14:34:15 +0000","description":"``$`` is character, used in various situations: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Dollar $.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"dollar"}]}]}</script>
```php
<?php

$a = 'b';
$b = 'c';

echo $$a; // 'c'

echo $\{$a}; // C

?>
```

**[Documentation](https://www.php.net/manual/en/language.variables.variable.php)**
## See Also

+ [Why Does PHP Use the $ Sign for Variables?](https://medium.com/the-code-compass/why-does-php-use-the-sign-for-variables-c2c233f59991)
+ [Programming archaeology: PHP's dollar sigil](https://marianposaceanu.com/articles/programming-archaeology-phps-dollar-sigil)

## Related

+ [Interpolation](interpolation.html)
+ [Variables](variable.html)
+ [Variable Variables](variable-variable.html)
+ [Relaxed Keywords](relaxed-keywords.html)
+ [Single Quotes Strings](single-quote.html)
