# Post-increment
Post-increment is the ``++`` operator, used on a variable, when it is placed after the variable. This means that the increment happens after the variable is read: in this case, the first echo displays 1, as the increment happens after the echo call. 

There is also a post-decrement, which uses the operator ``--``, and reduces the variable by 1.

Post-increment and post-decrement have a corresponding pre-increment and pre-decrement.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/post-increment.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/post-increment.html","name":"Post-increment","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Post-increment is the ``++`` operator, used on a variable, when it is placed after the variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Post-increment.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"post-increment"}]}]}</script>
```php
<?php

    $a = 1;
    echo $a++; // displays 2
    echo $a;   // displays 2

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.increment.php)**
## Related

+ [Pre-increment](pre-increment.html)
+ [Variables](variable.html)
+ [Increment](increment.html)
+ [one](one.html)
+ [Double](double.html)
+ [Minus -](minus.html)
