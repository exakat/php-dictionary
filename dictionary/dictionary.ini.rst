.. _dictionary:
.. meta::
	:description:
		Dictionary: A dictionary is a data structure that holds a collection of values with a unique identifier.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dictionary
	:twitter:description: Dictionary: A dictionary is a data structure that holds a collection of values with a unique identifier
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dictionary
	:og:type: article
	:og:description: A dictionary is a data structure that holds a collection of values with a unique identifier
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dictionary.ini.html
	:og:locale: en


Dictionary
----------

A dictionary is a data structure that holds a collection of values with a unique identifier. Each identifier is a integer or a string and may be other types in rarer occasions. The related values may be of any type. 

In PHP, a dictionary structure relies often on the array data structure. 


.. code-block:: php
   
   <?php
   
   $dictionary = array('a' => 'blue',
   					'b' => 'pink',
   					'c' => array('green', 'yellow'),
   					);
   
   ?>

