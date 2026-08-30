---
type: "PHP Feature"
title: "Shutdown Function"
description: "The shutdown function is a PHP custom function which is called when the application is shutting down."
resource: "https://www.php.net/manual/en/function.register-shutdown-function.php"
tags: ["feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Shutdown Function

The shutdown function is a PHP custom function which is called when the application is shutting down. This is after a call to ``exit()``, ``die()`` or the natural end of life of the script.

Multiple functions may be registered with the ``register_shutdown_function()`` function. They will be called in order of registration.

Shutdown function acts as destructors: they should clean up any unfinished jobs, and gracefully free resources, such as closing files with their correct endings, or gracefully closing connections.

```php
<?php

    // extract from the PHP manual
    function shutdown()
    {
        // This is our shutdown function, in 
        // here we can do any last operations
        // before the script is complete.
    
        echo 'Script executed with success', PHP_EOL;
    }
    
    register_shutdown_function('shutdown');

?>
```

## Documentation
- [https://www.php.net/manual/en/function.register-shutdown-function.php](https://www.php.net/manual/en/function.register-shutdown-function.php)

## See Also
- [A Practical Guide to PHP's `register_shutdown_function()` Function](https://reintech.io/blog/a-practical-guide-to-php-register_shutdown_function)

## Related
- [PHP Handlers](/features/handler.md)
- [Exit](/features/exit.md)

