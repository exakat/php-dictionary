.. _private:

Private Visibility
------------------

The private keyword is part of the three keywords to define visibility of a method, property or constant. It is the strictest level of visibility : it restrict usage to the current class only. Child class can't redefine it, nor access it.

The private keyword cannot be used with the final keyword : a private method is not visible in the child classes, and can't also be redefined.



.. code-block:: php
   
   <?php
   
   class x {
       private const X = 1;
       
       final public function method() { 
           echo self::X;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.visibility.php>`__

Related : :ref:`Final Keyword <final>`, :ref:`Visibility <visibility>`, :ref:`Protected Visibility <protected>`, :ref:`Public Visibility <public>`, :ref:`Var <var>`
