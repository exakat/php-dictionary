.. _callable:
.. meta::
	:description:
		Callables: A callable is an object that can pass the ``callable`` type.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Callables
	:twitter:description: Callables: A callable is an object that can pass the ``callable`` type
	:twitter:creator: @exakat
	:og:title: Callables
	:og:type: article
	:og:description: A callable is an object that can pass the ``callable`` type
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/callable.ini.html
	:og:locale: en


Callables
---------

A callable is an object that can pass the ``callable`` type. 

A callable may be a callback function or method, a closure or an arrow function. 

Classes may also be callable, when they implement the magic method ``__invoke()``.

.. code-block:: php
   
   <?php
   
   function foo() { echo __METHOD__; }
   
   call_user_func('foo');
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.callable.php>`__

See also `What Is the callable Type in PHP? <https://www.designcise.com/web/tutorial/what-is-the-callable-type-in-php>`_

Related : :ref:`Callbacks <callback>`, :ref:`Closure <closure>`, :ref:`__invoke() Method <-__invoke>`, :ref:`Arrow Functions <arrow-function>`
