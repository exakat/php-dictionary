.. _scope-resolution-operator:
.. _double-colon:
.. _paamayim-nekudotayim:
.. meta::
	:description:
		Scope Resolution Operator ::: The Scope Resolution Operator is a token that allows access to static, constant, and overridden properties or methods of a class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Scope Resolution Operator ::
	:twitter:description: Scope Resolution Operator ::: The Scope Resolution Operator is a token that allows access to static, constant, and overridden properties or methods of a class
	:twitter:creator: @exakat
	:og:title: Scope Resolution Operator ::
	:og:type: article
	:og:description: The Scope Resolution Operator is a token that allows access to static, constant, and overridden properties or methods of a class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/scope-resolution-operator.ini.html
	:og:locale: en


Scope Resolution Operator ::
----------------------------

The Scope Resolution Operator is a token that allows access to static, constant, and overridden properties or methods of a class.

Traditionally, this used to be a feature of the function get_class(). The operator is more modern and faster. 

This operator is often called double-colon, or ``paamayim-nekudotayim`` : this is double-colon in Hebrew.

.. code-block:: php
   
   <?php
   
   $a = new stdClass();
   
   echo $a::class;
   
   // identical to 
   echo get_class($a);
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php>`__

Related : :ref:`Object Operator -> <object-operator>`, :ref:`Object Nullsafe Operator ?-> <object-nullsafe-operator>`, :ref:`Colon <colon>`
