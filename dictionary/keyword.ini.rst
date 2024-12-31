.. _keyword:
.. meta::
	:description:
		Keyword: PHP has a list of keywords, which are also called reserved words.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Keyword
	:twitter:description: Keyword: PHP has a list of keywords, which are also called reserved words
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Keyword
	:og:type: article
	:og:description: PHP has a list of keywords, which are also called reserved words
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/keyword.ini.html
	:og:locale: en


Keyword
-------

PHP has a list of keywords, which are also called reserved words. Those are names used with some functions or operators. 

Keywords are not allowed in function, constant, class, interface, enum and trait names. They are allowed in method, properties, variables and class constant names.

While legit, it is usually recommended to avoid using PHP keywords as identifiers, so as to prevent confusion. 


.. code-block:: php
   
   <?php
   
   class myNamespace {
   	function array() {
   		return array();
   	}
   }
   
   print_r((new myNamespace)->array());
   
   ?>

