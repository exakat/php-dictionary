---
type: "PHP Feature"
title: "Assignment"
description: "Assignment, called ``affectation`` in French, is the fundamental operation of binding a value to a variable."
resource: "https://www.php.net/manual/en/language.operators.assignment.php"
tags: ["syntax", "operator"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Assignment

Assignment, called ``affectation`` in French, is the fundamental operation of binding a value to a variable. The ``=`` operator copies the value from the right-hand side to the left-hand side variable.

PHP supports several assignment forms:

+ Simple assignment: ``$a = 1;``
+ Compound assignment operators: ``+=``, ``-=``, ``*=``, ``/=``, ``%=``. ``**=``, ``.=``, ``&=``, ``|=``, ``^=``, ``<<=``, ``>>=``, ``??=``
+ Reference assignment: ``$b = &$a;`` makes ``$b`` an alias of ``$a``
+ List assignment: ``[$a, $b] = [1, 2];`` unpacks values into multiple variables

PHP 7.4 introduced the null coalescing assignment operator ``??=``, which assigns a value only if the variable is not set or is null. PHP 8.0 added the named arguments feature, but assignment semantics remain unchanged.

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

## Documentation
- [https://www.php.net/manual/en/language.operators.assignment.php](https://www.php.net/manual/en/language.operators.assignment.php)

## See Also
- [PHP Reference](https://www.php.net/manual/en/language.oop5.references.php)

## Related
- [Assignations](/features/assignation.md)
- [Short Assignations](/features/short-assignation.md)
- [Overwrite](/features/overwrite.md)
- [Variables](/features/variable.md)
- [References](/features/reference.md)
- [Passing By Reference](/features/by-reference.md)
- [Passing By Value](/features/by-value.md)
- [List](/features/list.md)
- [Short Syntax](/features/short-syntax.md)
- [Iffectation](/features/iffectation.md)

