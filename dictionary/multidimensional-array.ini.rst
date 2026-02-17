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
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Multidimensional Array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 16 Feb 2026 21:28:15 +0000","dateModified":"Mon, 16 Feb 2026 21:28:15 +0000","description":"An array inside an array is called a multidimensional array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Multidimensional Array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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
