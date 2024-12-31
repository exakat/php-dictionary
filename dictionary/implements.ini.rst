.. _implements:
.. meta::
	:description:
		implements: Implements is a keyword, dedicated to classes.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: implements
	:twitter:description: implements: Implements is a keyword, dedicated to classes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: implements
	:og:type: article
	:og:description: Implements is a keyword, dedicated to classes
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/implements.ini.html
	:og:locale: en


implements
----------

Implements is a keyword, dedicated to classes. It specify which interfaces a class implements.

Implemented interfaces may be tested with types, instanceof, and is_a().

The list of implemented interfaces is accessible with the class_implements() function.


.. code-block:: php
   
   <?php
   
   interface i {
       function fooi() ;
   }
   
   // empty interface 
   interface j { }
   
   class x implements i, j {
       private $property;
       
       public function fooi() {
           return 1;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.interfaces.php#language.oop5.interfaces.implements>`__

Related : :ref:`Classes <class>`, :ref:`Class Getter Method <getter>`, :ref:`extends <extends>`

Added in PHP 5.0+
