.. _error-reporting:
.. meta::
	:description:
		Error Reporting: Error reporting is both a feature, a directive and a PHP native function.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Error Reporting
	:twitter:description: Error Reporting: Error reporting is both a feature, a directive and a PHP native function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Error Reporting
	:og:type: article
	:og:description: Error reporting is both a feature, a directive and a PHP native function
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/error-reporting.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Error Reporting","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 12 Feb 2026 21:57:30 +0000","dateModified":"Thu, 12 Feb 2026 21:57:30 +0000","description":"Error reporting is both a feature, a directive and a PHP native function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Error Reporting.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Error Reporting
---------------

Error reporting is both a feature, a directive and a PHP native function. They all work with the same concept.

Error reporting is the way PHP display errors are they are detected during execution. The ``error_reporting()`` function and the ``error_reporting`` directive sets the type of error to be reported: errors are of different types (Warning, Notice, Error, etc.)

While error reporting sets the type of reported error, the display of error is handled by different directives: ``display_errors`` and ``html_errors``.

Exceptions are not covered by the error reporting, even though one of the exception is called Error.

Error reporting may be further configured with an error handler function. 

Error may be trigger manually with the trigger_error() function.

`Documentation <https://www.php.net/manual/en/function.error-reporting.php>`__

See also https://stackify.com/display-php-errors/

Related : :ref:`Error Handler <error-handler>`, :ref:`@, No Scream Operator <noscream>`, :ref:`html_errors <html_errors>`, 
