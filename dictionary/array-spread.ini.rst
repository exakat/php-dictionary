.. _array-spread:
.. meta::
	:description:
		Array Spread: Array spread is the ellipsis operator, applied to an array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array Spread
	:twitter:description: Array Spread: Array spread is the ellipsis operator, applied to an array
	:twitter:creator: @exakat
	:og:title: Array Spread
	:og:type: article
	:og:description: Array spread is the ellipsis operator, applied to an array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array-spread.ini.html
	:og:locale: en


Array Spread
------------

Array spread is the ellipsis operator, applied to an array. Then, the array itself is replaced by each of its own element, as if each element was spread from the array.


.. code-block:: php
   
   <?php
   
   $a = [1,2,3];
   $b = [...$a, 4,5];
   
   // $b === [1,2,3,4,5];
   
   ?>


`Documentation <https://www.php.net/manual/en/migration74.new-features.php#migration74.new-features.standard.array-merge-no-args>`__

See also `PHP Spread Operator <https://www.phptutorial.net/php-tutorial/php-spread-operator/>`_

Related : :ref:`Ellipsis <ellipsis>`

Added in PHP 7.4
