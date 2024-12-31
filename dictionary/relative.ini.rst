.. _relative:
.. meta::
	:description:
		Relative: A ``relative`` value is dependant from the context in which it operates.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Relative
	:twitter:description: Relative: A ``relative`` value is dependant from the context in which it operates
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Relative
	:og:type: article
	:og:description: A ``relative`` value is dependant from the context in which it operates
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/relative.ini.html
	:og:locale: en


Relative
--------

A ``relative`` value is dependant from the context in which it operates. 

The notion of ``relative``` has several usages:

+ There are relative names, which depends on the local namespace
+ There are relative path, which are path that starts at the current working directory
+ There are relative type, which are types that depends on the current class context, such as ``self``, ``static`` and ``parent``

The notion of relative is the opposite of the notion of absolute, which does not depend on a local context.


.. code-block:: php
   
   <?php
   
   class x extends y {
   
       // relative type, that may be copy-pasted without a change
       function foo() : self {} 
       
       // absolute type, that represents the current class
       function goo() : x {} 
       
   }
   ?>


Related : :ref:`Fully Qualified Name <fully-qualified-name>`, :ref:`Relative Types <relative-types>`, :ref:`Path <path>`, :ref:`Absolute <absolute>`
