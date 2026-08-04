# Direct Output
Direct output is the characteristics of a function or method to write data directly to the output stream. 

A good practice is to passe the output data to the calling context, for it to decide how to handle it. 

Errors, exceptions, and debug often use direct output. Specific functions, such as ``echo``, ``print_r``, ``debug_print_backtrace()`` output directly on purpose.

Direct output is the root for the infamous ``Headers already sent`` error.

The alternative is to output to logs, or return the results.

## See Also

+ [PHP: The Flexibility that can Make or Break your Team Project](https://www.linkedin.com/pulse/php-flexibility-can-make-break-your-team-project-gerrit-vermeulen)

Related : [Interface](Interface), [Proxy Class](Proxy Class), [Relay Function](Relay Function), [Rigidity](Rigidity), [Testable](Testable)
