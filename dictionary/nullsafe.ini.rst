.. _nullsafe:
.. meta::
	:description:
		Nullsafe: A nullsafe operator is able to carry a function or fail graciously to `null`.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Nullsafe
	:twitter:description: Nullsafe: A nullsafe operator is able to carry a function or fail graciously to `null`
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Nullsafe
	:og:type: article
	:og:description: A nullsafe operator is able to carry a function or fail graciously to `null`
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/nullsafe.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Nullsafe","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:21:26 +0000","dateModified":"Tue, 20 Jan 2026 07:21:26 +0000","description":"A nullsafe operator is able to carry a function or fail graciously to `null`","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Nullsafe.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Nullsafe
--------

A nullsafe operator is able to carry a function or fail graciously to `null`. In particular, it won't stop the execution with a fatal error. 

There are two PHP operators that are nullsafe : 

+ nullsafe object operator `?->`
+ nullsafe-coalesce `??`.

.. code-block:: php
   
   <?php
   
   $a = foo();
   
   $b = $a?->method();
   
   $b = $a?->chain1?->chain2?->method();
   
   // foo may return null
   function foo() : ?A { }
   
   ?>


See also https://medium.com/@prevailexcellent/mastering-null-safety-in-php-8-a-comprehensive-guide-to-using-the-null-safe-operator-47835ba1140b

Related : :ref:`Object Operator -> <object-operator>`, :ref:`Coalesce Operator <coalesce>`
