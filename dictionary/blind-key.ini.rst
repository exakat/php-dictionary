.. _blind-variable:
.. _blind-key:
.. meta::
	:description:
		Blind Variable: A blind variable is a variable that is needed in an expression, but doesn't carry much semantic value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Blind Variable
	:twitter:description: Blind Variable: A blind variable is a variable that is needed in an expression, but doesn't carry much semantic value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Blind Variable
	:og:type: article
	:og:description: A blind variable is a variable that is needed in an expression, but doesn't carry much semantic value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/blind-variable.ini.html
	:og:locale: en


Blind Variable
--------------

A blind variable is a variable that is needed in an expression, but doesn't carry much semantic value. This is the case in loops, where the local variable is needed for the processing of each element, but is often a generic name.

Blind variables are defined in the host structure. 

Blind variables are expected to be used only within their structure, although they do exist beyond. 


.. code-block:: php
   
   <?php
   
   // $key and $value are blind variables
   foreach(source() as $key => $value) {
   	doSomething($key, $value);
   }
   
   
   // standard loop syntax
   for($i = 0; $i < 10; ++$i) {
   	doSomething($i);
   }
   
   ?>

