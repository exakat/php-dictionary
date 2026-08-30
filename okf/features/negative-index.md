---
type: "PHP Feature"
title: "Negative Index"
description: "On PHP strings, a positive index starts at zero at the beginning of the string; and a negative index starts at the end of the string."
resource: "https://www.php.net/manual/en/language.types.string.php#language.types.string.substr"
tags: ["string"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Negative Index

On PHP strings, a positive index starts at zero at the beginning of the string; and a negative index starts at the end of the string. 

Negative index was added in version 7.1.

On an array, negative indexes are supported, without any special meaning: they are only available when provided. Their behavior changed when using automatic indexing though.

```php
<?php

    $string = 'abcd';
    
    echo $string[1]; // b
    echo $string[-1]; // c

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.string.php#language.types.string.substr](https://www.php.net/manual/en/language.types.string.php#language.types.string.substr)

## See Also
- [PHP: substr - Manual](https://www.php.net/manual/en/function.substr.php)
- [PHP RFC: Negative String Offsets](https://wiki.php.net/rfc/negative-string-offsets)

## Related
- [Index For Arrays](/features/index-array.md)
- [String](/features/string.md)

## Details
- PHP since: 7.1

