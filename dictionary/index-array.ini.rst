.. _index-array:
.. _key:
.. meta::
	:description:
		Index For Arrays: A index is the identifier of an specific element in an array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Index For Arrays
	:twitter:description: Index For Arrays: A index is the identifier of an specific element in an array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Index For Arrays
	:og:type: article
	:og:description: A index is the identifier of an specific element in an array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/index-array.ini.html
	:og:locale: en


Index For Arrays
----------------

A index is the identifier of an specific element in an array. They may automatically generated, by simply omitting them at creation time. 

PHP index may be integers or strings only. Other data types generate an error or a type conversion. For example, floats are turned into integer. integer-shaped strings will also be turned into integer.

PHP index start at 0. They may be automatically assigned by appending a new value with the `[]` operator : then, they use the greatest available index + 1.


.. code-block:: php
   
   
   <?php
       $array = ['a', 'b', 'c'];
       
       echo $array[0];
   ?>
   


`Documentation <https://www.php.net/manual/en/language.types.array.php>`__

See also `PHP: Frankenstein arrays <https://vazaha.blog/en/9/php-frankenstein-arrays>`_, `Filtering an array by keys in PHP <https://yellowduck.be/posts/filtering-an-array-by-keys-in-php>`_

Related : :ref:`Array <array>`
