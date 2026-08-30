---
type: "PHP Feature"
title: "Operator Precedence"
description: "The operator precedence dictates in which order the operators in a same sequence are executed."
resource: "https://www.php.net/manual/en/language.operators.precedence.php#language.operators.precedence"
tags: ["feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Operator Precedence

The operator precedence dictates in which order the operators in a same sequence are executed. 

For example, in the code ``1 + 2 * 3``, the order is the mathematical order: multiplication has precedence over addition. The results is 7, not 9. 

Operators have different precedence: ``.``, dot, has a lower priority than addition ``+`` and ``-``.  

Precedence may lead to unexpected behavior. For example, ``-9 ** 2 == -9``, because ``-`` has lower precedence than ``**``, and PHP doesn't parse negative numbers in one pass. 

Also, ``$a = $b & $c;`` means that ``$a = $b;``, because ``=`` has a higher priority than ``&``.

```php
<?php

// 7, not 9
$a = 1 + 2 * 3; 

// 11
$a = 4 * 2 + 3; 

// equivalent to !($a instanceof aClass)
// ! has lower precedence than instanceof
$b = !$a instanceof aClass;

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.precedence.php#language.operators.precedence](https://www.php.net/manual/en/language.operators.precedence.php#language.operators.precedence)

## See Also
- [Understanding the PHP Operator Precedence](https://flatcoding.com/tutorials/php/understanding-the-php-operator-precedence/)
- [Which Operators Come First?](https://www.dinocajic.com/php-operator-precedence/)

## Related
- [Operators](/features/operator.md)

