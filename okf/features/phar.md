---
type: "extension"
title: "Phar"
description: "Phar is the PHP Archive."
resource: "https://www.php.net/manual/en/book.phar.php"
tags: ["extension"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Phar

Phar is the PHP Archive. It groups multiple files into a single one, and allows the direct execution or inclusion of that code.

ext/phar is also a PHP extension, used to create and read the PHAR archives. 

Phar archives may be zipped.

```php
<?php

    $phar = new Phar('myphar.phar');
    $pgz = $phar->convertToExecutable(Phar::TAR, Phar::GZ); // makes myphar.phar.tar.gz

?>
```

## Documentation
- [https://www.php.net/manual/en/book.phar.php](https://www.php.net/manual/en/book.phar.php)

## See Also
- [Phar executable compiling utility](https://github.com/yannoff/phpcc)

## Related
- [Deployment](/features/deploy.md)
- [Source Code](/features/source.md)
- [Archive](/features/archive.md)
- [UnexpectedValueException](/features/unexpectedvalueexception.md)

## Details
- Extension: ext-phar

