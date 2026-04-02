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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Dollar \/","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 27 Mar 2026 15:20:07 +0000","dateModified":"Fri, 27 Mar 2026 15:20:07 +0000","description":"``$`` is character, used in various situations: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dollar \/.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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


`Documentation <https://www.php.net/manual/en/language.variables.variable.php>`__

See also https://medium.com/the-code-compass/why-does-php-use-the-sign-for-variables-c2c233f59991, https://marianposaceanu.com/articles/programming-archaeology-phps-dollar-sigil

Related : :ref:`Interpolation <interpolation>`, :ref:`Variables <variable>`, :ref:`Variable Variables <variable-variable>`
