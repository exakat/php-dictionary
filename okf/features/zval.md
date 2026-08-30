---
type: "PHP Feature"
title: "Zval"
description: "``ZVAL`` is a C structure, that represents data in the PHP engine."
resource: "https://www.phpinternalsbook.com/php5/zvals/basic_structure.html"
tags: ["engine"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Zval

``ZVAL`` is a C structure, that represents data in the PHP engine. It is a structure, which is never directly used from PHP code.

It may be access with ``debug_zval_dump()`` function, for debugging purposes. It is useful to debug PHP engine, or extensions.

```php
<?php

    // From the manual 
    $var1 = 'Hello';
    $var1 .= ' World';
    $var2 = $var1;
    
    debug_zval_dump($var1);
    
    // displays string(11) "Hello World" refcount(3)

?>
```

## Documentation
- [https://www.phpinternalsbook.com/php5/zvals/basic_structure.html](https://www.phpinternalsbook.com/php5/zvals/basic_structure.html)

## See Also
- [debug_zval_dump](https://www.php.net/manual/fr/function.debug-zval-dump.php)

## Related
- [Zend Engine](/features/zend-engine.md)
- [Garbage Collection](/features/garbage-collection.md)
- [Reference Count](/features/reference-count.md)

