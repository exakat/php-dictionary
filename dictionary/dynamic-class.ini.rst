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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Dynamic Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"A dynamic class is a class whose fully qualified name is defined at execution time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dynamic Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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
