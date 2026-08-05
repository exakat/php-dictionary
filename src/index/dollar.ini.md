# Dollar $
``$`` is character, used in various situations: 

+ As the first character of a variable
+ As an operator, for variable variables.

When associated, PHP and ``$`` often leads to the conversion rate of dollars to Philipini Pesos.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dollar.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dollar.ini.html","name":"Dollar $","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 24 Jun 2026 06:09:45 +0000","dateModified":"Wed, 24 Jun 2026 06:09:45 +0000","description":"``$`` is character, used in various situations: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Dollar $.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Interpolation](interpolation.ini.html)
+ [Variables](variable.ini.html)
+ [Variable Variables](variable-variable.ini.html)
+ [Relaxed Keywords](relaxed-keywords.ini.html)
+ [Single Quotes Strings](single-quote.ini.html)
