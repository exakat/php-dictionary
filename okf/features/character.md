---
type: "PHP Feature"
title: "Character"
description: "A character is a unit of information, that represents represents letters, punctuation signs, ideogram, etc."
resource: "https://www.php.net/manual/en/language.types.string.php"
tags: ["encoding"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Character

A character is a unit of information, that represents represents letters, punctuation signs, ideogram, etc. 

Characters may be represented as a byte, on 8 bits, but also on longer sequences, with UTF-8 or UTF-16. By default, PHP uses 8 bits, and there are several extensions to manipulate the encodings.

There is no dedicated type for characters: a string of one element is used for that purpose. There are some special constraints related to manipulating characters inside a string: it is possible to access individual character in a string, with the array syntax, both to read or modify them.

```php
<?php

    $string = 'abc';
    
    echo $string[1]; // display b
    
    var_dump($string[1]);
    //string(1) b

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.string.php](https://www.php.net/manual/en/language.types.string.php)

## See Also
- [PHP: mbstring](https://www.php.net/manual/en/book.mbstring.php)
- [Character encoding](https://en.wikipedia.org/wiki/Character_encoding)

## Related
- [Encoding](/features/encoding.md)
- [UTF-8](/features/utf-8.md)
- [American Standard Code for Information Interchange (ASCII)](/features/ascii.md)
- [Byte](/features/byte.md)
- [Text Encoding](/features/encoding-text.md)
- [Null Byte](/features/null-byte.md)

