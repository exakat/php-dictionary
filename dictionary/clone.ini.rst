.. _clone:
.. meta::
	:description:
		Clone: Clone makes a duplicate of an object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Clone
	:twitter:description: Clone: Clone makes a duplicate of an object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Clone
	:og:type: article
	:og:description: Clone makes a duplicate of an object
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/clone.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Clone","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 25 Jan 2026 20:46:15 +0000","dateModified":"Sun, 25 Jan 2026 20:46:15 +0000","description":"Clone makes a duplicate of an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Clone.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Clone
-----

Clone makes a duplicate of an object.

PHP makes a shallow clone : it will only make a copy of the scalars properties, and it will keep the reference to any object untouched. This means that objects are shared between an object and its clone. 

To perform a deep clone, aka to clone an object and its referenced properties, there is the magic method __clone().

.. code-block:: php
   
   <?php
   
   class x { }
   
   // instantiation
   $x = new x;
   
   // cloning
   $y = clone $x;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.cloning.php>`__

See also https://doeken.org/blog/what-happens-when-we-clone, https://www.php.net/manual/en/language.oop5.cloning.php, https://linuxhint.com/cloning_objects_php/, https://jolicode.com/blog/php-clone-all-the-things

Related : :ref:`Shallow Clone <shallow-clone>`, :ref:`Deep Clone <deep-clone>`

Added in PHP 4.0+
