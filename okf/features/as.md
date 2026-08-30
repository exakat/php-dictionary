---
type: "disambiguation"
title: "As"
description: "The as operator has several usages: + It is an optional keyword with the ``foreach()`` control structure, to access the key of the looped array + It is an optional keyword with the use expression, in trait import + It is an optional keyword with the use expression, in namespace import The ``as`` operator often works to give a distinct name to an existing structure."
resource: "https://www.php.net/manual/en/language.operators.assignment.php"
tags: ["disambiguation", "keyword"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# As

The as operator has several usages:

+ It is an optional keyword with the ``foreach()`` control structure, to access the key of the looped array
+ It is an optional keyword with the use expression, in trait import
+ It is an optional keyword with the use expression, in namespace import

The ``as`` operator often works to give a distinct name to an existing structure.

```php
<?php

    use stdClass as StandardClass;

    foreach($map as $key => $value) {
        print "$key => $value\n";
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.assignment.php](https://www.php.net/manual/en/language.operators.assignment.php)

## See Also
- [PHP as Keyword](https://zetcode.com/php/as-keyword/)

## Related
- [foreach()](/features/foreach.md)
- [Use Alias](/features/use-alias.md)
- [Alias](/features/alias.md)

