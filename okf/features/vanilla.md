---
type: "concept"
title: "Vanilla PHP"
description: "Vanilla PHP refers to writing an application using only the PHP language and its native, built-in features, without relying on any framework or third-party library."
resource: "https://www.php.net/manual/en/funcref.php"
tags: ["concept", "architecture"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Vanilla PHP

Vanilla PHP refers to writing an application using only the PHP language and its native, built-in features, without relying on any framework or third-party library. The term is borrowed from ``vanilla JS``, itself named after plain vanilla ice cream: no extra flavor, no add-ons.

Vanilla PHP is not a technical feature of the language: it is a description of a codebase's dependencies, or the lack thereof. It contrasts with using a framework, such as ``Laravel`` or ``Symfony``, which provides routing, dependency injection, an ORM, etc., or a library, which provides a narrower, reusable piece of functionality.

Writing vanilla PHP avoids the learning curve, footprint, and version-compatibility constraints of external code, at the cost of reimplementing common needs, such as routing or templating, by hand. It is a common choice for small scripts, learning exercises, and legacy codebases predating widespread framework adoption.

```php
<?php

    // Vanilla PHP: routing done by hand, with only native functions
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    switch ($path) {
        case '/':
            echo 'Home page';
            break;
        case '/about':
            echo 'About page';
            break;
        default:
            http_response_code(404);
            echo 'Not found';
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/funcref.php](https://www.php.net/manual/en/funcref.php)

## See Also
- [Vanilla software - Wikipedia](https://en.wikipedia.org/wiki/Vanilla_software)
- [What is the difference between core PHP and vanilla/plain PHP?](https://docs.php.earth/faq/intro/core-vs-vanilla/)

## Related
- [Framework](/features/framework.md)
- [Library](/features/library.md)
- [Dependency](/features/dependency.md)
- [Native](/features/native.md)
- [Userland](/features/userland.md)

