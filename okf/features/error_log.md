---
type: "PHP Feature"
title: "Error_log()"
description: "``error_log()`` sends an error message to a logging destination: the web server log, a file, or a remote address, depending on the ``$message_type`` argument and the ``error_log`` PHP configuration directive."
resource: "https://www.php.net/manual/en/function.error-log.php"
tags: ["native function", "logging"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Error_log()

``error_log()`` sends an error message to a logging destination: the web server log, a file, or a remote address, depending on the ``$message_type`` argument and the ``error_log`` PHP configuration directive.

With no ``$message_type``, or ``$message_type = 0``, the message goes to whatever destination is set by the ``error_log`` directive. ``$message_type = 3`` appends the message to the file given as the ``$destination`` argument, while ``$message_type = 1`` emails the message, and ``$message_type = 4`` sends it directly to the SAPI logging handler, bypassing the ``error_log`` directive.

``error_log()`` returns ``true`` on success, and does not throw. Because its actual destination depends on runtime configuration, code that relies on ``error_log()`` for anything beyond ad-hoc debugging is usually better served by a dedicated, configurable logger, such as one implementing the PSR-3 ``LoggerInterface``.

```php
<?php

error_log('Something went wrong while processing the order');

// append to a specific file, bypassing the error_log directive
error_log('Payment failed for order #42', 3, '/var/log/payments.log');

?>
```

## Documentation
- [https://www.php.net/manual/en/function.error-log.php](https://www.php.net/manual/en/function.error-log.php)

## See Also
- [PHP: error_log - Manual](https://www.php.net/manual/en/errorfunc.configuration.php#ini.error-log)

## Related
- [Error Handler](/features/error-handler.md)
- [Exception Handler](/features/exception-handler.md)
- [trigger_error()](/features/trigger_error.md)
- [PHP Standards Recommendations (PSR)](/features/psr.md)

