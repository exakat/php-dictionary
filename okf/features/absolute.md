---
type: "disambiguation"
title: "Absolute"
description: "An ``absolute`` value is independent from the context in which it operates."
resource: "https://www.php.net/manual/en/language.namespaces.basics.php"
tags: ["disambiguation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Absolute

An ``absolute`` value is independent from the context in which it operates. 

The notion of ``absolute`` has several usages:

+ There are absolute names, also known as fully qualified name: ``\get_class()``, ``new myClass()``
+ There are absolute path, which are path that starts at the root of the file system: ``/tmp/path/to/file.txt``
+ There are absolute values, supported by ``abs()`` math function
+ The ``absolute`` parameter, when processing a ``DateTimeInterface`` difference

The notion of absolute is the opposite of the notion of relative, which depends on a local context.

```php
<?php

// global namespace
namespace {
    // first definition
    function bar() { 
        echo 'in the global scope.';
    }
}

namespace foo{
    // second definition
    function bar() { 
        echo 'in the foo scope.';
    }

    bar(); // relative call: it goes to the second definition
    \bar(); // absolute call: it goes to the first definition
    \foo\bar(); // absolute call: it goes to the second definition
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.namespaces.basics.php](https://www.php.net/manual/en/language.namespaces.basics.php)

## See Also
- [PHP: Name resolution rules - Manual](https://www.php.net/manual/en/language.namespaces.rules.php)
- [Fully Qualified Name - PHP Dictionary](https://php-dictionary.readthedocs.io/en/latest/dictionary/fully-qualified-name.ini.html)

## Related
- [Fully Qualified Name](/features/fully-qualified-name.md)
- [Absolute Value](/features/absolute-value.md)
- [Path](/features/path.md)
- [Relative](/features/relative.md)
- [abs()](/features/abs.md)

