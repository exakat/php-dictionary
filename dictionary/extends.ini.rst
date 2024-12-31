.. _extends:
.. meta::
	:description:
		extends: `extends` is an operator of the class inheritance.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: extends
	:twitter:description: extends: `extends` is an operator of the class inheritance
	:twitter:creator: @exakat
	:og:title: extends
	:og:type: article
	:og:description: `extends` is an operator of the class inheritance
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/extends.ini.html
	:og:locale: en


extends
-------

`extends` is an operator of the class inheritance. It indicates that a class is built from another one, or an interface is built from another interface. As such, the properties, constants and methods of the parent class or interface are available to the newly created class, unless when they are marked with `private` visibility. 

`extends` is optional. 

`extends` is unique with a class : it is not possible to extends several classes at the same time. 

`extends` may be multiple with interfaces.

`extends` has a different mechanism than `implements` : `implements` provide method signature but no implementation; `extends` provides both. 



.. code-block:: php
   
   <?php
   
   class x {
   	function foo() { echo "X"; }
   }
   
   class y extends x { }
   
   // Both methods are possible 
   (new x)->foo();
   (new y)->foo();
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.inheritance.php>`__

See also `Stop using “extends” in PHP <https://blog.devgenius.io/stop-using-extends-in-php-37c9da1cce83>`_

Related : :ref:`implements <implements>`
