---
type: "extension"
title: "Multibyte String"
description: "``mbstring`` provides function to process multibyte strings functions."
resource: "https://www.php.net/manual/en/book.mbstring.php"
tags: ["extension", "string"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Multibyte String

``mbstring`` provides function to process multibyte strings functions. Moreover, ``mbstring`` converts from and to various character encodings.

```php
<?php

    /* Convert EUC-JP to UTF-7 */
    $str = mb_convert_encoding($str, "UTF-7", "EUC-JP");

?>
```

## Documentation
- [https://www.php.net/manual/en/book.mbstring.php](https://www.php.net/manual/en/book.mbstring.php)

## See Also
- [Understanding mb_substr() in PHP: A Guide to Multibyte String Substrings](https://medium.com/@dabersamir/understanding-mb-substr-in-php-a-guide-to-multibyte-string-substrings-abd1613666c1)

## Related
- [Iconv](/features/iconv.md)
- [Encoding](/features/encoding.md)
- [Text Encoding](/features/encoding-text.md)
- [strtolower()](/features/strtolower.md)
- [strtoupper()](/features/strtoupper.md)

