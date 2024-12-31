.. _anonymous-class:
.. meta::
	:description:
		Anonymous Class: A class may be instantiated, without defining a class name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Anonymous Class
	:twitter:description: Anonymous Class: A class may be instantiated, without defining a class name
	:twitter:creator: @exakat
	:og:title: Anonymous Class
	:og:type: article
	:og:description: A class may be instantiated, without defining a class name
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/anonymous-class.ini.html
	:og:locale: en


Anonymous Class
---------------

A class may be instantiated, without defining a class name. The class is identical to a named-class, except for the name attribute. This also means that it cannot be used for typing, though it may be typed itself, using parent class or implemented interfaces. 

Also, arguments may be passed at instantiation time, unlike with named-class definition, where those arguments are passed when calling ``new``, not when defining the class.


.. code-block:: php
   
   <?php
   	interface i {}
   	function foo(i $a) {}
   	
   	$a = new class () implements i {};
   	
   	foo($a);
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.anonymous.php>`__

See also `PHP Anonymous Class <https://www.phptutorial.net/php-oop/php-anonymous-class/>`_, `PHP 7.0 - Anonymous Classes <https://blog.programster.org/php7-0-anonymous-classes>`_

Related : :ref:`Closure <closure>`
