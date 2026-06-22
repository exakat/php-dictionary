.. _anonymous-constant:
.. meta::
	:description:
		Anonymous Constant: A constant may be anonymous.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Anonymous Constant
	:twitter:description: Anonymous Constant: A constant may be anonymous
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Anonymous Constant
	:og:type: article
	:og:description: A constant may be anonymous
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/anonymous-constant.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Anonymous Constant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:30 +0000","dateModified":"Fri, 19 Jun 2026 21:24:30 +0000","description":"A constant may be anonymous","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Anonymous Constant.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Anonymous Constant
------------------

A constant may be anonymous. In that case, it is reduced to its value, and it is a literal. 

There is no explicit code for an anonymous constant: it is the simple application of the concept to an existing structure.

.. code-block:: php
   
   <?php
   
       // a constant
       const A = 'abc';
       
       // an anonymous constant
       'def';
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Literal_(computer_programming)>`__

Related : :ref:`Anonymous <anonymous>`, :ref:`Constants <constant>`, :ref:`Static Constant <class-constant>`
