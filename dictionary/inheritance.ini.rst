.. _inheritance:
.. meta::
	:description:
		Inheritance: Inheritance is a mechanism where you can to derive a class from another class for a hierarchy of classes that share a set of attributes and methods.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Inheritance
	:twitter:description: Inheritance: Inheritance is a mechanism where you can to derive a class from another class for a hierarchy of classes that share a set of attributes and methods
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Inheritance
	:og:type: article
	:og:description: Inheritance is a mechanism where you can to derive a class from another class for a hierarchy of classes that share a set of attributes and methods
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/inheritance.ini.html
	:og:locale: en


Inheritance
-----------

Inheritance is a mechanism where you can to derive a class from another class for a hierarchy of classes that share a set of attributes and methods.



.. code-block:: php
   
   <?php
   
   class x {
       public function foo() {
           echo "I am foo!\n";
       }
   }
   
   class y extends x {
       public function boo() {
           echo "I am boo!\n";
       }
   }
   
   $y = new Y();
   $y->boo(); // calling the boo method, defined only with y
   $y->foo(); // calling the foo method, defined in x, and inherited in y
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.inheritance.php>`__

See also `This is why PHP don't have multiple inheritance <https://www.amitmerchant.com/this-is-why-php-dont-have-multiple-inheritance/>`_

Related : :ref:`Class <class>`
