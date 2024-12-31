.. _indentation:
.. _indenting:
.. meta::
	:description:
		Indentation: Indentation is a convention governing the indentation of blocks of code to convey program structure.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Indentation
	:twitter:description: Indentation: Indentation is a convention governing the indentation of blocks of code to convey program structure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Indentation
	:og:type: article
	:og:description: Indentation is a convention governing the indentation of blocks of code to convey program structure
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/indentation.ini.html
	:og:locale: en


Indentation
-----------

Indentation is a convention governing the indentation of blocks of code to convey program structure.

.. code-block:: php
   
   <?php
   
   function headers() : never {
       // expected indentation
       headers('Location: https://www.exakat.io/');
   
   // badly indented block
   die();
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Indentation_style>`__
