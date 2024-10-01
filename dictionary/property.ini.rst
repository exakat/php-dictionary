.. _property:

Properties
----------

Class properties are variables, local to an object or a class.

They might have visibility, chosen among : public (default), protected and private.

They might have a default value. By default it is null.

They might have a type, since PHP 7.4

They might be readonly, for properties which are only set once, and cannot be modified. 

They might be static, and not related to an object, but to a class. 

Property should be uniquely defined in a class. They may be redefined in children or parent when the visibility allows it.
 

.. code-block:: php
   
   <?php
   
   class X {
       private $property = 1;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.properties.php>`__

See also `PHP OOP properties <https://tutorials.supunkavinda.blog/php/oop-properties>`_

Related : :ref:`Visibility <visibility>`, :ref:`static <static>`, :ref:`Readonly <readonly>`, :ref:`Attributes <attribute>`, :ref:`Default Value <default-value>`, :ref:`Magic Property <magic-property>`, :ref:`Dynamic Properties <dynamic-property>`, :ref:`Property Hook <property-hook>`, :ref:`Asymetric Visibility <set-visibility>`, :ref:`Type System <type>`
