.. _child-class:
.. _child:
.. _children:
.. _subclass:

Child Class
-----------

A child class is a class that extends another class. There is not specific keyword related to child classes: unlike ``parent`` which is unique and defined, any class that extends a class is its child.

A child class may be the direct child of a class, or any of the own child.


.. code-block:: php
   
   <?php
   
   // parent class
   class V { }
   
   // child class
   class W extends V {}
   
   // child class of V
   // child class of W
   class X extends W {}
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php>`__

Related : :ref:`Overwrite <overwrite>`, :ref:`static <static>`, :ref:`Self <self>`, :ref:`Late Static Binding <late-static-binding>`
