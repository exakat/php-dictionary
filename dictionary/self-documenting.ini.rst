.. _self-documenting:
.. meta::
	:description:
		Self-documenting: A self-documenting piece of code may be understood without the need to read the documentation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Self-documenting
	:twitter:description: Self-documenting: A self-documenting piece of code may be understood without the need to read the documentation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Self-documenting
	:og:type: article
	:og:description: A self-documenting piece of code may be understood without the need to read the documentation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/self-documenting.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Self-documenting","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 20 Mar 2026 06:47:23 +0000","dateModified":"Fri, 20 Mar 2026 06:47:23 +0000","description":"A self-documenting piece of code may be understood without the need to read the documentation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Self-documenting.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Self-documenting
----------------

A self-documenting piece of code may be understood without the need to read the documentation. In particular, names are explicit and related to the application goals, and the methods and techniques are simple to relate to.

Self-documenting prevents developers to write external documentation: this never fall out of synchronisation, as the code is the documentation itself. It also saves switching context to collect extra information.

Self-documenting relies on the reader's knowledge: one need to have background know-how to confirm the code does what it means. 

.. code-block:: php
   
   <?php
   
   function multiplication(int $left, int $right): int {
       $return = $left * $right;
       
       // usage of is_float() is not obvious, or self-documenting
       if (is_float($return)) {
           throw new OverflowException('The result is too big.');
       }
       
       return $return;
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Self-documenting_code>`__

See also https://www.sitepoint.com/keeping-php-code-well-documented/

Related : :ref:`Docblock <docblock>`
