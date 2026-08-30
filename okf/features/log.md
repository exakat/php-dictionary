---
type: "disambiguation"
title: "Log"
description: "Log has several meanings: + Log file, or logging, to collect events traces as they happen + Logarithm, the math function As a logging mechanism, PHP provides the low-level ``error_log()`` function to write a message to the system logger, a file, or by email, and the ``log_errors``/``error_log`` php.ini directives to route uncaught errors there automatically."
resource: "https://www.php.net/manual/en/function.error-log.php"
tags: ["disambiguation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Log

Log has several meanings:

+ Log file, or logging, to collect events traces as they happen
+ Logarithm, the math function

As a logging mechanism, PHP provides the low-level ``error_log()`` function to write a message to the system logger, a file, or by email, and the ``log_errors``/``error_log`` php.ini directives to route uncaught errors there automatically. Above that layer, PSR-3 ``Psr\Log\LoggerInterface`` standardizes a common logging API across eight severity levels, from ``debug`` to ``emergency``, and Monolog is the de facto implementation used by Symfony, Laravel, and most modern frameworks, dispatching log records to handlers such as files, syslog, Slack, Sentry, or Elasticsearch.

As a math function, ``log()`` computes the natural logarithm by default, or the logarithm to an arbitrary base when a second argument is supplied; ``log10()`` provides base-10 logarithms directly, but PHP has no dedicated base-2 function, so it is computed as ``log($x, 2)``.

## Documentation
- [https://www.php.net/manual/en/function.error-log.php](https://www.php.net/manual/en/function.error-log.php)

## See Also
- [PSR-3: Logger Interface](https://www.php-fig.org/psr/psr-3/)
- [Monolog](https://github.com/Seldaek/monolog)

## Related
- [Logarithm](/features/logarithm.md)
- [Log File](/features/log-file.md)
- [Monitoring](/features/monitoring.md)
- [STDOUT](/features/stdout.md)
- [Telemetry](/features/telemetry.md)
- [Troubleshoot](/features/troubleshoot.md)

