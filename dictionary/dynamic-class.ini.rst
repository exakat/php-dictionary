.. _dynamic-class:
.. meta::
	:description:
		Dynamic Class: A dynamic class is a class whose fully qualified name is defined at execution time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dynamic Class
	:twitter:description: Dynamic Class: A dynamic class is a class whose fully qualified name is defined at execution time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dynamic Class
	:og:type: article
	:og:description: A dynamic class is a class whose fully qualified name is defined at execution time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dynamic-class.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Dynamic Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 11:11:38 +0000","dateModified":"Mon, 26 Jan 2026 11:11:38 +0000","description":"A dynamic class is a class whose fully qualified name is defined at execution time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dynamic Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Dynamic Class
-------------

A dynamic class is a class whose fully qualified name is defined at execution time. 

This is convenient for module systems, where the actual class is named from an external configuration.

The name of the class is a string. It may be also accessed with the ``::class`` operator. 

For a dynamic call, the name of the class may or may not start with a ``\`` char: both cases work.

Dynamic class may be used with static calls, for class constants, enum cases, static method or static property. It may also be used with the instantiation operator ``new``.

It is also possible to use an object of the same class for all these calls.

.. code-block:: php
   
   <?php
   
   class AB {}
   
   class AC {}
   
   $name = '\A'.(rand(0, 1) ? 'B' : 'C');
   
   $object = new $name;    // creates a class of AB or AC
   $object2 = new $object; // creates another object of AB or AC, same as $object
   
   ?>


Related : :ref:`new <new>`, 
