.. _protected:

Protected Visibility
--------------------

The protected keyword is part of the three keywords to define visibility of a method, property or constant. It is the strictest level of visibility : it restricts usage to the current class and its parents and children.



.. code-block:: php
   
   <?php
   
   class x {
       protected const X = 1;
       
       public function method() { 
           echo self::X;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.visibility.php>`__

Related : :ref:`Final Keyword <final>`, :ref:`Visibility <visibility>`, :ref:`Private Visibility <private>`, :ref:`Public Visibility <public>`, :ref:`Var <var>`
