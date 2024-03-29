.. _polymorphism:

Polymorphism
------------

Polymorphism is a fundamental concept in object-oriented programming (OOP). It allows different classes to be treated as instances of a common base class, interface, or abstract class, and it allow to write code that works with these objects without needing to know their specific types. 

Polymorphism is achieved through method overriding and interfaces. It is possible to inherit from several parent classes, as long as they inherit from each other. On the other hand, implementing interfaces can be arbitrary chosen for any class.

.. code-block:: php
   
   <?php
   
   class Object {}
   
   interface hasMedian {}
   
   interface hasInscribedCircle {}
   
   class Triangle extends Object implements hasInscribedCircle, hasMedian {}
   
   class Square extends Object implements hasInscribedCircle {}
   
   class Pentagon extends Object {}
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.inheritance.php>`__

See also `PHP Polymorphism Explained ( By Examples ) <https://www.scaler.com/topics/php-tutorial/polymorphism-in-php/>`_, `Polymorphism in PHP <https://phpenthusiast.com/object-oriented-php-tutorials/polymorphism-in-php>`_, `Polymorphism in PHP With Example <https://mohasin-dev.medium.com/polymorphism-in-php-with-example-83de1792c89d>`_
