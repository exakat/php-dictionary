---
type: "type"
title: "Iterable"
description: "Iterable is a pseudo-type, which accepts any array or object implementing the ``Traversable`` interface."
resource: "https://www.php.net/manual/en/language.types.iterable.php"
tags: ["type", "keyword"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Iterable

Iterable is a pseudo-type, which accepts any array or object implementing the ``Traversable`` interface. This is equivalent to the type ``array|Traversable``, as one keyword.

```php
<?php

function foo(iterable $iterable) {
    foreach ($iterable as $value) {
        // ...
    } 
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.iterable.php](https://www.php.net/manual/en/language.types.iterable.php)

## See Also
- [Master PHP Iterables: Arrays, Objects, Traversable Interface](https://flatcoding.com/tutorials/php/the-essential-guide-for-php-iterable/)
- [PHP Iterators for walking through data structures – FastTips](https://inspector.dev/php-iterators-for-walking-through-data-structures-fasttips/)

## Related
- [Traversable](/features/traversable.md)
- [Array, []](/features/array.md)
- [count()](/features/count.md)
- [PHP Natives](/features/native-type.md)
- [Pseudo-type](/features/pseudo-type.md)
- [Special Types](/features/special-typehint.md)
- [ArrayAccess](/features/arrayaccess.md)

## Details
- PHP since: 7.1

