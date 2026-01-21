.. _invariant:
.. meta::
	:description:
		Type Invariant: A type invariant is a data container whose type can't change between a parent class and a child class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Type Invariant
	:twitter:description: Type Invariant: A type invariant is a data container whose type can't change between a parent class and a child class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Type Invariant
	:og:type: article
	:og:description: A type invariant is a data container whose type can't change between a parent class and a child class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/invariant.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Type Invariant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 19 Jan 2026 14:11:17 +0000","dateModified":"Mon, 19 Jan 2026 14:11:17 +0000","description":"A type invariant is a data container whose type can't change between a parent class and a child class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Type Invariant.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Type Invariant
--------------

A type invariant is a data container whose type can't change between a parent class and a child class. This is the case of properties.

The child type must be a subtype of the parent type and the parent type must be a subtype of the child type. This implies that the types are equal.

Invariance is the third type of variance, with contravariance and covariance.

.. code-block:: php
   
   <?php
   
   class p {
   	protected string $p;
   }
   
   class q extends p {
   	// same a above
   	protected string $p;
   }
   
   ?>


See also https://www.npopov.com/2021/11/08/Type-variance-in-PHP.html

Related : :ref:`Covariance <type-covariance>`, :ref:`Contravariance <type-contravariance>`
