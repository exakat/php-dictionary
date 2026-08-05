# Pre-increment
Pre-increment is the ``++`` operator, used on a variable, when it is placed before the variable. This means that the increment happens before the variable is read: in this case, the first echo displays 2, as the increment happens before the echo call. 

There is also a pre-decrement, which uses the operator ``--``, and reduces the variable of 1. 

Pre-increment and pre-decrement have a corresponding post-increment and post-decrement.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pre-increment.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pre-increment.ini.html","name":"Pre-increment","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Pre-increment is the ``++`` operator, used on a variable, when it is placed before the variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Pre-increment.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Post-increment](post-increment.ini.html)
+ [Variables](variable.ini.html)
+ [Increment](increment.ini.html)
+ [Double](double.ini.html)
+ [Minus -](minus.ini.html)
