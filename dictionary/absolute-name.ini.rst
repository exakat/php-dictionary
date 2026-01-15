.. _absolute-name:
.. meta::
	:description:
		Absolute Name: An absolute name is a name that is independent from the current namespace.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Absolute Name
	:twitter:description: Absolute Name: An absolute name is a name that is independent from the current namespace
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Absolute Name
	:og:type: article
	:og:description: An absolute name is a name that is independent from the current namespace
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/absolute-name.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Absolute Name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 15 Jan 2026 11:04:51 +0000","dateModified":"Thu, 15 Jan 2026 11:04:51 +0000","description":"An absolute name is a name that is independent from the current namespace","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Absolute Name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Absolute Name
-------------

An absolute name is a name that is independent from the current namespace. It is usually identified by the leading ``\`` sign. 

The opposite of relative name is relative name.

.. code-block:: php
   
   <?php
   
   namespace A {
       function B() {}
       
       class C {}
   
   }
   
   namespace B {
       //absolute name to call a function
       \A\B();
       
       //absolute name to create an object
       new \A\C();
   }
   
   ?>


Related : :ref:`Import <import>`, :ref:`Relative Name <relative-name>`
