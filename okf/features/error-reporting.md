---
type: "directive"
title: "Error Reporting"
description: "Error reporting is a feature, a directive and a PHP native function."
resource: "https://www.php.net/manual/en/function.error-reporting.php"
tags: ["error", "php.ini", "native function", "directive"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Error Reporting

Error reporting is a feature, a directive and a PHP native function. They all work with the same concept.

Error reporting is the way PHP displays errors as they are detected during execution. The ``error_reporting()`` function and the ``error_reporting`` directive set the type of error to be reported: errors are of different types.

While error reporting sets the type of reported error, the display of error is handled by different directives: ``display_errors`` and ``html_errors``.

Exceptions are not covered by the error reporting, even though one of the exceptions is called Error.

Error reporting may be further configured with an error handler function.

Error may be triggered manually with the ``trigger_error()`` function.

## Documentation
- [https://www.php.net/manual/en/function.error-reporting.php](https://www.php.net/manual/en/function.error-reporting.php)

## See Also
- [How to Display All PHP Errors: A Detailed Guide](https://stackify.com/display-php-errors/)

## Related
- [Error Handler](/features/error-handler.md)
- [@, No Scream Operator](/features/noscream.md)
- [html_errors](/features/html_errors.md)
- [display_errors](/features/display_errors.md)
- [E](/features/e.md)
- [Notice](/features/notice.md)
- [trigger_error()](/features/trigger_error.md)
- [Warning](/features/warning.md)
- [Error Suppression](/features/error-suppression.md)

