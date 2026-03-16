.. _dollar:
.. _$:
.. meta::
	:description:
		Dollar /: ``$`` is character, used in various situations: .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dollar /
	:twitter:description: Dollar /: ``$`` is character, used in various situations: 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dollar /
	:og:type: article
	:og:description: ``$`` is character, used in various situations: 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dollar.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Dollar \/","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 08 Mar 2026 21:14:41 +0000","dateModified":"Sun, 08 Mar 2026 21:14:41 +0000","description":"``$`` is character, used in various situations: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dollar \/.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Dollar /
--------

``$`` is character, used in various situations: 

+ As the first character of a variable
+ As an operator, for variable variables.

When associated, PHP and ``$`` often leads to the conversion rate of dollars to Philipini Pesos.

.. code-block:: php
   
   <?php
   
   $a = 'b';
   $b = 'c';
   
   echo $$a; // 'c'
   
   echo $\{$a}; // C
   
   ?>


Related : :ref:`Interpolation <interpolation>`, :ref:`Variables <variable>`, :ref:`Variable Variables <variable-variable>`
