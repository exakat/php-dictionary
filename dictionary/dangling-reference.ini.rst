.. _dangling-reference:
.. meta::
	:description:
		Dangling Reference: In a foreach loop, a variable is used for looping through the array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dangling Reference
	:twitter:description: Dangling Reference: In a foreach loop, a variable is used for looping through the array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dangling Reference
	:og:type: article
	:og:description: In a foreach loop, a variable is used for looping through the array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dangling-reference.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Dangling Reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 28 Jul 2025 17:03:23 +0000","dateModified":"Mon, 28 Jul 2025 17:03:23 +0000","description":"In a foreach loop, a variable is used for looping through the array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dangling Reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Dangling Reference
------------------

In a foreach loop, a variable is used for looping through the array. When this variable is configured as a reference, the reference survives after the end of the loop. When this variable is reused later, it applies to the last element of the array and overwrites its value.

This doesn't happen when the second loop doesn't use a reference. 

It is recommended to unset the referenced variable, after the loop. It destroys the reference, not the value.


.. code-block:: php
   
   <?php
   
   $array = ['a', 'b', 'c'];
   
   foreach($array as &$x) { 
   	// doSomething() or even do nothing! 
   }
   
   // second loop, no reference
   foreach($array as $x) { 
   	// doSomething() or even do nothing! 
   }
   
   var_dump($array);
   $array = ['a', 'b', 'b'];
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php>`__

See also `No Dangling References <https://github.com/dseguy/clearPHP/blob/master/rules/no-dangling-reference.md>`_

Related : :ref:`Loops <loop>`, :ref:`References <reference>`
