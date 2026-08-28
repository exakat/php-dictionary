# Pre-increment
Pre-increment is the ``++`` operator, used on a variable, when it is placed before the variable. This means that the increment happens before the variable is read: in this case, the first echo displays 2, as the increment happens before the echo call. 

There is also a pre-decrement, which uses the operator ``--``, and reduces the variable of 1. 

Pre-increment and pre-decrement have a corresponding post-increment and post-decrement.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pre-increment.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pre-increment.html","name":"Pre-increment","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Pre-increment is the ++ operator, used on a variable, when it is placed before the variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pre-increment.html"]}],"keywords":["operator"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/post-increment.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/increment.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/double.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/minus.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.operators.increment.php"},{"@type":"CreativeWork","name":"Understanding the Increment and decrement operators in PHP","url":"https:\/\/flatcoding.com\/tutorials\/php\/increment-and-decrement-operators-in-php\/"},{"@type":"CreativeWork","name":"Useless post increment\/decrementPHP-W1090","url":"https:\/\/deepsource.com\/directory\/php\/issues\/PHP-W1090"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pre-increment"}]}]}</script>
```php
<?php

$a = 1;
echo ++$a; // displays 2
echo $a;   // displays 2

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.increment.php)**
## See Also

+ [Understanding the Increment and decrement operators in PHP](https://flatcoding.com/tutorials/php/increment-and-decrement-operators-in-php/)
+ [Useless post increment/decrementPHP-W1090](https://deepsource.com/directory/php/issues/PHP-W1090)

## Related

+ [Post-increment](post-increment.html)
+ [Variables](variable.html)
+ [Increment](increment.html)
+ [Double](double.html)
+ [Minus -](minus.html)
