.. _append:
.. _array-append:
.. _push:
.. meta::
	:description:
		Array Append: Append is an array operation, which adds an element at the end of the array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array Append
	:twitter:description: Array Append: Append is an array operation, which adds an element at the end of the array
	:twitter:creator: @exakat
	:og:title: Array Append
	:og:type: article
	:og:description: Append is an array operation, which adds an element at the end of the array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/append.ini.html
	:og:locale: en


Array Append
------------

Append is an array operation, which adds an element at the end of the array. It is also called a push.

There are two operators for this feature ; the ``[]`` operator, which has to be placed after a variable or member. There is also the array_push() function, which is available as a callback, unlike the operator.

The opposite operation is a pop, with the function array_pop(). Array_unshift() is the append at the beginning of the array. 


.. code-block:: php
   
   <?php
   
   $array = [1, 2, 3];
   $array[] = 4;
   
   $array []= 5; // Same as above, with a notation similar to a short assignation
   
   array_push($array, 6);
   
   // $array === [1, 2, 3, 4, 5, 6];
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.array.php>`__

See also `array_push <https://www.php.net/manual/en/function.array-push.php>`_
