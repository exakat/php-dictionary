.. _callable:

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
