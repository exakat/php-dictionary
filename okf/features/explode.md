---
type: "PHP Feature"
title: "explode()"
description: "The ``explode()`` function is used to break an array into a list of elements, based on a separator."
resource: "https://www.php.net/manual/en/function.implode.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# explode()

The ``explode()`` function is used to break an array into a list of elements, based on a separator.

``explode()`` uses the first argument as the separator, and the second as the string. 

``explode()`` has an alias called ``split()``.

``explode()`` creates an empty string when the separator is at the beginning or the end of the strings. It also build empty strings when the separator are next to each other. 

The separator has to be a static string. For dynamic separators, there is the ``preg_split()`` function.

``explode()`` has a third parameter to limit the number of read elements. It is useful to avoid spending too much resources, such as time or memory, working on the string, when a maximum number of expected elements is known, and the string is not.

```php
<?php

    print_r(explode('&', '&a=3&b') );
    // ['', 'a=3', 'b']

?>
```

## Documentation
- [https://www.php.net/manual/en/function.implode.php](https://www.php.net/manual/en/function.implode.php)

## See Also
- [Beginner's Guide to PHP explode() Function (With Code Examples!)](https://zerotomastery.io/blog/php-explode-beginners-guide/)

## Related
- [preg_split()](/features/preg_split.md)
- [Separator](/features/separator.md)

