.. _is_a:
.. meta::
	:description:
		is_a(): ``is_a()`` is a PHP native function, that checks if an object is of a specific class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: is_a()
	:twitter:description: is_a(): ``is_a()`` is a PHP native function, that checks if an object is of a specific class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: is_a()
	:og:type: article
	:og:description: ``is_a()`` is a PHP native function, that checks if an object is of a specific class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/is_a.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"is_a()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 19 Jan 2026 14:11:17 +0000","dateModified":"Mon, 19 Jan 2026 14:11:17 +0000","description":"``is_a()`` is a PHP native function, that checks if an object is of a specific class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/is_a().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


is_a()
------

``is_a()`` is a PHP native function, that checks if an object is of a specific class. 

Usually, ``is_a()`` is replaced by ``instanceof``, which is a PHP operator. The function might be needed to create a closure, though.

.. code-block:: php
   
   <?php
   
   $object = (object) ['a' => 1];
   
   var_dump(is_a($object, stdClass::class));
   
   ?>


`Documentation <https://www.php.net/manual/en/function.is-a.php>`__
