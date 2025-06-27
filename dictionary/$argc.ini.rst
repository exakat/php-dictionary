.. _$argc:
.. meta::
	:description:
		$argc: In PHP, ``$argc`` is a predefined variable that holds the number of arguments passed to the script when it is executed from the command line.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $argc
	:twitter:description: $argc: In PHP, ``$argc`` is a predefined variable that holds the number of arguments passed to the script when it is executed from the command line
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: $argc
	:og:type: article
	:og:description: In PHP, ``$argc`` is a predefined variable that holds the number of arguments passed to the script when it is executed from the command line
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/$argc.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"$argc","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 27 Jun 2025 16:52:33 +0000","dateModified":"Fri, 27 Jun 2025 16:52:33 +0000","description":"In PHP, ``$argc`` is a predefined variable that holds the number of arguments passed to the script when it is executed from the command line","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/$argc.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


$argc
-----

In PHP, ``$argc`` is a predefined variable that holds the number of arguments passed to the script when it is executed from the command line. It represents the argument count (hence the name $argc).

When a PHP script is run from the command line, the script's filename is counted as the first argument, and any additional arguments passed after the filename are also counted. The value of ``$argc`` will be an integer indicating the total number of arguments.

.. code-block:: php
   
   <?php
   
   echo $argc;
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.argc.php>`__

Related : :ref:`$argv <$argv>`, :ref:`PHP Variables <php-variable>`, :ref:`Command Line Interface (CLI) <cli>`
