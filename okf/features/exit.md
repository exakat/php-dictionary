---
type: "keyword"
title: "Exit"
description: "``exit()`` and ``die()`` terminate the current execution."
resource: "https://www.php.net/manual/en/language.oop5.constants.php"
tags: ["keyword"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Exit

``exit()`` and ``die()`` terminate the current execution.

``exit()`` is a language construct, and since PHP 8.4, it is also a function too. 

After the end of execution, the registered shutdown functions and destructors are executed. ``finally`` blocks are  not executed.

They do not have access to the output stream ``php://output`` anymore, so ``echo`` doesn't work; but it may still write in files or database, if the connection is still open.

``exit()`` uses its argument to return its execution status. It is transmitted to the original caller of the application. When the argument is a string, it is displayed before ending the process.

```php
<?php

    $total = 0;
    for($i = 0; $i < 10; ++$i) {
        $total += $i;
        
        if ($i == 5) {
            exit($total);
        }
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.constants.php](https://www.php.net/manual/en/language.oop5.constants.php)

## See Also
- [PHP | exit( ) Function](https://www.geeksforgeeks.org/php-exit-function/)
- [PHP | die() & sleep() functions](https://medium.com/@dominic_55284/php-die-sleep-functions-7e766f9900e4)

## Related
- [Language Construct](/features/language-construct.md)
- [Shutdown Function](/features/shutdown-function.md)
- [Destructor](/features/destructor.md)
- [Finally](/features/finally.md)
- [Propagation](/features/propagation.md)
- [Return Value](/features/return-value.md)
- [set_error_handler()](/features/set_error_handler.md)
- [Testable](/features/testable.md)

## Details
- PHP since: 8.1

