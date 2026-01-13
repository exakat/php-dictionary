.. _relative-name:
.. meta::
	:description:
		Relative Name: A relative name is a name that is completed by the current namespace to lead to the definition of the referenced structure.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Relative Name
	:twitter:description: Relative Name: A relative name is a name that is completed by the current namespace to lead to the definition of the referenced structure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Relative Name
	:og:type: article
	:og:description: A relative name is a name that is completed by the current namespace to lead to the definition of the referenced structure
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/relative-name.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Relative Name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 12:43:29 +0000","dateModified":"Fri, 04 Jul 2025 12:43:29 +0000","description":"A relative name is a name that is completed by the current namespace to lead to the definition of the referenced structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Relative Name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Relative Name
-------------

A relative name is a name that is completed by the current namespace to lead to the definition of the referenced structure.

Relative names usually start without the leading ``\``. In the case of names with a single name, it is either a relative name, or a local import.

The opposite of relative name is absolute name.

.. code-block:: php
   
   <?php
   
   namespace B\A {
       function B() {}
       
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


Related : :ref:`Import <import>`, :ref:`Absolute Name <absolute-name>`
