.. _repl:
.. meta::
	:description:
		Read Eval Print Loop (REPL): PHP's REPL (Read-Eval-Print Loop) mode is an interactive shell that allows to execute PHP code line by line and see immediate results.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Read Eval Print Loop (REPL)
	:twitter:description: Read Eval Print Loop (REPL): PHP's REPL (Read-Eval-Print Loop) mode is an interactive shell that allows to execute PHP code line by line and see immediate results
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Read Eval Print Loop (REPL)
	:og:type: article
	:og:description: PHP's REPL (Read-Eval-Print Loop) mode is an interactive shell that allows to execute PHP code line by line and see immediate results
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/repl.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Read Eval Print Loop (REPL)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 27 Jun 2025 16:45:08 +0000","dateModified":"Fri, 27 Jun 2025 16:45:08 +0000","description":"PHP's REPL (Read-Eval-Print Loop) mode is an interactive shell that allows to execute PHP code line by line and see immediate results","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Read Eval Print Loop (REPL).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Read Eval Print Loop (REPL)
---------------------------

PHP's REPL (Read-Eval-Print Loop) mode is an interactive shell that allows to execute PHP code line by line and see immediate results. It's useful for testing code snippets, debugging, and experimenting with PHP functions without creating separate files.

This mode is also called the interactive mode. It is started, on command line, by calling PHP with the ``-a`` option: ``>php -a``. The mode is ended by calling ``quit``. 


.. code-block:: php
   
   
   $ php -a
   Interactive shell
   
   php > echo 5+3;
   8
   php > quit
   $ 
   


`Documentation <https://www.php.net/manual/en/features.commandline.interactive.php>`__

See also https://medium.com/@dat.tm24/creating-a-php-repl-for-learning-purposes-d90a6a717195, https://github.com/borisrepl/boris

Related : :ref:`Webserver <webserver>`, :ref:`Server Application Programming Interface (SAPI) <sapi>`, :ref:`Command Line Interface (CLI) <cli>`, 
