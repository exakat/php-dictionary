.. _method-collision:
.. meta::
	:description:
		Method Collision: A method collision happens when a trait is imported in a class, and it holds a method that already exists in the class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Method Collision
	:twitter:description: Method Collision: A method collision happens when a trait is imported in a class, and it holds a method that already exists in the class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Method Collision
	:og:type: article
	:og:description: A method collision happens when a trait is imported in a class, and it holds a method that already exists in the class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/method-collision.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Method Collision","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Nov 2025 08:38:45 +0000","dateModified":"Tue, 11 Nov 2025 08:38:45 +0000","description":"A method collision happens when a trait is imported in a class, and it holds a method that already exists in the class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Method Collision.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Method Collision
----------------

A method collision happens when a trait is imported in a class, and it holds a method that already exists in the class.

To solve such a collision, the code must use ``insteadof`` and ``use`` keywords, in the ``use`` expression.

There is no collision between the imported trait and the parent of the class, as the trait has priority over the parents. There is also no collision when a trait import another trait: the last method has precedence.


.. code-block:: php
   
   <?php
   
   trait t {
       function foo() { echo __METHOD__; }
   }
   
   trait u {
       function foo() { echo __METHOD__; }
   }
   
   class c {
       use u, t {
           use t::foo instead of u;
       }
   }
   
   new c()->goo();


`Documentation <https://www.php.net/manual/en/language.oop5.traits.php#language.oop5.traits.conflict>`__
