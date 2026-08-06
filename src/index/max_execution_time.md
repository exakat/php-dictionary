# max\_execution\_time
The ``max_execution_time`` directive sets the maximum amount of time that PHP will work on an application. 

The default value is 30 seconds. It may be lowered down to 1 second, or set to infinity with -1.

``max_execution_time`` may be changed from the code with ``set_time_limit()``. This function may also be disabled, and not available.

It is recommended to set this value as low as possible, and optimize the code to run below that limit.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/max_execution_time.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/max_execution_time.html","name":"max_execution_time","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``max_execution_time`` directive sets the maximum amount of time that PHP will work on an application","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/max_execution_time.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://www.php.net/manual/en/ini.core.php#ini.max-execution-time)**
## See Also

+ [PHP max_execution_time Guide](https://www.a2hosting.com/kb/developer-corner/php/using-php.ini-directives/php-maximum-execution-time)
+ [What is the best value for max_execution_time in PHP?](https://tideways.com/profiler/blog/what-is-the-best-value-for-max-execution-time-in-php)

## Related

+ [Directives](directive.ini.html)
+ [Execution Time](execution-time.ini.html)
+ [PHP, Hypertext Preprocessor (PHP)](php.ini.html)
+ [ini\_set()](ini_set.ini.html)
+ [Infinite Loop](infinite-loop.ini.html)
