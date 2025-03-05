.. _useless:
.. meta::
	:description:
		Useless: Some piece of code is useless when it doesn't bring any feature to the code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Useless
	:twitter:description: Useless: Some piece of code is useless when it doesn't bring any feature to the code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Useless
	:og:type: article
	:og:description: Some piece of code is useless when it doesn't bring any feature to the code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/useless.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Useless","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"Some piece of code is useless when it doesn't bring any feature to the code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Useless.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Useless
-------

Some piece of code is useless when it doesn't bring any feature to the code. 

It may be the case of double checks, where a characterstics is checked twice in a row; or when the same operation is repeated multiple times, yet is idempotent.


.. code-block:: php
   
   <?php
   
   function foo(array $array) {
       if (!empty($array)) {
           // foreach() checks automatically the array for elements, and skips the loop when the array is empty.
           foreach($array as $a) {
               doSomething(); 
           }
       }
   }
   
   ?>

