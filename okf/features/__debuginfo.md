---
type: "magic method"
title: "__debugInfo() Method"
description: "``__debugInfo()`` is a magic method: it is called by ``var_dump()`` to customize the information displayed for an object."
resource: "https://www.php.net/manual/en/language.oop5.magic.php#object.debuginfo"
tags: ["magic method"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# __debugInfo() Method

``__debugInfo()`` is a magic method: it is called by ``var_dump()`` to customize the information displayed for an object.

By default, ``var_dump()`` shows every property of an object, including private and protected ones. When ``__debugInfo()`` is defined, its return value is shown instead, allowing sensitive properties to be hidden, computed values to be added, or the output to be simplified.

``__debugInfo()`` must return an array. The keys become the displayed property names, and are not required to match actual property names.

``__debugInfo()`` was introduced in version 5.6. Before that version, ``var_dump()`` always displays the object's actual properties, and the method, if present, is simply ignored.

```php
<?php

    class X {
        private $public = 'a';
        private $secret = 'password';

        function __debugInfo() {
            return ['public' => $this->public,
                    'secret' => '***redacted***'];
        }
    }

    var_dump(new X);

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.magic.php#object.debuginfo](https://www.php.net/manual/en/language.oop5.magic.php#object.debuginfo)

## See Also
- [__debugInfo()](https://riptutorial.com/php/example/4605/--debuginfo--)

## Related
- [Magic Methods](/features/magic-method.md)
- [var_dump()](/features/var_dump.md)
- [__toString() Method](/features/__tostring.md)
- [__sleep() Method](/features/__sleep.md)
- [__wakeup() Method](/features/__wakeup.md)
- [print_r()](/features/print_r.md)
- [var_export()](/features/var_export.md)

## Details
- PHP since: 5.6

