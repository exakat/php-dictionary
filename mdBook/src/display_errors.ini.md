# display_errors
``display_errors`` configures the display of PHP errors, warnings and notices to the standard output. By default, it is on, with the value 1. 

In production environments, it is recommended to set ``display_errors`` to 0. The error messages should be send to a logging system, for further exploitation. Otherwise, it is considered a data leak, and may lead to a vulnerability.

## See Also

+ [Display Errors](https://developer.wordpress.org/advanced-administration/security/hardening/display-errors/)

Related : [Data Leak](Data Leak), [Environment](Environment), [Error Reporting](Error Reporting), [html_errors](html_errors), [set_error_handler()](set_error_handler())
