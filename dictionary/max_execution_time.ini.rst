.. _max_execution_time:
.. meta::
	:description:
		max_execution_time: The ``max_execution_time`` directive sets the maximum amount of time that PHP will work on an application.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: max_execution_time
	:twitter:description: max_execution_time: The ``max_execution_time`` directive sets the maximum amount of time that PHP will work on an application
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: max_execution_time
	:og:type: article
	:og:description: The ``max_execution_time`` directive sets the maximum amount of time that PHP will work on an application
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/max_execution_time.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"max_execution_time","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"The ``max_execution_time`` directive sets the maximum amount of time that PHP will work on an application","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/max_execution_time.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


max_execution_time
------------------

The ``max_execution_time`` directive sets the maximum amount of time that PHP will work on an application. 

The default value is 30 seconds. It may be lowered down to 1 second, or set to infinity with -1.

``max_execution_time`` may be changed from the code with set_time_limit(). This function may also be disabled, and not available.

It is recommended to set this value as low as possible, and optimize the code to run below that limit.



`Documentation <https://www.php.net/manual/en/ini.core.php#ini.max-execution-time>`__

See also `PHP max_execution_time Guide <https://www.a2hosting.com/kb/developer-corner/php/using-php.ini-directives/php-maximum-execution-time>`_
