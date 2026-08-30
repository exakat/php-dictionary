---
type: "token"
title: "Square Brackets"
description: "Square brackets ``[`` and ``]`` are used with the array syntax: they delimit the offset in the index."
resource: "https://www.php.net/manual/en/language.types.array.php"
tags: ["token", "delimiter", "character"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Square Brackets

Square brackets ``[`` and ``]`` are used with the array syntax: they delimit the offset in the index.

Square brackets are also used to define array: this is the short syntax array, where ``[1,2,3]`` is equivalent to ``array(1,2,3)``.

Square brackets are also used to embody the ``list()`` command: this is the short syntax array, where ``[$a, $b, $c]`` is equivalent to ``list($a,$b,$c)``. The ``list()`` and ``array()`` syntaxes are distinguished between one another as ``list()`` must be in a writing context, such as the left side of an assignation or the values of a foreach, while the ``array()`` must be in a reading context, such as the right side of an assignation, or parameter passing.

Finally, an empty square bracket is the append operator.

```php
<?php

//Definition of arrays
$array = [1, 2, 3];

// Accessing element in the array
print $array[2]; // 3 

// equivalent to list
[$a, $b] = $array; 

$array[] = 4;
// $array == [1, 2, 3, 4];

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.array.php](https://www.php.net/manual/en/language.types.array.php)

## See Also
- [PHP RFC: Short List Syntax](https://wiki.php.net/rfc/short_list_syntax)
- [PHP: list()](https://www.php.net/manual/en/function.list.php)

## Related
- [Array, []](/features/array.md)
- [Index For Arrays](/features/index-array.md)
- [List](/features/list.md)
- [Array Append](/features/append.md)
- [Curly Brackets](/features/curly-bracket.md)
- [Parenthesis](/features/parenthesis.md)
- [Bracketless](/features/bracketless.md)
- [fnmatch()](/features/fnmatch.md)

