.. _display_errors:
.. meta::
	:description:
		display_errors: ``display_errors`` configures the display of PHP errors, warnings and notices to the standard output.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: display_errors
	:twitter:description: display_errors: ``display_errors`` configures the display of PHP errors, warnings and notices to the standard output
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: display_errors
	:og:type: article
	:og:description: ``display_errors`` configures the display of PHP errors, warnings and notices to the standard output
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/display_errors.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"display_errors","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Apr 2026 15:04:33 +0000","dateModified":"Tue, 14 Apr 2026 15:04:33 +0000","description":"``display_errors`` configures the display of PHP errors, warnings and notices to the standard output","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/display_errors.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


display_errors
--------------

``display_errors`` configures the display of PHP errors, warnings and notices to the standard output. By default, it is on, with the value 1. 

In production environments, it is recommended to set ``display_errors`` to 0. The error messages should be send to a logging system, for further exploitation. Otherwise, it is considered a data leak, and may lead to a vulnerability.


`Documentation <https://www.php.net/manual/en/errorfunc.configuration.php#ini.display-errors>`__

See also https://developer.wordpress.org/advanced-administration/security/hardening/display-errors/

Related : :ref:`Data Leak <data-leak>`, 
