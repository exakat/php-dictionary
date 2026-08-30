---
type: "concept"
title: "Magic Numbers"
description: "A magic number is a number that appears in the code, and has no obvious signification."
resource: "https://en.wikipedia.org/wiki/Magic_number_(programming)"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Magic Numbers

A magic number is a number that appears in the code, and has no obvious signification. 

It is recommended to make the meaning of that number obvious. This is achieved by using constants, class or global, where the name of the constant improves readability.

Magic numbers also applies to other literal values, such as string, float, arrays. Though, they are more difficult to sort out of the code.

Magic numbers are difficult to categorize, when they are very common across different fields. For example, 0, 1, 2, 10 are very common for different tasks, and may need several disambiguations. Others, such as 60, 404, 1024, are common usage. Finally, there might be business specific numbers, such as 42.

```php
<?php

foreach($array as $id => $values) {
    // Only displaying 10 values, but couldn't that limit be parametered?
    if ($id > 10) {
        break;
    }
    
    print $values.PHP_EOL;
}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Magic_number_(programming)](https://en.wikipedia.org/wiki/Magic_number_(programming))

## See Also
- [What are PHP Magic Numbers, and how to find and remove them](https://medium.com/@yourpropertyexpert/what-are-php-magic-numbers-and-how-to-find-and-remove-them-d47a616261cc)
- [Replace Magic Number with Symbolic Constant](https://refactoring.guru/replace-magic-number-with-symbolic-constant)

## Related
- [Constants](/features/constant.md)
- [Hard Coded](/features/hard-coded.md)
- [Readability](/features/readability.md)
- [Code Smell](/features/code-smell.md)
- [Habit](/features/habit.md)
- [Magic](/features/magic.md)
- [one](/features/one.md)

## Details
- Packagist: [povils/phpmnd](https://packagist.org/packages/povils/phpmnd)

