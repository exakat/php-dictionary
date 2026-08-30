---
type: "PHP Feature"
title: "Syntax"
description: "Syntax refers to the set of rules that defines the structure of valid PHP code."
resource: "https://www.php.net/manual/en/language.basic-syntax.php"
tags: ["source code"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Syntax

Syntax refers to the set of rules that defines the structure of valid PHP code.

For example, there is the object syntax, around the ``->`` and ``::`` operators, and the array syntax, around ``[index]`` operator. 

Syntax must be lintable for a PHP script to be executable. Otherwise, it creates a syntax error. Yet, a lintable syntax does not always mean the code is executable: it may yield an execution error. It is not always obvious which syntax is not executable.

```php
<?php

A = B C; // syntax error, 'C' is not valid. 

clone 1; // not a syntax error

$array = ['a' => 1, 'b' => 2, 'c' => 3];
echo $array['a']; // 1

$object = (object) $array;
echo $object->a; // 1
echo $object['a']; // no syntax error, error at execution

//valid syntax
function foo($x) {
    print $x;
}

//valid call
foo(3);

//invalid call
foo([]);

?>
```

## Documentation
- [https://www.php.net/manual/en/language.basic-syntax.php](https://www.php.net/manual/en/language.basic-syntax.php)

## See Also
- [Syntax (programming languages) - Wikipedia](https://en.wikipedia.org/wiki/Syntax_(programming_languages))
- [Semantics (computer science) - Wikipedia](https://en.wikipedia.org/wiki/Semantics_(computer_science))

## Related
- [Syntax Error](/features/syntax-error.md)
- [Constant Expression](/features/constant-expression.md)
- [Pattern Matching](/features/pattern-matching.md)
- [Transpile](/features/transpile.md)

