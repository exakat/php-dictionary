# Log
Log has several meanings:

+ Log file, or logging, to collect events traces as they happen
+ Logarithm, the math function

As a logging mechanism, PHP provides the low-level ``error_log()`` function to write a message to the system logger, a file, or by email, and the ``log_errors``/``error_log`` php.ini directives to route uncaught errors there automatically. Above that layer, PSR-3 ``Psr\Log\LoggerInterface`` standardizes a common logging API across eight severity levels, from ``debug`` to ``emergency``, and Monolog is the de facto implementation used by Symfony, Laravel, and most modern frameworks, dispatching log records to handlers such as files, syslog, Slack, Sentry, or Elasticsearch.

As a math function, ``log()`` computes the natural logarithm by default, or the logarithm to an arbitrary base when a second argument is supplied; ``log10()`` provides base-10 logarithms directly, but PHP has no dedicated base-2 function, so it is computed as ``log($x, 2)``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/log.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/log.ini.html","name":"Log","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:10:02 +0000","dateModified":"Thu, 16 Jul 2026 08:10:02 +0000","description":"Log has several meanings:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Log.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://www.php.net/manual/en/function.error-log.php)**
## Related

+ [Logarithm](logarithm.ini.html)
+ [Log File](log-file.ini.html)
+ [Monitoring](monitoring.ini.html)
+ [STDOUT](stdout.ini.html)
+ [Telemetry](telemetry.ini.html)
+ [Troubleshoot](troubleshoot.ini.html)
