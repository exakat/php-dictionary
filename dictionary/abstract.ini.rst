.. _abstract:
.. meta::
	:description:
		Abstract Keyword: PHP has abstract classes and methods.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Abstract Keyword
	:twitter:description: Abstract Keyword: PHP has abstract classes and methods
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Abstract Keyword
	:og:type: article
	:og:description: PHP has abstract classes and methods
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/abstract.ini.html
	:og:locale: en


Abstract Keyword
----------------

PHP has abstract classes and methods. Classes defined as abstract cannot be instantiated, and any class that contains at least one abstract method must also be abstract.

.. code-block:: php
   
   <?php
   abstract class AbstractClass
   {
       // Force Extending class to define this method
       abstract protected function getValue();
       abstract protected function prefixValue($prefix);
   
       // Common method
       public function printOut() {
           print $this->getValue() . "\n";
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.abstract.php>`__

See also `Interfaces vs Abstract Classes in PHP <https://ashallendesign.co.uk/blog/interfaces-vs-abstract-classes-in-php>`_, `Abstract classes and methods <https://phpenthusiast.com/object-oriented-php-tutorials/abstract-classes-and-methods>`_, `Testing Abstract Classes in PHP using Anonymous Classes <https://www.otsch.codes/blog/testing-abstract-classes-in-php-using-anonymous-classes>`_

Related : :ref:`Final Keyword <final>`
