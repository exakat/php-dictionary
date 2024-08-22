.. _error-reporting:

Error Reporting
---------------

Error reporting is both a feature, a directive and a PHP native function. They all work with the same concept.

Error reporting is the way PHP display errors are they are detected during execution. The error_reporting() function and the error_reporting directive sets the type of error to be reported : errors are of different types (Warning, Notice, Error, etc.)

While error reporting sets the type of reported error, the display of error is handled by different directives : display_errors and html_errors.

Exceptions are not covered by the error reporting, even though one of the exception is called Error.

Error reporting may be further configured with an error handler function. 

Error may be trigger manually with the trigger_error() function.


`Documentation <https://www.php.net/manual/en/function.error-reporting.php>`__

See also `Display All PHP Errors: Basic & Advanced Usage <https://stackify.com/display-php-errors/>`_

Related : :ref:`Error Handler <error-handler>`
