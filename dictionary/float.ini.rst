.. _float:
.. _double:
.. meta::
	:description:
		Floating Point Numbers:  Floating point numbers (also known as "floats", "doubles", or "real numbers") can be specified using a decimal dot and a mantis.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Floating Point Numbers
	:twitter:description: Floating Point Numbers:  Floating point numbers (also known as "floats", "doubles", or "real numbers") can be specified using a decimal dot and a mantis
	:twitter:creator: @exakat
	:og:title: Floating Point Numbers
	:og:type: article
	:og:description:  Floating point numbers (also known as "floats", "doubles", or "real numbers") can be specified using a decimal dot and a mantis
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/float.ini.html
	:og:locale: en


Floating Point Numbers
----------------------

 Floating point numbers (also known as "floats", "doubles", or "real numbers") can be specified using a decimal dot and a mantis.

They may also use a number separator ``_``.

Floats used be called ``real``, though this was abandoned progressively, since PHP 7.0.

.. code-block:: php
   
   
   <?php
   $a = 1.234; 
   $b = 1.2e3; 
   $c = 7E-10;
   $d = 1_234.567; // as of PHP 7.4.0
   ?>
   


`Documentation <https://www.php.net/manual/en/language.types.float.php>`__

See also `Floating Dangers in PHP <https://medium.com/@dotcom.software/floating-dangers-in-php-c4a2220bd8dc>`_, `Floating Point Math <https://0.30000000000000004.com/>`_, `Comparing float value in PHP <https://www.geeksforgeeks.org/comparing-float-value-in-php/>`_

Related : :ref:`Real Numbers <real>`, :ref:`Addition <addition>`, :ref:`Multiplication <multiplication>`
