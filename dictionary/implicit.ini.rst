.. _implicit:
.. meta::
	:description:
		Implicit: A feature is implicit when it is available, yet not explicitly visible.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Implicit
	:twitter:description: Implicit: A feature is implicit when it is available, yet not explicitly visible
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Implicit
	:og:type: article
	:og:description: A feature is implicit when it is available, yet not explicitly visible
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/implicit.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Implicit","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 19 Jan 2026 14:11:17 +0000","dateModified":"Mon, 19 Jan 2026 14:11:17 +0000","description":"A feature is implicit when it is available, yet not explicitly visible","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Implicit.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Implicit
--------

A feature is implicit when it is available, yet not explicitly visible. 

For example, objects are passed by reference to functions: any change applied to that object, inside the function, is also available in the calling context.

Until PHP 8.4, it was possible to assign ``null`` as a default value to any typed parameter: ``null`` was implicitely an accepted type for that value. 

The contrary to implicit is explicit. This notion share similarities with hidden features and collateral features.

.. code-block:: php
   
   <?php
   
   function foo($object) {
       $object->p = 1;
   }
   
   $object = new stdClass();
   foo($object);
   echo $object->p; 
   
   ?>


Related : :ref:`Explicit <explicit>`
