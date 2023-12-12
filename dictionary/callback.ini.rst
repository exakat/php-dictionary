.. _callback:

Callback
--------

Callback are functions which are used as parameters for other functions. Such functions are used to customize the main function. For example, array_map(), which applies a callback to every element of an array, or usort(), which sorts an array using a function.

Callback is akin to a functioncall : it is actually hidden inside the caller function. 

Callback may be build with on closures, arrow-functions, native PHP functions, methods and static methods. They also use string (i.e., `'strtolower'`) and array (i.e. `[X::class, 'methodName']`, or `[$object, 'methodName']` ) syntax. In fact, anything that is_callable() may be used. 



.. code-block:: php
   
   <?php
   
   $array = ['Damien', 'Dan', 'Daniel', 'Davey', 'David', 'Dennis', 'Derick', 'Dmitry', 'Dustin',];
   $array = array_map('strtolower', $array);
   
   //['damien', 'dan', 'daniel', 'davey', 'david', 'dennis', 'derick', 'dmitry', 'dustin',];
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.callable.php>`__

See also `The Wonderful World of Callbacks <https://markbakeruk.net/2021/12/22/the-wonderful-world-of-callbacks/>`_, `Using callbacks to prevent code duplication <https://doeken.org/tip/using-callbacks-to-prevent-code-duplication>`_

Related : :ref:`Callables <callable>`, :ref:`Closure <closure>`, :ref:`Arrow Functions <arrow-function>`
