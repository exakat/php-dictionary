.. _direct-output:
.. meta::
	:description:
		Direct Output: Direct output is the characteristics of a function or method to write data directly to the output stream.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Direct Output
	:twitter:description: Direct Output: Direct output is the characteristics of a function or method to write data directly to the output stream
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Direct Output
	:og:type: article
	:og:description: Direct output is the characteristics of a function or method to write data directly to the output stream
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/direct-output.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Direct Output","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"Direct output is the characteristics of a function or method to write data directly to the output stream","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Direct Output.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Direct Output
-------------

Direct output is the characteristics of a function or method to write data directly to the output stream. 

A good practice is to passe the output data to the calling context, for it to decide how to handle it. 

Errors, exceptions, and debug often use direct output. Specific functions, such as ``echo``, ``print_r``, ``debug_print_backtrace()`` output directly on purpose.

Direct output is the root for the infamous ``Headers already sent`` error.

The alternative is to output to logs, or return the results.


See also `PHP: The Flexibility that can Make or Break your Team Project <https://www.linkedin.com/pulse/php-flexibility-can-make-break-your-team-project-gerrit-vermeulen>`_.

Related : :ref:`Interface <interface>`, :ref:`Proxy Class <proxy-class>`, :ref:`Relay Function <relay-function>`, :ref:`Rigidity <rigidity>`, :ref:`Testable <testable>`
