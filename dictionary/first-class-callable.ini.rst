.. _first-class-callable:

First Class Callable
--------------------

In PHP 8.1, a new feature called 'First Class Callable Syntax' was introduced. It allows to create a closure directly, by usingthe triple dot operator as an argument.

Such closure may be created using any kind of function, such as native PHP function, or library methods. 


.. code-block:: php
   
   <?php
   
   $a = foo(...);
   
   $function = strtolower(...);
   
   ?>


`Documentation <https://www.php.net/closure>`__

Related : :ref:`Functions <function>`, :ref:`Closure <closure>`, :ref:`Anonymous Function <anonymous-function>`

Added in PHP 8.1
