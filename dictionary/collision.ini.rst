.. _collision:
.. _name-collision:
.. meta::
	:description:
		Collision: A collision happens when two entities of the same type have two distinct definitions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Collision
	:twitter:description: Collision: A collision happens when two entities of the same type have two distinct definitions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Collision
	:og:type: article
	:og:description: A collision happens when two entities of the same type have two distinct definitions
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/collision.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Collision","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 12 Feb 2026 21:45:00 +0000","dateModified":"Thu, 12 Feb 2026 21:45:00 +0000","description":"A collision happens when two entities of the same type have two distinct definitions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Collision.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Collision
---------

A collision happens when two entities of the same type have two distinct definitions. This usually leads to a PHP Fatal error, as the engine can't tell the difference between the two structures.

Note that structures of different types may have the same name, although it might lead to ambiguities. 

Structures with the same name, and defined in different namespaces are possible. The naming collision may happen at import time (a.k.a. with a use expression), and may be solved with an alias. 

Some structures resolve collisions by simply overwriting the previous one: this is the case for variables.

.. code-block:: php
   
   <?php
   
   function foo() {}
   
   // name collision: no two functions can have the same name
   // name collision: function names are case insensitive, so foo === FOO
   // function FOO() {} 
   
   // FOO as a constant and FOO as a function are distinct elements. 
   const FOO = 1;
   
   // variable collisions is silent : the variable's value is simply changed
   $a = 1;
   foreach($array as $a) {
   	print $a; // may print a different value than 1
   }
   
   ?>


Related : :ref:`Namespaces <namespace>`
