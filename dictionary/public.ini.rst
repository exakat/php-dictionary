.. _public:
.. meta::
	:description:
		Public Visibility: The `public` keyword is part of the three keywords to define visibility of a method, property or constant.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Public Visibility
	:twitter:description: Public Visibility: The `public` keyword is part of the three keywords to define visibility of a method, property or constant
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Public Visibility
	:og:type: article
	:og:description: The `public` keyword is part of the three keywords to define visibility of a method, property or constant
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/public.ini.html
	:og:locale: en


Public Visibility
-----------------

The `public` keyword is part of the three keywords to define visibility of a method, property or constant. It is the lowest level of visibility : it doesn't restrict usage.

`public` is also the default visibility when it is omitted. 


.. code-block:: php
   
   <?php
   
   class x {
   	// public constant
       const X = 1;
       public $p = 2;
   }
   
   $x = new x;
   echo $x->p;
   echo x::X;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.visibility.php>`__

Related : :ref:`Final Keyword <final>`, :ref:`Visibility <visibility>`, :ref:`Private Visibility <private>`, :ref:`Protected Visibility <protected>`, :ref:`Var <var>`
