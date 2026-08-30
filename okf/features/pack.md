---
type: "PHP Feature"
title: "pack"
description: "``pack()`` is a native PHP function which converts given arguments into a binary string according to format."
resource: "https://www.php.net/manual/en/function.pack.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# pack

``pack()`` is a native PHP function which converts given arguments into a binary string according to format. By extension, pack is the string that defines that format.

```php
<?php
  
  print pack("nvc*", 0x1234, 0x5678, 65, 66);
  // displays 4xVAB

?>
```

## Documentation
- [https://www.php.net/manual/en/function.pack.php](https://www.php.net/manual/en/function.pack.php)

## See Also
- [PHP: unpack - Manual](https://www.php.net/manual/en/function.unpack.php)
- [Handling binary data in PHP with pack() and unpack()](https://adayinthelifeof.nl/2010/01/14/handling-binary-data-in-php-with-pack-and-unpack/)

