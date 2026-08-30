---
type: "PHP Feature"
title: "PHP Variables"
description: "PHP provides a set of predefined variables."
resource: "https://www.php.net/manual/en/reserved.variables.php"
tags: ["variable"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PHP Variables

PHP provides a set of predefined variables. They may be super-global, and available in any context, such as ``$_GET``; they may also be classic variables, in the global scope, such as ``$argv``.

The set of predefined variables changes with PHP versions: for example, in version 8.0, ``$phperrormsg`` was definitely removed. 

The set of predefined variables also depended on PHP directives. ``$HTTP_RAW_POST_DATA`` depended upon the ``always_populate_raw_post_data`` directive.

```php
<?php

    print_r($_GET);
    print_r($argv); // when in CLI
    print_r($GLOBALS);
    
    function foo() {
        global $argc;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/reserved.variables.php](https://www.php.net/manual/en/reserved.variables.php)

## See Also
- [Predefined Variables in PHP: For complete beginners](https://theguerrilla.agency/predefined-variables-in-php-an-overview-for-complete-beginners)

## Related
- [Variables](/features/variable.md)
- [Native](/features/native.md)
- [$argc](/features/$argc.md)
- [$argv](/features/$argv.md)

