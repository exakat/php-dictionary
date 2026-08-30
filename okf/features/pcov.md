---
type: "extension"
title: "PCOV"
description: "``PCOV`` is a PIE extension dedicated to code coverage collection."
resource: "https://packagist.org/packages/pecl/pcov"
tags: ["extension", "testing", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PCOV

``PCOV`` is a PIE extension dedicated to code coverage collection. It records which lines of code were executed during a test run, the same job Xdebug can do, but PCOV does only that, with none of Xdebug's step debugging, profiling, or tracing machinery, which makes it substantially faster.

Code coverage is used to measure how much of a codebase is exercised by a test suite, typically reported as a percentage of lines, branches, or functions covered. Test runners such as PHPUnit can drive PCOV directly through its API to produce coverage reports, for example in Clover XML or HTML.

Because it has a single purpose, PCOV is the preferred choice for coverage collection in CI pipelines where Xdebug would otherwise slow the run down considerably; Xdebug remains preferable when interactive step debugging is also needed.

```php
<?php

    // PHPUnit driven with PCOV as the coverage driver:
    // vendor/bin/phpunit --coverage-html coverage/
    // (PHPUnit auto-detects and prefers PCOV over Xdebug when both are loaded.)

    // Low-level API, rarely called directly by application code.
    pcov\start();

    require 'code-under-test.php';

    $waiting = pcov\collect(pcov\inclusive, [__DIR__ . '/code-under-test.php']);
    pcov\clear();

    print_r($waiting);

?>
```

## Documentation
- [https://packagist.org/packages/pecl/pcov](https://packagist.org/packages/pecl/pcov)

## See Also
- [PCOV on github](https://github.com/krakjoe/pcov)

## Related
- [Xdebug](/features/xdebug.md)
- [PHPunit](/features/phpunit.md)
- [Testable](/features/testable.md)
- [Green](/features/green.md)

## Details
- Extension: ext-pcov

