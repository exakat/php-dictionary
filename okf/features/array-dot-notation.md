---
type: "PHP Feature"
title: "Array Dot Notation"
description: "Array dot notation is a convention for addressing a value nested inside a multi-dimensional array using a single string of keys separated by dots, such as ``'a.b.c'``, instead of chaining several square-bracket accesses."
resource: "https://laravel.com/docs/11.x/helpers#method-array-get"
tags: ["array"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Array Dot Notation

Array dot notation is a convention for addressing a value nested inside a multi-dimensional array using a single string of keys separated by dots, such as ``'a.b.c'``, instead of chaining several square-bracket accesses.

PHP has no native support for dot notation: writing ``$array['a.b.c']`` only looks for a single key literally named ``a.b.c``. To resolve the path and read or write the nested value, the string must be split on the dots and each segment used to walk down the array, either with a hand-written loop or with a helper function or package.

Dot notation is commonly used by frameworks and libraries to give a compact syntax for reading configuration values or deeply nested data, such as Laravel's ``Arr::get($array, 'a.b.c')`` or Symfony's property access component.

```php
<?php

    function arrayGetDot(array $array, string $path, mixed $default = null): mixed {
        foreach (explode('.', $path) as $key) {
            if (!is_array($array) || !array_key_exists($key, $array)) {
                return $default;
            }
            $array = $array[$key];
        }

        return $array;
    }

    $config = ['db' => ['host' => 'localhost', 'port' => 5432]];
    echo arrayGetDot($config, 'db.host'); // localhost

?>
```

## Documentation
- [https://laravel.com/docs/11.x/helpers#method-array-get](https://laravel.com/docs/11.x/helpers#method-array-get)

## See Also
- [Dot Notation in PHP Arrays: A Practical Approach](https://medium.com/@diloabininyeri/introduction-cb0a4b0ce8f4)
- [Dot notation vs Bracket notation.](https://medium.com/@hrony7801/the-difference-between-dot-notation-vs-bracket-notation-e17fec97f6f1)

## Related
- [Array Syntax](/features/array-syntax.md)
- [Index For Arrays](/features/index-array.md)

## Details
- Packagist: [sajadsdi/array-dot-notation](https://packagist.org/packages/sajadsdi/array-dot-notation)

