---
type: "directive"
title: "display_errors"
description: "``display_errors`` configures the display of PHP errors, warnings and notices to the standard output."
resource: "https://www.php.net/manual/en/errorfunc.configuration.php#ini.display-errors"
tags: ["directive", "vulnerability"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# display_errors

``display_errors`` configures the display of PHP errors, warnings and notices to the standard output. By default, it is on, with the value 1. 

In production environments, it is recommended to set ``display_errors`` to 0. The error messages should be send to a logging system, for further exploitation. Otherwise, it is considered a data leak, and may lead to a vulnerability.

## Documentation
- [https://www.php.net/manual/en/errorfunc.configuration.php#ini.display-errors](https://www.php.net/manual/en/errorfunc.configuration.php#ini.display-errors)

## See Also
- [Display Errors](https://developer.wordpress.org/advanced-administration/security/hardening/display-errors/)

## Related
- [Data Leak](/features/data-leak.md)
- [Environment](/features/environment.md)
- [Error Reporting](/features/error-reporting.md)
- [html_errors](/features/html_errors.md)
- [set_error_handler()](/features/set_error_handler.md)

