.. _propagation:
.. meta::
	:description:
		Propagation: Propagation is the consequence of one piece of code, that applies to another part of the code, via a dependency.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Propagation
	:twitter:description: Propagation: Propagation is the consequence of one piece of code, that applies to another part of the code, via a dependency
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Propagation
	:og:type: article
	:og:description: Propagation is the consequence of one piece of code, that applies to another part of the code, via a dependency
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/propagation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Propagation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 06:45:26 +0000","dateModified":"Thu, 22 Jan 2026 06:45:26 +0000","description":"Propagation is the consequence of one piece of code, that applies to another part of the code, via a dependency","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Propagation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Propagation
-----------

Propagation is the consequence of one piece of code, that applies to another part of the code, via a dependency. 

In the example code, ``foo()`` and ``goo()`` are not typed, with arguments nor with return. Yet, the final call to ``strlen()`` means that both parameters must be ``string`` and both their return type will be ``int``. The types propagated from ``strlen()`` to the other functions.

Propagation is visible with types, as illustrated; it also applies to functions that die or use the ``never`` return type; and to unused piece of code, where not using a piece of code renders any called code unused, and, also useless.

Propagation is often silent, and does not yield error. Yet, it implies structure in the code, that makes it difficult to update.

.. code-block:: php
   
   <?php
   
   // type propagation via calls
   function foo($x) {
       goo($x);
   }
   
   function goo($x) {
       hoo($x);
   }
   
   function hoo($x) {
       strlen($x);
   }
   
   // useless function, via lack of usage
   function boo($x) {
       // doSomething
   }
   
   // $result is not used, 
   // so boo() is not used
   $result = boo(1);
   
   ?>


Related : :ref:`Useless <useless>`, :ref:`Type System <type>`, :ref:`Exit <exit>`
