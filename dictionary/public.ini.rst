.. _public:

Public Visibility
-----------------

The `public` keyword is part of the three keywords to define visibility of a method, property or constant. It is the lowest level of visibility : it doesn't restrict usage.

`public` is also the default visibility when it is omitted. 


.. code-block:: php
   
   <?php
   
   class x {
   	// public constant
       const X = 1;
       public $p = 2;
   }
   
   $x = new x;
   echo $x->p;
   echo x::X;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.visibility.php>`__

Related : :ref:`Final Keyword <final>`, :ref:`Visibility <visibility>`, :ref:`Private Visibility <private>`, :ref:`Protected Visibility <protected>`, :ref:`Var <var>`
