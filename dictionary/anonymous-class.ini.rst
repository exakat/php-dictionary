.. _anonymous-class:
.. meta::
	:description:
		Anonymous Class: A class may be instantiated, without defining a class name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Anonymous Class
	:twitter:description: Anonymous Class: A class may be instantiated, without defining a class name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Anonymous Class
	:og:type: article
	:og:description: A class may be instantiated, without defining a class name
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/anonymous-class.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Anonymous Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"A class may be instantiated, without defining a class name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Anonymous Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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
