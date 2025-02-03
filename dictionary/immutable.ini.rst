.. _immutable:
.. _immutability:
.. meta::
	:description:
		Immutable: An immutable object is an object that can't be changed.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Immutable
	:twitter:description: Immutable: An immutable object is an object that can't be changed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Immutable
	:og:type: article
	:og:description: An immutable object is an object that can't be changed
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/immutable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Immutable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"An immutable object is an object that can't be changed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Immutable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Immutable
---------

An immutable object is an object that can't be changed. It may be created, read and cloned. On the other hand, a mutable object may change when one of its method is called, even if this is not visible from the outside.

Immutable objects are thread-safe. 

Immutable objects often return a clone version of themselves, after modification. 


.. code-block:: php
   
   
   <?php
   
   class x {
   	private $x = 0;
   	
   	function inc() : self {
   		$return = clone $this;
   		$return->x +=1;
   		
   		return $return;
   	}
   }
   
   $a = new x();
   $b = $a->inc();
   
   // $a and $b are two distinct objects
   
   ?>
   


`Documentation <https://en.wikipedia.org/wiki/Immutable_object>`__

See also `The case for immutability <https://dev.to/timoschinkel/the-case-for-immutability-1gfa>`_, `Elegant immutable object pattern in PHP <https://dev.to/hbgl/elegant-immutable-object-pattern-in-php-1dg3>`_
