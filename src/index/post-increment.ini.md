# Post-increment
Post-increment is the ``++`` operator, used on a variable, when it is placed after the variable. This means that the increment happens after the variable is read: in this case, the first echo displays 1, as the increment happens after the echo call. 

There is also a post-decrement, which uses the operator ``--``, and reduces the variable by 1.

Post-increment and post-decrement have a corresponding pre-increment and pre-decrement.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/post-increment.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/post-increment.ini.html","name":"Post-increment","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Post-increment is the ``++`` operator, used on a variable, when it is placed after the variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Post-increment.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $a = 1;
    echo $a++; // displays 2
    echo $a;   // displays 2

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.increment.php)**
## Related

+ [Pre-increment](pre-increment.ini.html)
+ [Variables](variable.ini.html)
+ [Increment](increment.ini.html)
+ [one](one.ini.html)
+ [Double](double.ini.html)
+ [Minus -](minus.ini.html)
