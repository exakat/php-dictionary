---
type: "type"
title: "Stringable"
description: "``stringable`` is a type, which represents data that may be used as a string: either a string, a heredoc or a string constant; or an object which has the ``__toString()`` method."
resource: "https://www.php.net/manual/en/class.stringable.php"
tags: ["type", "keyword", "native", "php interface"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Stringable

``stringable`` is a type, which represents data that may be used as a string: either a string, a heredoc or a string constant; or an object which has the ``__toString()`` method.

Stringable is automatically added to any class and subclasses that has the ``__toString()`` method, though it is recommended to add it explicitly.

```php
<?php

    function foo(Stringable $s) {
        print $s;
    }
    
    class MyString implements Stringable {
        function __toString() {
            return __METHOD__;
        }
    }
    
    foo('foo');    // foo
    foo(new X());  // MyString::__toString

?>
```

## Documentation
- [https://www.php.net/manual/en/class.stringable.php](https://www.php.net/manual/en/class.stringable.php)

## See Also
- [What is Stringable Interface in PHP 8?](https://www.tutorialspoint.com/what-is-stringable-interface-in-php-8)
- [PHP 8.0: New Stringable interface](https://php.watch/versions/8.0/stringable)
- [The Stringable interface](https://spatie.be/courses/front-line-php/the-stringable-interface)

## Related
- [String](/features/string.md)
- [PHP Native Interfaces](/features/php-interface.md)
- [__toString() Method](/features/__tostring.md)
- [PHP Natives](/features/native-type.md)

## Details
- PHP since: 8.0

