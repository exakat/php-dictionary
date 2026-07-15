.. _debug_backtrace:
.. meta::
	:description:
		debug_backtrace(): ``debug_backtrace()`` is a PHP native function that generates a backtrace.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: debug_backtrace()
	:twitter:description: debug_backtrace(): ``debug_backtrace()`` is a PHP native function that generates a backtrace
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: debug_backtrace()
	:og:type: article
	:og:description: ``debug_backtrace()`` is a PHP native function that generates a backtrace
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/debug_backtrace.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/debug_backtrace.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/debug_backtrace.ini.html","name":"debug_backtrace()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``debug_backtrace()`` is a PHP native function that generates a backtrace","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/debug_backtrace().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


debug_backtrace()
-----------------

``debug_backtrace()`` is a PHP native function that generates a backtrace.

``debug_backtrace()`` is used for inline debugging, or to collect more information before logging errors.

``debug_backtrace()`` returns a dataset concerning the current situation of execution. It does not display anything: that function is either custom made, or devoted to ``debug_print_backtrace()``.


.. code-block:: php
   
   <?php
   
       function foo() {
           print_r(debug_backtrace());
           /** 
           Array
   (
       [0] => Array
           (
               [file] => /tmp.php
               [line] => 7
               [function] => foo
               [args] => Array
                   (
                   )
   
           )
   
   )
   */
       }
       
       foo();
   
   ?>


`Documentation <https://www.php.net/manual/en/function.debug-backtrace.php>`__

See also `debug_print_backtrace <https://www.php.net/manual/en/function.debug-print-backtrace.php>`_.

Related : :ref:`print_r() <print_r>`, :ref:`Trace <trace>`, :ref:`var_dump() <var_dump>`
