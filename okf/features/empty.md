---
type: "language construct"
title: "Empty"
description: "Empty is a language structure, which determines whether a variable is empty."
resource: "https://www.php.net/manual/en/language.oop5.static.php#language.oop5.static.properties"
tags: ["language construct", "feature", "keyword", "error suppression", "do and donts"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Empty

Empty is a language structure, which determines whether a variable is empty. 

A variable is considered empty if it does not exist or if its value equals false. This may overlap with the usage of ``isset()``.

``empty()`` has an error suppression feature, that masks various errors, such as undefined offset or undefined variables. Some other errors, like an invalid type as offset, are still reported.

```php
<?php

    // True
    var_dump(empty($a));
    
    $b = [];
    // True
    var_dump(empty($b));

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.static.php#language.oop5.static.properties](https://www.php.net/manual/en/language.oop5.static.php#language.oop5.static.properties)

## See Also
- [PHP isset() vs. empty() vs. is_null()](https://code.tutsplus.com/php-isset-vs-empty-vs-is_null--cms-37162t)
- [Avoiding empty() in PHP](https://localheinz.com/articles/2023/05/10/avoiding-empty-in-php/)
- [Never use `empty` function in PHP](https://dev.to/klnjmm/never-use-empty-function-in-php-4pb0)

## Related
- [Language Construct](/features/language-construct.md)
- [Isset](/features/isset.md)
- [Null](/features/null.md)
- [Short Ternary Operator](/features/short-ternary.md)

