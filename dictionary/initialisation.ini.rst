.. _initialisation:
.. meta::
	:description:
		Initialisation: Initialisation is the process to unconditionally give a value to a variable, or any container, before its usage.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Initialisation
	:twitter:description: Initialisation: Initialisation is the process to unconditionally give a value to a variable, or any container, before its usage
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Initialisation
	:og:type: article
	:og:description: Initialisation is the process to unconditionally give a value to a variable, or any container, before its usage
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/initialisation.ini.html
	:og:locale: en


Initialisation
--------------

Initialisation is the process to unconditionally give a value to a variable, or any container, before its usage. 

Initialisation has a dedicated syntax for properties, parameters and static variables. There is no dedicated syntax for variable initialisation: they are created when needed, with a default value of NULL. They also emits a warning in that case.

Initialisation ensures that a variable is hold a sane value before any usage. This makes it important for security purposes too.


.. code-block:: php
   
   <?php
   
   function foo($i = 0) {
   	static $var = 3;
   	
   	// implicit initialisation with null, which is later cast to 0.
   	$x += 2;
   }
   ?>


`Documentation <https://en.wikipedia.org/wiki/Initialization_(programming)>`__

Related : :ref:`Definition <definition>`
