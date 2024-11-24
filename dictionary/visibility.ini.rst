.. _visibility:
.. _access-level:

Visibility
----------

Properties, methods and classes may have a visibility. It limits the scope of the definition :

+ private : to the current class
+ protected : to the current class hierarchy (parents and children classes)
+ public : to all the code

In PHP, the default visibility is public. 

Visibility may no change, unless when overwriting it with a trait, or in a child class.



.. code-block:: php
   
   <?php
   
   class x {
       public const X = 1;
       
       private $property;
       
       protected function foo() {}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.visibility.php>`__

See also `PHP OOP Visibility <https://tutorials.supunkavinda.blog/php/oop-visibility>`_, `PHP P51: Visibility Modifiers <https://blog.devgenius.io/php-p51-visibility-modifiers-b277591e7c0b>`_, `PHP Tricks: Access control bypass <https://peakd.com/hive-168588/@crell/php-tricks-access-control-bypass>`_

Related : :ref:`Properties <property>`, :ref:`Method <method>`, :ref:`Static Constant <class-constant>`, :ref:`Class Constants Visibility <class-constant-visibility>`, :ref:`Class Invasion <class-invasion>`, :ref:`Object <object>`, :ref:`Private Visibility <private>`, :ref:`Protected Visibility <protected>`, :ref:`Public Visibility <public>`, :ref:`Var <var>`
