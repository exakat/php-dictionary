.. _debugger:
.. meta::
	:description:
		Debugger: A debugger is an extension or an external program that is used to help when searching for bugs or issues in source code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Debugger
	:twitter:description: Debugger: A debugger is an extension or an external program that is used to help when searching for bugs or issues in source code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Debugger
	:og:type: article
	:og:description: A debugger is an extension or an external program that is used to help when searching for bugs or issues in source code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/debugger.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Debugger","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 04:39:27 +0000","dateModified":"Wed, 08 Jul 2026 04:39:27 +0000","description":"A debugger is an extension or an external program that is used to help when searching for bugs or issues in source code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Debugger.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Debugger
--------

A debugger is an extension or an external program that is used to help when searching for bugs or issues in source code. They provide extra visibility on the internal working of the application, including variable content, 

As there are many tactics to search for a bug, there are many tools available.

The PHP ecosystem of debuggers includes:

+ PHP native functions such as ``var_dump()``, ``print_r()``, ``debug_backtrace()``...
+ PHP external components like ``kint``, ``whoops``, ``krumo``, 
+ Debuggers: interactive PHP Debugger, xdebug, PHP debugger, etc.

Debugging include executing the code step by step, displaying and modifying the content of variables.

Debuggers are integrated into IDE, or work as standalone applications.


.. code-block:: php
   
   <?php
   
       // simple debug system with native PHP print_r
       print_r($_GET);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Debugger>`__

See also `Xdebug <https://www.xdebug.org/>`_, `Interactive PHP Debugger <https://www.php.net/manual/en/book.phpdbg.php>`_, `Kint <https://github.com/kint-php/kint>`_, `Whoops <https://github.com/filp/whoops>`_, `Krumo <http://krumo.kaloyan.info/>`_, `Quo <https://github.com/Protoqol/Quo>`_ and `buggregator <https://buggregator.dev/>`_.

Related : :ref:`Debug <debug>`, :ref:`Integrated Environment of Development (IDE) <ide>`, :ref:`var_dump() <var_dump>`, :ref:`print_r() <print_r>`, :ref:`Backtrace <backtrace>`, :ref:`PHP Editor <php-editor>`, :ref:`PHP Profiler <profiler>`, :ref:`Tool <tool>`
