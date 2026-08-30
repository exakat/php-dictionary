---
type: "type"
title: "Special Types"
description: "PHP defines some special types."
resource: "https://www.php.net/manual/en/language.types.declarations.php"
tags: ["type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Special Types

PHP defines some special types.

+ ``mixed``: any type
+ ``void``: no returned value
+ ``callable``: may be used as a callback
+ ``iterable``: may be used with ``foreach()``, including array
+ ``never``: never returns
+ ``object``: object of any class
+ ``parent``: any of the parent class of the current class, excluding it
+ ``self``: the current class
+ ``static``: the current called class

Other special types are the scalar types.

```php
<?php

    function foo(iterable $i) : never {
        foreach ($i as $j) {
            echo $j;
        }
    
        die();
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.declarations.php](https://www.php.net/manual/en/language.types.declarations.php)

## See Also
- [An Exhaustive Guide to Understanding and Using PHP Data Types](https://medium.com/@berastis/an-exhaustive-guide-to-understanding-and-using-php-data-types-b56f6863c637)

## Related
- [Type System](/features/type.md)
- [Mixed](/features/mixed.md)
- [Void](/features/void.md)
- [Callables](/features/callable.md)
- [Iterable](/features/iterable.md)
- [Never Type](/features/never.md)
- [Object](/features/object.md)
- [parent](/features/parent.md)
- [static](/features/static.md)
- [Self](/features/self.md)

## Details
- PHP since: 7.0

