.. _outofrangeexception:
.. meta::
	:description:
		OutOfRangeException: OutOfRangeException is a built-in exception class that is used to indicate that an index or value is outside the acceptable range.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: OutOfRangeException
	:twitter:description: OutOfRangeException: OutOfRangeException is a built-in exception class that is used to indicate that an index or value is outside the acceptable range
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: OutOfRangeException
	:og:type: article
	:og:description: OutOfRangeException is a built-in exception class that is used to indicate that an index or value is outside the acceptable range
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/outofrangeexception.ini.html
	:og:locale: en


OutOfRangeException
-------------------

OutOfRangeException is a built-in exception class that is used to indicate that an index or value is outside the acceptable range. It is a subclass of the LogicException class.

The OutOfRangeException is typically thrown when accessing an array or collection with an index that is either negative or exceeds the valid range of indices. It can also be thrown when working with iterators or other data structures that have a defined range of valid values. 

.. code-block:: php
   
   <?php
   
   $list = new SplDoublyLinkedList();
   
   try {
       // Adding 5 at index 2, while it should be added a 0 (empty list)
       $list->add(2,5);
   } catch (OutOfRangeException $e) {
       echo "Exception: ".$e->getMessage()."\n";
   }
   ?>


`Documentation <https://www.php.net/manual/en/class.outofrangeexception.php>`__
