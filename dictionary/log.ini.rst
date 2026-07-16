.. _log:
.. meta::
	:description:
		Log: Log has several meanings:.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Log
	:twitter:description: Log: Log has several meanings:
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Log
	:og:type: article
	:og:description: Log has several meanings:
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/log.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/log.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/log.ini.html","name":"Log","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:10:02 +0000","dateModified":"Thu, 16 Jul 2026 08:10:02 +0000","description":"Log has several meanings:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Log.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Log
---

Log has several meanings:

+ Log file, or logging, to collect events traces as they happen
+ Logarithm, the math function

As a logging mechanism, PHP provides the low-level ``error_log()`` function to write a message to the system logger, a file, or by email, and the ``log_errors``/``error_log`` php.ini directives to route uncaught errors there automatically. Above that layer, PSR-3 ``Psr\Log\LoggerInterface`` standardizes a common logging API across eight severity levels, from ``debug`` to ``emergency``, and Monolog is the de facto implementation used by Symfony, Laravel, and most modern frameworks, dispatching log records to handlers such as files, syslog, Slack, Sentry, or Elasticsearch.

As a math function, ``log()`` computes the natural logarithm by default, or the logarithm to an arbitrary base when a second argument is supplied; ``log10()`` provides base-10 logarithms directly, but PHP has no dedicated base-2 function, so it is computed as ``log($x, 2)``.


`Documentation <https://www.php.net/manual/en/function.error-log.php>`__

Related : :ref:`Logarithm <logarithm>`, :ref:`Log File <log-file>`, :ref:`Monitoring <monitoring>`, :ref:`STDOUT <stdout>`, :ref:`Telemetry <telemetry>`, :ref:`Troubleshoot <troubleshoot>`
