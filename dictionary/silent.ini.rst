.. _silent:
.. _silent-cast:
.. meta::
	:description:
		Silent Behavior: Silent behaviors are expressions that do not raise any error, yet performs a transformation on data, with or without the programmer's knowledge.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Silent Behavior
	:twitter:description: Silent Behavior: Silent behaviors are expressions that do not raise any error, yet performs a transformation on data, with or without the programmer's knowledge
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Silent Behavior
	:og:type: article
	:og:description: Silent behaviors are expressions that do not raise any error, yet performs a transformation on data, with or without the programmer's knowledge
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/silent.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Silent Behavior","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 12:47:20 +0000","dateModified":"Thu, 22 Jan 2026 12:47:20 +0000","description":"Silent behaviors are expressions that do not raise any error, yet performs a transformation on data, with or without the programmer's knowledge","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Silent Behavior.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Silent Behavior
---------------

Silent behaviors are expressions that do not raise any error, yet performs a transformation on data, with or without the programmer's knowledge.

Silent behaviors also describes extra actions that are taken by PHP, without signaling it or making it obvious.

Since they are silent, their usage or absence of usage is never signaled and the code may stay in the repository long before being discovered and removed or fixed.

.. code-block:: php
   
   <?php
   
   // Importing a non existent class
   use Unknown\Namespace\theClass;
   
   // Typing with a non-existent class, or a trait, but still allowing other types
   function foo(UndefinedType|string $t) : \aTrait|string {}
   
   // The whole try catch is now useless.
   try {
   
   } catch (unknownException $e) {}
   
   // null is automatically turned into an int, so 0
   $a = [null => 1];
   echo $a[0]; // displays 1
   
   ?>

