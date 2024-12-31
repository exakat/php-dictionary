.. _arrayobject:
.. meta::
	:description:
		ArrayObject: ``ArrayObject`` is a native class that provides the functionality of an array with the added features of an object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ArrayObject
	:twitter:description: ArrayObject: ``ArrayObject`` is a native class that provides the functionality of an array with the added features of an object
	:twitter:creator: @exakat
	:og:title: ArrayObject
	:og:type: article
	:og:description: ``ArrayObject`` is a native class that provides the functionality of an array with the added features of an object
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/arrayobject.ini.html
	:og:locale: en


ArrayObject
-----------

``ArrayObject`` is a native class that provides the functionality of an array with the added features of an object. It extends the base ``ArrayObject`` class and implements the ``ArrayAccess``, ``Countable``, ``IteratorAggregate``, and ``Serializable`` interfaces.

With ``ArrayObject``, it is possible to create objects that have the behavior of arrays, meaning it is possible to access array elements as properties and use object-oriented methods to manipulate the array. 

Operator such as append ``[]``, or foreach() loops are then available with those objects.

On the other hand, ``ArrayObject`` fails any ``array`` type, and many ``array`` functions do not work with the objects: ``array_key_exists()``, ``array_map()``, etc. 

Converting an ``ArrayObject`` to an array is done with a cast ``(array)`` or a call to ``iterator_to_array()``.


.. code-block:: php
   
   <?php
   
   class myObject extends ArrayObject{ }
   
   $variable = new ArrObj([0, 1]);
   
   $variable[] = 2;
   foreach($variable as $k => $v) {
   	echo $k . ' => ' . $v . PHP_EOL; 
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.arrayobject.php>`__

See also `Array Objects in PHP <https://gist.github.com/Jeff-Russ/e1f64273a471d440e8b4d9183f9a2667>`_

Related : :ref:`Array <array>`, :ref:`Cast Operator <cast>`, 

Related packages : `jbzoo/data <https://packagist.org/packages/jbzoo/data>`_, `phootwork/collection <https://packagist.org/packages/phootwork/collection>`_
