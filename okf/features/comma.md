---
type: "token"
title: "Comma"
description: "Commas are syntax elements, to separate elements when provided as a list."
resource: "https://en.wikipedia.org/wiki/Comma"
tags: ["token", "punctuation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Comma

Commas are syntax elements, to separate elements when provided as a list. There are several situations where a list of elements may be provided: 

+ Argument separator, including with ``echo``
+ Parameter separator
+ Trait name separator, in ``use`` expression when importing a trait in a class
+ Array element separator
+ List separator, where unused values may be omitted, leaving commas back to back

Comma are important in the CSV and JSON formats, and other such formats.

Comma do not have a value by themselves.

```php
<?php

    function foo($a, $b) {
        return [$a, 2, $b];
    }
    
    list($y, ,$z) = foo(1, 2);

    [$y, ,$z] = foo(1, 2);
    
    echo 'a', 'b', 'c';

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Comma](https://en.wikipedia.org/wiki/Comma)

## See Also
- [PHP RFC: Trailing Comma in Function Calls](https://wiki.php.net/rfc/trailing-comma-function-calls)
- [PHP 7.3: Trailing Commas in Function Calls](https://laravel-news.com/php-trailing-commas-functions)

## Related
- [Parameter](/features/parameter.md)
- [Argument](/features/argument.md)
- [Array, []](/features/array.md)
- [List](/features/list.md)
- [Comma Separated Values (CSV)](/features/csv.md)
- [JavaScript Object Notation (JSON)](/features/json.md)
- [Trailing Comma](/features/trailing-comma.md)

