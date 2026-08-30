---
type: "PHP Feature"
title: "Wildcard"
description: "The wildcard, for example the ``*``, ``%``, ``_``, ``~`` characters, is a placeholder that matches anything."
resource: "https://www.php.net/manual/en/language.basic-syntax.php"
tags: ["pattern"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Wildcard

The wildcard, for example the ``*``, ``%``, ``_``, ``~`` characters, is a placeholder that matches anything.

Wildcards are used in various places:

+ Glob patterns, to match any number of characters: ``*.php`` matches any PHP file
+ Regex patterns, with ``.*`` or ``.*?``
+ ``mixed`` type is a wildcard type
+ ``~`` in autoloading definition, which defines a minimum version

In autoloading, wildcards allow mapping entire namespaces at once.

```php
<?php

    // glob patterns with wildcard
    foreach (glob('*.php') as $filename) {
        echo "$filename\n";
    }
    
    // Variadic arguments (spread operator)
    function foo(...$args) {
        print_r($args);
    }
    
    foo(1, 2, 3);
    
    // mixed type (PHP 8.0+)
    function bar(mixed $value): mixed {
        return $value;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.basic-syntax.php](https://www.php.net/manual/en/language.basic-syntax.php)

## See Also
- [PHP: glob()](https://www.php.net/manual/en/function.glob.php)
- [Wildcard character - Wikipedia](https://en.wikipedia.org/wiki/Wildcard_character)

## Related
- [glob()](/features/glob.md)
- [Mixed](/features/mixed.md)
- [Variadic](/features/variadic.md)
- [Regular Expression](/features/regex.md)
- [Tilde ~](/features/tilde.md)
- [Star *](/features/star.md)

## Details
- Packagist: [okapi/wildcards](https://packagist.org/packages/okapi/wildcards)

