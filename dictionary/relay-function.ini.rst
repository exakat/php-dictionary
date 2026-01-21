.. _relay-function:
.. _relay-method:
.. meta::
	:description:
		Relay Function: A relay function, or a relay method, is a function that calls another function, with the same arguments.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Relay Function
	:twitter:description: Relay Function: A relay function, or a relay method, is a function that calls another function, with the same arguments
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Relay Function
	:og:type: article
	:og:description: A relay function, or a relay method, is a function that calls another function, with the same arguments
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/relay-function.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Relay Function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:48:22 +0000","dateModified":"Wed, 21 Jan 2026 08:48:22 +0000","description":"A relay function, or a relay method, is a function that calls another function, with the same arguments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Relay Function.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Relay Function
--------------

A relay function, or a relay method, is a function that calls another function, with the same arguments. It is merely relaying the arguments from one to the other.

A relay function also returns the value of the relayed function.

A relay function does not add any added value over the other function, except a renaming of the feature.

Relay functions may be nested several levels, depending on the situation.

.. code-block:: php
   
   <?php
   
   function foo($a) {
       return goo($a);
   }
   
   function goo($a) {
       return hoo($a);
   }
   
   function hoo($a) {
       return doSomething();
   }
   
   ?>

