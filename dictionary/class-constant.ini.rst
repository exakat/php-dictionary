.. _class-constant:
.. _static-constant:
.. _interface-constant:
.. _trait-constant:
.. _enum-constant:
.. meta::
	:description:
		Static Constant: Static constants are constants that are defined inside a class, interface, trait (since PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Static Constant
	:twitter:description: Static Constant: Static constants are constants that are defined inside a class, interface, trait (since PHP 8
	:twitter:creator: @exakat
	:og:title: Static Constant
	:og:type: article
	:og:description: Static constants are constants that are defined inside a class, interface, trait (since PHP 8
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/class-constant.ini.html
	:og:locale: en


Static Constant
---------------

Static constants are constants that are defined inside a class, interface, trait (since PHP 8.2) and enumeration. 

Static constants have a visibility. Visibility may be ``public``, ``protected``, ``private``. By default, and for backward compatibility, a constant without a visibility is ``public``.

Static constants may also be overwritten by children classes. They can also use the ``final`` keyword, to avoid such behavior.

Static constants are defined at coding time, and cannot be changed later, not dynamically created. 

Static constant syntax is the same than for enumeration cases. 


.. code-block:: php
   
   <?php
   
   class x {
       public  const FOO = 1;
       private const BAR = 2;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.constants.php>`__

Related : :ref:`Visibility <visibility>`, :ref:`Final Keyword <final>`
