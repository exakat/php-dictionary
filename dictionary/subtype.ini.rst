.. _subtype:
.. meta::
	:description:
		subtype: A subtype is any of the child types.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: subtype
	:twitter:description: subtype: A subtype is any of the child types
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: subtype
	:og:type: article
	:og:description: A subtype is any of the child types
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/subtype.ini.html
	:og:locale: en


subtype
-------

A subtype is any of the child types. It is the classes that extend the target class, with the ``extends`` keyword; it also covers all the classes that are a subtypes of that child class. 

The opposite is supertype.


.. code-block:: php
   
   <?php
   
   // Aparent is a supertype of AChild
   class Aparent extends Agrandparent {}
   
   class Achild extends Aparent{}
   
   // Agrandchild is a subtype of AChild
   class Agrandchild extends Achild {}
   
   // These are not subtype of AChild
   class ABrother extends Aparent{}
   
   class ASister extends Aparent{}
   
   ?>


Related : :ref:`supertype <supertype>`
