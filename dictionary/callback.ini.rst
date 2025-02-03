.. _callback:
.. meta::
	:description:
		Callbacks: Callbacks are functions or methods which are used as parameters for other functions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Callbacks
	:twitter:description: Callbacks: Callbacks are functions or methods which are used as parameters for other functions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Callbacks
	:og:type: article
	:og:description: Callbacks are functions or methods which are used as parameters for other functions
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/callback.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Callbacks","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Callbacks are functions or methods which are used as parameters for other functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Callbacks.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Callbacks
---------

Callbacks are functions or methods which are used as parameters for other functions. Such functions are used to customize the calling function. For example, array_map(), which applies a callback to every element of an array, or usort(), which sorts an array using a function.

Callback is akin to a functioncall : it is actually hidden inside the caller function. 

Callback may be build with on closures, arrow-functions, native PHP functions, methods and static methods. They also use string (such as `'strtolower'`) and array (such as `[X::class, 'methodName']`, or `[$object, 'methodName']` ) syntax. In fact, anything that is_callable() may be used.

.. code-block:: php
   
   <?php
   
   $array = ['Damien', 'Dan', 'Daniel', 'Davey', 'David', 'Dennis', 'Derick', 'Dmitry', 'Dustin',];
   $array = array_map('strtolower', $array);
   
   //['damien', 'dan', 'daniel', 'davey', 'david', 'dennis', 'derick', 'dmitry', 'dustin',];
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.callable.php>`__

See also `The Wonderful World of Callbacks <https://markbakeruk.net/2021/12/22/the-wonderful-world-of-callbacks/>`_, `Using callbacks to prevent code duplication <https://doeken.org/tip/using-callbacks-to-prevent-code-duplication>`_

Related : :ref:`Callables <callable>`, :ref:`Closure <closure>`, :ref:`Arrow Functions <arrow-function>`
