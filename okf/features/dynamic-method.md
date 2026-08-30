---
type: "PHP Feature"
title: "Dynamic Method"
description: "A dynamic method is a method which is defined at execution time."
resource: "https://www.php.net/manual/en/language.oop5.overloading.php"
tags: ["dynamic"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Dynamic Method

A dynamic method is a method which is defined at execution time. 

This is convenient for module systems or SOAP clients, where the actual methods are defined at the remote server.

PHP calls this overloading.

```php
<?php

class X {
    function __call($name, $args) {
        if ($name === 'aaa') { 
            echo 'OK';
            return;
        }
        
        if ($name === 'bbb') { 
            echo 'OK';
            return;
        }

        echo 'KO';
    }
}

$x = new X;
$x->aaa(); // OK
$x->bbb(); // OK
$x->ccc(); // KO

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.overloading.php](https://www.php.net/manual/en/language.oop5.overloading.php)

## See Also
- [PHP: Dynamic method calling](https://medium.com/@erlandmuchasaj/php-dynamic-method-calling-3c5dfbe816a2)

## Related
- [Dynamic](/features/dynamic.md)
- [Overloading](/features/overloading.md)

