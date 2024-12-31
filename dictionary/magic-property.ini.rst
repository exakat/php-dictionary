.. _magic-property:
.. _overloaded-property:
.. meta::
	:description:
		Magic Property: Special properties, which are not declared, but dynamically handled by the magic methods.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Magic Property
	:twitter:description: Magic Property: Special properties, which are not declared, but dynamically handled by the magic methods
	:twitter:creator: @exakat
	:og:title: Magic Property
	:og:type: article
	:og:description: Special properties, which are not declared, but dynamically handled by the magic methods
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/magic-property.ini.html
	:og:locale: en


Magic Property
--------------

Special properties, which are not declared, but dynamically handled by the magic methods. They do not have specific declaration. 

The magic methods to handle magic properties are :  __get(), __set(), __isset() and __unset().

.. code-block:: php
   
   <?php
   
   class x {
       //
       function __get($name) {
           return 'World!';
       }
   }
   
   $x = new x;
   echo $x->hello; // display World!
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php>`__

Related : :ref:`__get() Method <-__get>`, :ref:`__set() method <-__set>`, :ref:`Magic Constants <magic-constant>`
