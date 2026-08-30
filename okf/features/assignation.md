---
type: "PHP Feature"
title: "Assignations"
description: "Assignation, sometimes misspelled ``assignement``, refers to the process of assigning a value to a variable."
resource: "https://www.php.net/manual/en/language.operators.assignment.php"
tags: ["syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Assignations

Assignation, sometimes misspelled ``assignement``, refers to the process of assigning a value to a variable. It is a fundamental concept in programming that allows storing and manipulating data.

The main operator of assignation is ``=``. There are secondary operators, such as ``+=``, ``*=``, ``??=``, ... which are called short assignation: they apply a specific operation while assigning.

Finally, there are some inherent assignations: ``foreach()`` loops, method calls and ``list()`` operator perform assignations without an explicit operator.

```php
<?php

    $a = 'b';
    
    // $c is assigned by 
    foreach([1, 2, 3] as $c) {}
    echo $c; // $c is 3
    
    // list call that assigns values
    [$a, $b, $c] = ['a', 'b', 'C'];

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.assignment.php](https://www.php.net/manual/en/language.operators.assignment.php)

## See Also
- [Assignment Operators Explained with Examples](https://softwarebhai.com/blog/php-assignment-operators)

## Related
- [Short Assignations](/features/short-assignation.md)
- [Overwrite](/features/overwrite.md)
- [Iffectation](/features/iffectation.md)
- [Short Syntax](/features/short-syntax.md)

