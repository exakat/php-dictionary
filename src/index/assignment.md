# Assignment
Assignment is the fundamental operation of binding a value to a variable. The ``=`` operator copies the value from the right-hand side to the left-hand side variable.

PHP supports several assignment forms:

+ Simple assignment: ``$a = 1;``
+ Compound assignment operators: ``+=``, ``-=``, ``*=``, ``/=``, ``%=``. ``**=``, ``.=``, ``&=``, ``|=``, ``^=``, ``<<=``, ``>>=``, ``??=``
+ Reference assignment: ``$b = &$a;`` makes ``$b`` an alias of ``$a``
+ List assignment: ``[$a, $b] = [1, 2];`` unpacks values into multiple variables

PHP 7.4 introduced the null coalescing assignment operator ``??=``, which assigns a value only if the variable is not set or is null. PHP 8.0 added the named arguments feature, but assignment semantics remain unchanged.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assignment.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assignment.html","name":"Assignment","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:19:33 +0000","dateModified":"Thu, 16 Jul 2026 08:19:33 +0000","description":"Assignment is the fundamental operation of binding a value to a variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assignment.html"]}],"alternateName":["affectation"],"keywords":["syntax","operator"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assignation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/short-assignation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overwrite.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/by-reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/by-value.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/list.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/short-syntax.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iffectation.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.operators.assignment.php"},{"@type":"CreativeWork","name":"PHP Reference","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.references.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"assignment"}]}]}</script>
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

+ [Assignations](assignation.html)
+ [Short Assignations](short-assignation.html)
+ [Overwrite](overwrite.html)
+ [Variables](variable.html)
+ [References](reference.html)
+ [Passing By Reference](by-reference.html)
+ [Passing By Value](by-value.html)
+ [List](list.html)
+ [Short Syntax](short-syntax.html)
+ [Iffectation](iffectation.html)
