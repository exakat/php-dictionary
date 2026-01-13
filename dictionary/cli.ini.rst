.. _cli:
.. meta::
	:description:
		Command Line Interface (CLI): PHP provides support for a Command Line Interface (CLI) mode, which allows developers to execute PHP scripts directly from the terminal or command prompt without needing a web server.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Command Line Interface (CLI)
	:twitter:description: Command Line Interface (CLI): PHP provides support for a Command Line Interface (CLI) mode, which allows developers to execute PHP scripts directly from the terminal or command prompt without needing a web server
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Command Line Interface (CLI)
	:og:type: article
	:og:description: PHP provides support for a Command Line Interface (CLI) mode, which allows developers to execute PHP scripts directly from the terminal or command prompt without needing a web server
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cli.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Command Line Interface (CLI)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 27 Jun 2025 16:39:41 +0000","dateModified":"Fri, 27 Jun 2025 16:39:41 +0000","description":"PHP provides support for a Command Line Interface (CLI) mode, which allows developers to execute PHP scripts directly from the terminal or command prompt without needing a web server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Command Line Interface (CLI).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Command Line Interface (CLI)
----------------------------

PHP provides support for a Command Line Interface (CLI) mode, which allows developers to execute PHP scripts directly from the terminal or command prompt without needing a web server. In this mode, commands are passed as a file or lines of text, and the PHP interpreter processes them sequentially. This feature is particularly useful for automation tasks, cron jobs, scripting, testing, or running PHP-based tools. Additionally, the CLI mode offers access to command-line arguments, making it possible to write interactive scripts or utilities that can process user input or parameters at runtime.

.. code-block:: php
   
   <?php
   
   print_r($argv);
   
   ?>


`Documentation <https://www.php.net/manual/en/features.commandline.php>`__

Related : :ref:`Webserver <webserver>`, :ref:`Server Application Programming Interface (SAPI) <sapi>`, :ref:`Read Eval Print Loop (REPL) <repl>`
