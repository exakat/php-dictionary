---
type: "PHP Feature"
title: "sscanf()"
description: "``sscanf()`` is a built-in PHP function that parses input from a string according to a format string."
resource: "https://www.php.net/manual/en/function.sscanf.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# sscanf()

``sscanf()`` is a built-in PHP function that parses input from a string according to a format string.

``sscanf()`` is the opposite feature of ``printf()``: the same format may be used to parse or print data.

```php
<?php

    $date = 'January 01 2000';
    list($month, $day, $year) = sscanf($date, '%s %d %d');
    
    print('%s %d %d', $month, $day, $year);

?>
```

## Documentation
- [https://www.php.net/manual/en/function.sscanf.php](https://www.php.net/manual/en/function.sscanf.php)

## See Also
- [PHP sscanf() Function](https://www.geeksforgeeks.org/php/php-sscanf-function/)

## Related
- [printf()](/features/printf.md)
- [sprintf](/features/sprintf.md)

