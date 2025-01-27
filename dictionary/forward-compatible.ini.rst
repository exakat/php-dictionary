.. _forward-compatible:
.. meta::
	:description:
		Forward Compatible: A forward compatible feature is a feature that will be available in future versions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Forward Compatible
	:twitter:description: Forward Compatible: A forward compatible feature is a feature that will be available in future versions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Forward Compatible
	:og:type: article
	:og:description: A forward compatible feature is a feature that will be available in future versions
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/forward-compatible.ini.html
	:og:locale: en


Forward Compatible
------------------

A forward compatible feature is a feature that will be available in future versions. In particular, it might be couple with a forward incompatible feature, which will be dropped, while the forward compatible feature will stay. 

For example, PHP allows the incrementation of non-numeric strings. This feature migth be deprecated, and could be removed in a future version (not defined at the time of writing). The functions ``str_increment()`` and ``str_decrement()`` were introduced in PHP 8.3. They can replace the current feature, and they will be available in the future versions, making them forward compatible. 


.. code-block:: php
   
   <?php
   
   $a = 't';
   echo ++$a; //u
   
   $a = str_increment($a);
   echo $a; // v
   
   ?>

