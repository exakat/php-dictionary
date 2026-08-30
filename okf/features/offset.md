---
type: "PHP Feature"
title: "Offset"
description: "The term offset refers to the position or index of an element within an array or a string."
resource: "https://www.php.net/manual/en/language.types.array.php"
tags: ["array"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Offset

The term offset refers to the position or index of an element within an array or a string. Offsets are usually integers.

For strings, offsets are zero-based and count bytes rather than characters, so multi-byte encodings such as UTF-8 require ``mb_substr()`` or similar multibyte-aware functions to index by character instead of by byte. Since PHP 7.1, negative string offsets are supported and count from the end of the string; ``$string[-1]`` is the last byte; negative offsets on plain arrays, by contrast, are treated as literal array keys and do not wrap around to the end.

Offsets are used throughout the language: ``substr()``, ``strpos()``, and ``array_slice()`` all accept a starting offset, and often an optional length, and classes implementing the ``ArrayAccess`` interface, with ``offsetGet()``, ``offsetSet()``, ``offsetExists()``, ``offsetUnset()``, let objects support the ``$obj[$offset]`` square-bracket syntax like a native array.

```php
<?php

    $array = ['a', 'b', 'c'];
    $offset = 1;
    echo $array[$offset];  // b
    
    $string = 'ABC';
    $offset = 2;
    echo $string[$offset];  // C

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.array.php](https://www.php.net/manual/en/language.types.array.php)

## See Also
- [PHP RFC: Negative String Offsets](https://wiki.php.net/rfc/negative-string-offsets)
- [PHP: substr - Manual](https://www.php.net/manual/en/function.substr.php)
- [PHP: ArrayAccess - Manual](https://www.php.net/manual/en/class.arrayaccess.php)

## Related
- [Array, []](/features/array.md)
- [String](/features/string.md)
- [Index For Arrays](/features/index-array.md)

