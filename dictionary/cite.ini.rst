.. _cite:
.. _classlike:
.. meta::
	:description:
		Class Interface Trait Enumeration (CITE): CITE stands for Class Interface Trait Enumeration.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class Interface Trait Enumeration (CITE)
	:twitter:description: Class Interface Trait Enumeration (CITE): CITE stands for Class Interface Trait Enumeration
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Class Interface Trait Enumeration (CITE)
	:og:type: article
	:og:description: CITE stands for Class Interface Trait Enumeration
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cite.ini.html
	:og:locale: en


Class Interface Trait Enumeration (CITE)
----------------------------------------

CITE stands for Class Interface Trait Enumeration. It represents all four type of PHP structures, when they interact together. 

In particular, all four of them share the same namespaces, which may create naming conflict. This is unlike functions and constants, which both have their own namespaces.

.. code-block:: php
   
   <?php
   
   class C {}
   
   interface I {}
   
   trait T {}
   
   enum E {}
   
   const C = 1;
   function C() {} 
   
   ?>


Related : :ref:`Class <class>`, :ref:`Trait <trait>`, :ref:`Interface <interface>`, :ref:`Enumeration (enum) <enum>`
