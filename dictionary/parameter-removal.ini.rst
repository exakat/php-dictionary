.. _parameter-removal:
.. meta::
	:description:
		Parameter Removal: Parameter removal is the operation to remove a parameter in a method's signature.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Parameter Removal
	:twitter:description: Parameter Removal: Parameter removal is the operation to remove a parameter in a method's signature
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Parameter Removal
	:og:type: article
	:og:description: Parameter removal is the operation to remove a parameter in a method's signature
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/parameter-removal.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Parameter Removal","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:53:06 +0000","dateModified":"Wed, 21 Jan 2026 08:53:06 +0000","description":"Parameter removal is the operation to remove a parameter in a method's signature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Parameter Removal.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Parameter Removal
-----------------

Parameter removal is the operation to remove a parameter in a method's signature. 

This may happen in two ways: 

+ Between versions of the code. A method may see one of its parameter being deprecated then removed.
+ In a function relay, where the method doesn't transmit all its incoming parameters to the next.

.. code-block:: php
   
   <?php
   
   // get_defined_functions's only paramter was removed in PHP 8.4
   $list = get_defined_functions(false); 
   
   class x {
   	public function foo($a, $b) {
   		// $b is ignored, and set to a fixed value.
   		// $b is actually removed for 'public' usage
   		$this->goo($a, 2);
   	}
   	
   	private function goo($a, $b = 1) {
   		// do Something
   	}
   }
   ?>

