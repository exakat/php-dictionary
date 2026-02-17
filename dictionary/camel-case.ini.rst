.. _camel-case:
.. meta::
	:description:
		Camel Case: Camel case, also written ``camelCase`` is a way of writing names without spaces, where:.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Camel Case
	:twitter:description: Camel Case: Camel case, also written ``camelCase`` is a way of writing names without spaces, where:
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Camel Case
	:og:type: article
	:og:description: Camel case, also written ``camelCase`` is a way of writing names without spaces, where:
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/camel-case.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Camel Case","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 13 Feb 2026 12:37:18 +0000","dateModified":"Fri, 13 Feb 2026 12:37:18 +0000","description":"Camel case, also written ``camelCase`` is a way of writing names without spaces, where:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Camel Case.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Camel Case
----------

Camel case, also written ``camelCase`` is a way of writing names without spaces, where:

+ the first word starts with a lowercase letter
+ each following word starts with an uppercase letter

The capital letters create ``humps`` like a camel's back: this is the origin of the name.

Camel case is often used for method and variable names. Class names, on the other hand, use Pascal case.


.. code-block:: php
   
   <?php
   
   function calculatePrice(int $price): int {
       return $price * SALE_TAX_RATE;
   }
   
   ?>


`Documentation <https://stringcase.org/cases/camel/>`__

See also https://stringcase.org/

Related : , , 
