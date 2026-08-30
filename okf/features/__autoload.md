---
type: "PHP Feature"
title: "__autoload"
description: "``__autoload()`` was the name of the userland function, used to load classes when they were not found yet in the current execution environment."
resource: "https://www.php.net/manual/en/language.oop5.autoload.php"
tags: ["removed"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# __autoload

``__autoload()`` was the name of the userland function, used to load classes when they were not found yet in the current execution environment. 

``__autoload()`` was later replaced with ``spl_autoload_register()``, which allows the composition of multiple autoloading methods.

```php
<?php

    function __autoload($name) {
        if (file_exists(classes/$name.php)) {
            include classes/$name.php;
        }
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.autoload.php](https://www.php.net/manual/en/language.oop5.autoload.php)

## See Also
- [spl_autoload_register](https://www.php.net/manual/en/function.spl-autoload-register.php)
- [__autoload() is deprecated, use spl_autoload_register() instead](https://php-errors.readthedocs.io/en/latest/messages/autoload%28%29-is-deprecated%2C-use-spl_autoload_register%28%29-instead.html)

## Related
- [Class Autoloading](/features/autoload.md)

## Details
- PHP since: 5.0

