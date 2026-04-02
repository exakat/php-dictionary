.. _snake-case:
.. meta::
	:description:
		Snake Case: Snake case, also written ``snake_case`` is a way of writing names without spaces, where:.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Snake Case
	:twitter:description: Snake Case: Snake case, also written ``snake_case`` is a way of writing names without spaces, where:
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Snake Case
	:og:type: article
	:og:description: Snake case, also written ``snake_case`` is a way of writing names without spaces, where:
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/snake-case.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Snake Case","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 27 Mar 2026 15:35:59 +0000","dateModified":"Fri, 27 Mar 2026 15:35:59 +0000","description":"Snake case, also written ``snake_case`` is a way of writing names without spaces, where:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Snake Case.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Snake Case
----------

Snake case, also written ``snake_case`` is a way of writing names without spaces, where:

+ all the letters are set to lower case
+ each word is separated from the other by an underscore

The underscore letters create ``humps`` like a camel's back: this is the origin of the name.

Snake case is often used for PHP native functions. 


.. code-block:: php
   
   <?php
   
   function to_lower(string $string): int {
       // PHP native function
       return mb_strtolower($string);
   }
   
   ?>


`Documentation <https://stringcase.org/cases/snake/>`__

See also https://stringcase.org/

Related : :ref:`Pascal Case <pascal-case>`, :ref:`Camel Case <camel-case>`, :ref:`Constant Case <constant-case>`, :ref:`Underscore <underscore>`
