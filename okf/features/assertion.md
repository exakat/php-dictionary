---
type: "PHP Feature"
title: "Assertions"
description: "Assertions are checks that take effect in development and testing environments, but are optimised away to have zero cost in production."
resource: "https://www.php.net/manual/en/function.assert.php"
tags: ["feature", "code option"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Assertions

Assertions are checks that take effect in development and testing environments, but are optimised away to have zero cost in production. 

Assertions are disabled in production, by using the ``zend.assertions`` directive. Then, they are said zero-cost: they are completely omitted in the code, and not executed.

Assertions are a development tool, and should not be used in production. Be aware that the removal of the assertion may leave the system running with unchecked data. 

There are packages providing assertions features and more.

```php
<?php

    $a = foo();
    assert($a !== null, 'Sorry, we got a NULL from foo()!');

?>
```

## Documentation
- [https://www.php.net/manual/en/function.assert.php](https://www.php.net/manual/en/function.assert.php)

## See Also
- [PHP assertions and their usage](https://www.exakat.io/en/php-assertions-usage/)
- [Assertions in PHP](https://aleksandertabor.com/blog/assertions-in-php/)
- [Assertion101 Proving Grounds Walkthrough](https://infosecwriteups.com/assertion101-proving-grounds-walkthrough-intermediate-complete-write-up-0dc4b987dd31)

## Related
- [zend.assertions](/features/zend-assertions.md)
- [Zero Cost](/features/zero-cost.md)
- [Assumption](/features/assumption.md)
- [Runtime Checks](/features/runtime-checks.md)
- [AssertionError](/features/assertionerror.md)

## Details
- Packagist: [webmozart/assert](https://packagist.org/packages/webmozart/assert)
- Packagist: [beberlei/assert](https://packagist.org/packages/beberlei/assert)

