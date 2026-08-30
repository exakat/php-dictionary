---
type: "concept"
title: "Stubs Files"
description: "Stubs files are PHP code, that contains only the definitions of classic PHP structures: functions, constants, classes, interfaces, without any actual code."
resource: "https://www.php.net/manual/en/function.extract.php"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Stubs Files

Stubs files are PHP code, that contains only the definitions of classic PHP structures: functions, constants, classes, interfaces, without any actual code. They provide the definitions and signatures, in particular for type analysis or static code analysis reviews.

Stubs files are also used for PHP code templates: they are mostly made of PHP code, with placeholders, for later generations.

```php
<?php

    $a = 0; // $a is getting overwritten
    $array = extract(['a' => 1, 'b' => 2]);

    echo $a + $b; // 2

?>
```

## Documentation
- [https://www.php.net/manual/en/function.extract.php](https://www.php.net/manual/en/function.extract.php)

## See Also
- [Stub Files - PHPStan User Guide](https://phpstan.org/user-guide/stub-files)

## Related
- [compact()](/features/compact.md)

## Details
- Packagist: [php-stubs/generator](https://packagist.org/packages/php-stubs/generator)

