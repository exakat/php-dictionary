.. _import:
.. meta::
	:description:
		Import: Imports are elements of a different namespaces, brought into the current one.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Import
	:twitter:description: Import: Imports are elements of a different namespaces, brought into the current one
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Import
	:og:type: article
	:og:description: Imports are elements of a different namespaces, brought into the current one
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/import.ini.html
	:og:locale: en


Import
------

Imports are elements of a different namespaces, brought into the current one. They rely on the ``use`` expression, usually at the beginning of the file.

Once a class, interface, trait, enum, function or constant has been imported, it is available in the current namespace. It may also use another name, also called alias.

Import is sometimes mistaken with inclusion, which bring in code. 


.. code-block:: php
   
   <?php
   
   namespace A;
   
   // import classes
   use B\C; 
   use D\E as F; 
   // import function
   use function A\foo; 
   // import constants
   use const A\D;
   
   // call an imported function with an imported constant
   foo(D); 
   
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.importing.php>`__

See also `Avoiding Imports and Aliases in PHP <https://dev.to/khairuaqsara/avoiding-imports-and-aliases-in-php-52m0>`_

Related : :ref:`include <include>`
