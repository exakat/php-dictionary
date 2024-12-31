.. _class-operator:
.. meta::
	:description:
		Class Operator: Class operator is the ``::class``, added to a class, interface, trait or enumeration identifier.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class Operator
	:twitter:description: Class Operator: Class operator is the ``::class``, added to a class, interface, trait or enumeration identifier
	:twitter:creator: @exakat
	:og:title: Class Operator
	:og:type: article
	:og:description: Class operator is the ``::class``, added to a class, interface, trait or enumeration identifier
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/class-operator.ini.html
	:og:locale: en


Class Operator
--------------

Class operator is the ``::class``, added to a class, interface, trait or enumeration identifier. It returns the fully qualified name of the class, according to the current code. 

``::class`` is affected by `use` expressions, but not by class_alias(); function. 

.. code-block:: php
   
   <?php
   
   // class operator in action
   // This is an unknown class, so it displays A\B
   echo A\B::class;
   
   // This is an 'use' class, so it displays A\B
   use A\B as D;
   echo D::class;
   
   // class_alias creates a new class, so it is different. 
   class E{}
   class_alias('E', 'F');
   echo F::class;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.class.class>`__

Related : :ref:`Use <use>`
