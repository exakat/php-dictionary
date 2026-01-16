.. _debugger:
.. _debug:
.. meta::
	:description:
		Debugger: A debugger is an extension or an external program that is used to help when searching for bugs in PHP code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Debugger
	:twitter:description: Debugger: A debugger is an extension or an external program that is used to help when searching for bugs in PHP code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Debugger
	:og:type: article
	:og:description: A debugger is an extension or an external program that is used to help when searching for bugs in PHP code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/debugger.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Debugger","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 17:01:22 +0000","dateModified":"Fri, 16 Jan 2026 17:01:22 +0000","description":"A debugger is an extension or an external program that is used to help when searching for bugs in PHP code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Debugger.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Debugger
--------

A debugger is an extension or an external program that is used to help when searching for bugs in PHP code. 

There are several debuggers in PHP : Interactive PHP Debugger, xdebug, kint, krumo, whoops, PHP. 

Debugging include executing the code step by step, displaying and modifying the content of variables.

.. code-block:: php
   
   <?php
   	// simple debug system with native PHP print_r
   	print_r($_GET);
   ?>


See also https://www.xdebug.org/, https://www.php.net/manual/en/book.phpdbg.php, https://github.com/kint-php/kint, https://github.com/filp/whoops, http://krumo.kaloyan.info/
