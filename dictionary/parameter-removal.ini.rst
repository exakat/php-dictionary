.. _parameter-removal:
.. meta::
	:description:
		Parameter Removal: Parameter removal is the operation to remove a parameter in a method's signature.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Parameter Removal
	:twitter:description: Parameter Removal: Parameter removal is the operation to remove a parameter in a method's signature
	:twitter:creator: @exakat
	:og:title: Parameter Removal
	:og:type: article
	:og:description: Parameter removal is the operation to remove a parameter in a method's signature
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/parameter-removal.ini.html
	:og:locale: en


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

