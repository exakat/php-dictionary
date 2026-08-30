---
type: "PHP Feature"
title: "Multidimensional Array"
description: "An array inside an array is called a multidimensional array."
resource: "https://www.php.net/manual/en/function.array.php"
tags: ["array"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Multidimensional Array

An array inside an array is called a multidimensional array. Dimensions may be created as many as necessary, by using the square brackets.

PHP creates the arrays on the fly. When the intermediate array are undefined, PHP will add them in the structure.

```php
<?php

$a = array(1 => array('a' => 1));

$a[1]["b"]['c'] = 3;

print_r($a);

/*
Array
(
    [1] => Array
        (
            [a] => 1
            [b] => Array
                (
                    [c] => 3
                )

        )

)
*/
?>
```

## Documentation
- [https://www.php.net/manual/en/function.array.php](https://www.php.net/manual/en/function.array.php)

## See Also
- [array_walk_recursive()](https://www.php.net/manual/en/function.array-walk-recursive.php)
- [json_encode()](https://www.php.net/manual/en/function.json-encode.php)

## Related
- [Array, []](/features/array.md)
- [Array Element](/features/array-element.md)
- [Index For Arrays](/features/index-array.md)
- [JavaScript Object Notation (JSON)](/features/json.md)
- [array_keys()](/features/array_keys.md)
- [count()](/features/count.md)
- [Dot Notation](/features/dot-notation.md)

