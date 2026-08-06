# Direct Output
Direct output is the characteristics of a function or method to write data directly to the output stream. 

A good practice is to passe the output data to the calling context, for it to decide how to handle it. 

Errors, exceptions, and debug often use direct output. Specific functions, such as ``echo``, ``print_r``, ``debug_print_backtrace()`` output directly on purpose.

Direct output is the root for the infamous ``Headers already sent`` error.

The alternative is to output to logs, or return the results.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/direct-output.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/direct-output.html","name":"Direct Output","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:18 +0000","dateModified":"Fri, 19 Jun 2026 21:24:18 +0000","description":"Direct output is the characteristics of a function or method to write data directly to the output stream","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Direct Output.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://www.php.net/manual/en/function.ob-start.php)**
## See Also

+ [PHP: The Flexibility that can Make or Break your Team Project](https://www.linkedin.com/pulse/php-flexibility-can-make-break-your-team-project-gerrit-vermeulen)

## Related

+ [Interface](interface.ini.html)
+ [Proxy Class](proxy-class.ini.html)
+ [Relay Function](relay-function.ini.html)
+ [Rigidity](rigidity.ini.html)
+ [Testable](testable.ini.html)
