.. _debugger:
.. meta::
	:description:
		Debugger: A debugger is an extension or an external program that is used to help when searching for bugs in source code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Debugger
	:twitter:description: Debugger: A debugger is an extension or an external program that is used to help when searching for bugs in source code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Debugger
	:og:type: article
	:og:description: A debugger is an extension or an external program that is used to help when searching for bugs in source code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/debugger.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Debugger","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:54 +0000","dateModified":"Thu, 28 May 2026 06:09:54 +0000","description":"A debugger is an extension or an external program that is used to help when searching for bugs in source code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Debugger.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Debugger
--------

A debugger is an extension or an external program that is used to help when searching for bugs in source code. 

As there are many tactics to search for a bug, there are many tools available.

This includes

+ PHP native functions such as ``var_dump()``, ``print_r()``, ``debug_backtrace()``...
+ external components like ``kint``, ``whoops``, ``krumo``, 
+ Debuggers: Interactive PHP Debugger, xdebug, PHP debugger, etc.

Debugging include executing the code step by step, displaying and modifying the content of variables.


.. code-block:: php
   
   <?php
   
       // simple debug system with native PHP print_r
       print_r($_GET);
   
   ?>


See also `Xdebug <https://www.xdebug.org/>`_, `Interactive PHP Debugger <https://www.php.net/manual/en/book.phpdbg.php>`_, `Kint <https://github.com/kint-php/kint>`_, `Whoops <https://github.com/filp/whoops>`_, `Krumo <http://krumo.kaloyan.info/>`_ and `Quo <https://github.com/Protoqol/Quo>`_.

Related : :ref:`Debug <debug>`, :ref:`Integrated Environment of Development (IDE) <ide>`, :ref:`var_dump() <var_dump>`, :ref:`print_r() <print_r>`
