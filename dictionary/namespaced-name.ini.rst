.. _namespaced-name:
.. meta::
	:description:
		Namespaced Name: A namespaced name is a name that includes a ``\`` character.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Namespaced Name
	:twitter:description: Namespaced Name: A namespaced name is a name that includes a ``\`` character
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Namespaced Name
	:og:type: article
	:og:description: A namespaced name is a name that includes a ``\`` character
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/namespaced-name.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Namespaced Name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 19 Feb 2026 22:26:55 +0000","dateModified":"Thu, 19 Feb 2026 22:26:55 +0000","description":"A namespaced name is a name that includes a ``\\`` character","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Namespaced Name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Namespaced Name
---------------

A namespaced name is a name that includes a ``\`` character.

A namespaced name may be relative or absolute. 

Namespaced names are sometimes reported in errors.

.. code-block:: php
   
   <?php
   
   namespace B\A {
       class C {}
   }
   
   namespace B {
       use A\B as C;
       //import 
       new C();
   
       // relative name
       new A\C(); // actually calls B \ A\C
   }
   
   ?>


Related : :ref:`Import <import>`, :ref:`Absolute Name <absolute-name>`, :ref:`Relative Name <relative-name>`
