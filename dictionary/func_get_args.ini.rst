.. _func_get_args:
.. meta::
	:description:
		func_get_args(): ``func_get_args()`` is a native function that returns an array containing the function's argument list.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: func_get_args()
	:twitter:description: func_get_args(): ``func_get_args()`` is a native function that returns an array containing the function's argument list
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: func_get_args()
	:og:type: article
	:og:description: ``func_get_args()`` is a native function that returns an array containing the function's argument list
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/func_get_args.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"func_get_args()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 16 Mar 2026 14:47:13 +0000","dateModified":"Mon, 16 Mar 2026 14:47:13 +0000","description":"``func_get_args()`` is a native function that returns an array containing the function's argument list","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/func_get_args().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


func_get_args()
---------------

``func_get_args()`` is a native function that returns an array containing the function's argument list.

It is often used to handle a variable number of arguments in a function, especially before the introduction of the variadic operator ``...`` in PHP 5.6.

There are related functions: ``func_get_arg()``, which returns a specific argument from the list, and ``func_num_args()``, which returns the number of arguments passed to the function.

.. code-block:: php
   
   <?php
   
   function foo() {
       $numargs = func_num_args();
       echo "Number of arguments: $numargs\n";
       if ($numargs >= 2) {
           echo "Second argument is: " . func_get_arg(1) . "\n";
       }
       $arg_list = func_get_args();
       for ($i = 0; $i < $numargs; $i++) {
           echo "Argument $i is: " . $arg_list[$i] . "\n";
       }
   }
   
   foo(1, 2, 3);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.func-get-args.php>`__

See also https://www.geeksforgeeks.org/php/php-func_get_args-function/

Related : :ref:`Variable Arguments <variable-argument>`, :ref:`Variadic <variadic>`, :ref:`Arbitrary Number Of Argument <arbitrary-argument>`

Added in PHP 5.0+
