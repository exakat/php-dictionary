# Assignment
Assignment is the fundamental operation of binding a value to a variable. The ``=`` operator copies the value from the right-hand side to the left-hand side variable.

PHP supports several assignment forms:

+ Simple assignment: ``$a = 1;``
+ Compound assignment operators: ``+=``, ``-=``, ``*=``, ``/=``, ``%=``. ``**=``, ``.=``, ``&=``, ``|=``, ``^=``, ``<<=``, ``>>=``, ``??=``
+ Reference assignment: ``$b = &$a;`` makes ``$b`` an alias of ``$a``
+ List assignment: ``[$a, $b] = [1, 2];`` unpacks values into multiple variables

PHP 7.4 introduced the null coalescing assignment operator ``??=``, which assigns a value only if the variable is not set or is null. PHP 8.0 added the named arguments feature, but assignment semantics remain unchanged.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/assignment.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/assignment.ini.html","name":"Assignment","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:19:33 +0000","dateModified":"Thu, 16 Jul 2026 08:19:33 +0000","description":"Assignment is the fundamental operation of binding a value to a variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Assignment.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Simple assignment
    $a = 42;

    // Compound assignment
    $b = 10;
    $b += 5; // $b is now 15

    // Reference assignment
    $c = &$a;
    $c = 99;
    echo $a; // 99, because $c is an alias of $a

    // Null coalescing assignment (PHP 7.4+)
    $d ??= 'default';

    // List assignment
    [$x, $y] = ['hello', 'world'];

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.assignment.php)**
## See Also

+ [PHP Reference](https://www.php.net/manual/en/language.oop5.references.php)

## Related

+ [Assignations](assignation.ini.html)
+ [Short Assignations](short-assignation.ini.html)
+ [Overwrite](overwrite.ini.html)
+ [Variables](variable.ini.html)
+ [References](reference.ini.html)
+ [Passing By Reference](by-reference.ini.html)
+ [Passing By Value](by-value.ini.html)
+ [List](list.ini.html)
+ [Short Syntax](short-syntax.ini.html)
+ [Iffectation](iffectation.ini.html)
