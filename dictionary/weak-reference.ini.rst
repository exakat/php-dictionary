.. _weak-reference:
.. meta::
	:description:
		Weak References: Weak references allow the programmer to retain a reference to an object which does not prevent the object from being destroyed.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Weak References
	:twitter:description: Weak References: Weak references allow the programmer to retain a reference to an object which does not prevent the object from being destroyed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Weak References
	:og:type: article
	:og:description: Weak references allow the programmer to retain a reference to an object which does not prevent the object from being destroyed
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/weak-reference.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Weak References","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 02 May 2025 16:31:46 +0000","dateModified":"Fri, 02 May 2025 16:31:46 +0000","description":"Weak references allow the programmer to retain a reference to an object which does not prevent the object from being destroyed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Weak References.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Weak References
---------------

Weak references allow the programmer to retain a reference to an object which does not prevent the object from being destroyed. They are useful for implementing cache like structures. 

.. code-block:: php
   
   <?php
   
   $obj = new stdClass;
   $weakref = WeakReference::create($obj);
   
   var_dump($weakref->get());
   unset($obj);
   
   var_dump($weakref->get());
   // NULL
   
   ?>


`Documentation <https://www.php.net/manual/en/class.weakreference.php>`__

See also `PHP 8.0 feature focus: Weak maps <https://platform.sh/blog/php-80-feature-focus-weak-maps/>`_, `WeakReferences <https://www.cmuir.co.nz/post/weakreferences/>`_

Related : :ref:`References <reference>`

Added in PHP 7.4
