---
type: "PHP Feature"
title: "$php_errormsg"
description: "``$php_errormsg`` contains the last error message, emitted by PHP."
resource: "https://www.php.net/manual/en/reserved.variables.phperrormsg.php"
tags: ["php variable"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# $php_errormsg

``$php_errormsg`` contains the last error message, emitted by PHP. 

In general, ``error_get_last()`` should be used instead of ``$php_errormsg``, although this function returns an array, not a string.

This feature was removed in version 8.0.

```php
<?php

    // Warning: Undefined variable $php_errormsg 
    // in PHP 8.0 (sic)
    echo $php_errormsg;

    print_r(error_get_last());

?>
```

## Documentation
- [https://www.php.net/manual/en/reserved.variables.phperrormsg.php](https://www.php.net/manual/en/reserved.variables.phperrormsg.php)

## See Also
- [How to catch a fatal error in PHP](https://www.php.net/manual/en/function.error-get-last.php)
- [track_errors is deprecated since PHP 7.2 and removed as of PHP 8.0.0](https://issues.joomla.org/tracker/joomla-cms/41667)

## Related
- [$GLOBALS](/features/$globals.md)
- [$this](/features/$this.md)

## Details
- PHP until: 8.0
- Deprecated: 7.2

