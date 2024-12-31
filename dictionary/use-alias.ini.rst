.. _use-alias:
.. meta::
	:description:
		Use Alias: The use operator can create aliases for a class, function or constant.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Use Alias
	:twitter:description: Use Alias: The use operator can create aliases for a class, function or constant
	:twitter:creator: @exakat
	:og:title: Use Alias
	:og:type: article
	:og:description: The use operator can create aliases for a class, function or constant
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/use-alias.ini.html
	:og:locale: en


Use Alias
---------

The use operator can create aliases for a class, function or constant. After the declaration of the alias, it is possible to use the original class with the alias name. 


.. code-block:: php
   
   <?php
   
   use A as B;
   
   class A {}
   
   new A;
   new B;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.importing.php>`__
