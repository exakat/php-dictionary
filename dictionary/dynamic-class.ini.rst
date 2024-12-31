.. _dynamic-class:
.. meta::
	:description:
		Dynamic Class: A dynamic class is a class whose fully qualified name is defined at execution time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dynamic Class
	:twitter:description: Dynamic Class: A dynamic class is a class whose fully qualified name is defined at execution time
	:twitter:creator: @exakat
	:og:title: Dynamic Class
	:og:type: article
	:og:description: A dynamic class is a class whose fully qualified name is defined at execution time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dynamic-class.ini.html
	:og:locale: en


Dynamic Class
-------------

A dynamic class is a class whose fully qualified name is defined at execution time. 

This is convenient for module systems, where the actual class is named from an external configuration.


.. code-block:: php
   
   <?php
   
   class AB {}
   
   class AC {}
   
   $name = '\A'.(rand(0, 1) ? 'B' : 'C');
   
   $object = new $name;
   
   ?>


Related : :ref:`new <new>`
