.. _conditional-structure:
.. meta::
	:description:
		Conditional Structures: Conditional structures are instructions which run different code, based on a condition.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Conditional Structures
	:twitter:description: Conditional Structures: Conditional structures are instructions which run different code, based on a condition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Conditional Structures
	:og:type: article
	:og:description: Conditional structures are instructions which run different code, based on a condition
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/conditional-structure.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Conditional Structures","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Conditional structures are instructions which run different code, based on a condition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Conditional Structures.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Conditional Structures
----------------------

Conditional structures are instructions which run different code, based on a condition. 

This includes if-elsif-then, switch(), match(), the ternary operators `? ... :` and `?:` and the Coalesce operator `??`.



.. code-block:: php
   
   <?php
   
   if (!function_exists('foo')) {
       function foo() {
           // doSomething
       }
   }
   
   ?>


Related : :ref:`Switch <switch>`, :ref:`Match <match>`, :ref:`If Then Else <if-then>`, :ref:`Coalesce Operator <coalesce>`, :ref:`Ternary Operator <ternary-operator>`
