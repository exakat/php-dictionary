.. _multidimensional-array:
.. meta::
	:description:
		Multidimensional Array: An array inside an array is called a multidimensional array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Multidimensional Array
	:twitter:description: Multidimensional Array: An array inside an array is called a multidimensional array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Multidimensional Array
	:og:type: article
	:og:description: An array inside an array is called a multidimensional array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/multidimensional-array.ini.html
	:og:locale: en


Multidimensional Array
----------------------

An array inside an array is called a multidimensional array. Dimensions may be created as many as necessary, by using the square brackets.

PHP creates the arrays on the fly. When the intermediate array are undefined, PHP will add them in the structure.


.. code-block:: php
   
   <?php
   
   $a = array(1 => array('a' => 1));
   
   $a[1]["b"]['c'] = 3;
   
   print_r($a);
   
   /*
   Array
   (
       [1] => Array
           (
               [a] => 1
               [b] => Array
                   (
                       [c] => 3
                   )
   
           )
   
   )
   */
   ?>


`Documentation <https://www.php.net/manual/en/function.array.php>`__
