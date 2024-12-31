.. _abstract-class:
.. meta::
	:description:
		Abstract Class: An abstract class is a class that cannot be instantiated directly.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Abstract Class
	:twitter:description: Abstract Class: An abstract class is a class that cannot be instantiated directly
	:twitter:creator: @exakat
	:og:title: Abstract Class
	:og:type: article
	:og:description: An abstract class is a class that cannot be instantiated directly
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/abstract-class.ini.html
	:og:locale: en


Abstract Class
--------------

An abstract class is a class that cannot be instantiated directly. It has the ``abstract`` option.

An abstract class serves as a blueprint for other classes and is intended to be subclassed. 

An abstract class can contain both regular methods and abstract methods. Regular methods provide common functionality that can be inherited by subclasses, while abstract methods are declared without an implementation. Subclasses of an abstract class must provide an implementation for all the abstract methods defined in the abstract class.


.. code-block:: php
   
   <?php
   abstract class AbstractClass { }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.abstract.php>`__

Related : :ref:`Final Keyword <final>`
