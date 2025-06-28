.. _notice:
.. meta::
	:description:
		Notice: A notice is a non-critical runtime error that alerts developers about potential problems in the code, but doesn't stop script execution at that point.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Notice
	:twitter:description: Notice: A notice is a non-critical runtime error that alerts developers about potential problems in the code, but doesn't stop script execution at that point
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Notice
	:og:type: article
	:og:description: A notice is a non-critical runtime error that alerts developers about potential problems in the code, but doesn't stop script execution at that point
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/notice.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Notice","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 28 Jun 2025 14:29:31 +0000","dateModified":"Sat, 28 Jun 2025 14:29:31 +0000","description":"A notice is a non-critical runtime error that alerts developers about potential problems in the code, but doesn't stop script execution at that point","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Notice.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Notice
------

A notice is a non-critical runtime error that alerts developers about potential problems in the code, but doesn't stop script execution at that point.

Notices are one of the error reporting levels, below error and warning.


.. code-block:: php
   
   <?php
   
   echo $x; // Notice, undefined variable
   
   ?>


`Documentation <https://www.php.net/manual/en/errorfunc.constants.php>`__

Related : :ref:`Error <error>`, :ref:`Warning <warning>`, :ref:`Error Reporting <error-reporting>`
