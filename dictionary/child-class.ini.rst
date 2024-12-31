.. _child-class:
.. _child:
.. _children:
.. _subclass:
.. meta::
	:description:
		Child Class: A child class is a class that extends another class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Child Class
	:twitter:description: Child Class: A child class is a class that extends another class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Child Class
	:og:type: article
	:og:description: A child class is a class that extends another class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/child-class.ini.html
	:og:locale: en


Child Class
-----------

A child class is a class that extends another class. There is not specific keyword related to child classes: unlike ``parent`` which is unique and defined, any class that extends a class is its child.

A child class may be the direct child of a class, or any of the own child.


.. code-block:: php
   
   <?php
   
   // parent class
   class V { }
   
   // child class
   class W extends V {}
   
   // child class of V
   // child class of W
   class X extends W {}
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php>`__

Related : :ref:`Overwrite <overwrite>`, :ref:`static <static>`, :ref:`Self <self>`, :ref:`Late Static Binding <late-static-binding>`
