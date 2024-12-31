.. _literal:
.. meta::
	:description:
		Literal: A literal is a hard coded value in the source.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Literal
	:twitter:description: Literal: A literal is a hard coded value in the source
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Literal
	:og:type: article
	:og:description: A literal is a hard coded value in the source
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/literal.ini.html
	:og:locale: en


Literal
-------

A literal is a hard coded value in the source.

There can be literal of type int, float, boolean, null, array. 

Objects and resources cannot be hardcoded, though their creation call may be. 



.. code-block:: php
   
   <?php
   
   // Literal 1 to $a
   $a = 1;
   
   // The object is created during execution.
   $b = new X();
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.decon.php>`__

Related : :ref:`Destructor <destructor>`
