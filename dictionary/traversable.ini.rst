.. _traversable:
.. meta::
	:description:
		Traversable: Traversable is a specific PHP interface that represents an object that can be iterated over.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Traversable
	:twitter:description: Traversable: Traversable is a specific PHP interface that represents an object that can be iterated over
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Traversable
	:og:type: article
	:og:description: Traversable is a specific PHP interface that represents an object that can be iterated over
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/traversable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Traversable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 18 Feb 2026 18:35:17 +0000","dateModified":"Wed, 18 Feb 2026 18:35:17 +0000","description":"Traversable is a specific PHP interface that represents an object that can be iterated over","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Traversable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Traversable
-----------

Traversable is a specific PHP interface that represents an object that can be iterated over.

Traversable is an abstract interface: it cannot be implemented directly, and instead, it must be implemented by either IteratorAggregate or Iterator. 

The traversable interface is used for typing purposes.

.. code-block:: php
   
   <?php
   
   try {
       doSomething();
   } catch (\Traversable $e) {
       print "Some error was raised during processing: ". $e::class;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.traversable.php>`__

See also `Traversable interface in PHP <https://blog.eduonix.com/web-programming-tutorials/traversable-interface-in-php/>`_

Related : :ref:`Exception <exception>`, :ref:`Error <error>`
