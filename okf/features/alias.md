---
type: "concept"
title: "Alias"
description: "An alias is a distinct name for an existing named structure."
resource: "https://www.php.net/manual/en/language.operators.assignment.php"
tags: ["concept", "alias"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Alias

An alias is a distinct name for an existing named structure. It is a classic way to cope with possible naming conflict, and improve readability. 

For example, there are aliases in namespaces import, to disambiguate classes, traits, interfaces, enums, functions and constants from other namespaces. There is also the ``class_alias()`` function, which allows the application-wide creation of aliases. 

There are also aliases for methods, when importing them from a trait. 

References are also considered an alias, as they stand for a variable with another name.

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
- [Using namespaces: Aliasing/Importing](https://www.php.net/manual/en/language.namespaces.importing.php)

## Related
- [Use Alias](/features/use-alias.md)
- [Insteadof](/features/insteadof.md)
- [References](/features/reference.md)
- [class_alias()](/features/class_alias.md)
- [As](/features/as.md)

