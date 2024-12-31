.. _traversable:
.. meta::
	:description:
		Traversable: Traversable is a specific PHP interface that represents an object that can be iterated over.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Traversable
	:twitter:description: Traversable: Traversable is a specific PHP interface that represents an object that can be iterated over
	:twitter:creator: @exakat
	:og:title: Traversable
	:og:type: article
	:og:description: Traversable is a specific PHP interface that represents an object that can be iterated over
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/traversable.ini.html
	:og:locale: en


Traversable
-----------

Traversable is a specific PHP interface that represents an object that can be iterated over.

Traversable is an abstract interface : it cannot be implemented directly, and instead, it must be implemented by either IteratorAggregate or Iterator. 

The traversable interface is used for typing purposes. 


.. code-block:: php
   
   <?php
   
   try {
       doSomething();
   } catch (\Traversable $e) {
       print "Some error was raised during processing : ". $e::class;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.traversable.php>`__

See also `Traversable interface in PHP <https://blog.eduonix.com/web-programming-tutorials/traversable-interface-in-php/>`_

Related : :ref:`Exception <exception>`, :ref:`Error <error>`
