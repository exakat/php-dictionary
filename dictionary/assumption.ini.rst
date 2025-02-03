.. _assumption:
.. meta::
	:description:
		Assumption: An assumption is a piece of code that makes use of knowledge that is not visible in the source.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Assumption
	:twitter:description: Assumption: An assumption is a piece of code that makes use of knowledge that is not visible in the source
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Assumption
	:og:type: article
	:og:description: An assumption is a piece of code that makes use of knowledge that is not visible in the source
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/assumption.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Assumption","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"An assumption is a piece of code that makes use of knowledge that is not visible in the source","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Assumption.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Assumption
----------

An assumption is a piece of code that makes use of knowledge that is not visible in the source. 

Assumptions are often related to arrays : after checking that a variable is of type array, some specific index are used, while there is not guarantee that they are available.

Assumptions may apply to any type of data. 

Assumptions are characterized by a lact of checks, before or after. They are based on code discipline (actual or expected), and hard rules that are thought to never be violated: ``this never happens``. 

Assumptions leads to faster code, and faster coding working. It also yield errors later, when the assumptions rules are violated.

Assumptions may be upgraded to assertions, by adding an explicit check on the situation. 

.. code-block:: php
   
   
   <?php
   
   function foo($o) {
   	if ($o instanceof A) {
   		print $o->getName();
   	} else {
   		// if $o is not an object of type A, then it is an array. Where does this come from? 
   		print $o['name'];
   
   		// if $o is an array, is 'name' always available?
   		
   	}
   }
   
   ?>
   


See also `From assumptions to assertions <https://rskuipers.com/entry/from-assumptions-to-assertions>`_

Related : :ref:`Assertions <assertion>`
