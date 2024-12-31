.. _iterator:
.. meta::
	:description:
		Iterator: An iterator is an object which can be traversed with a foreach() loop.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Iterator
	:twitter:description: Iterator: An iterator is an object which can be traversed with a foreach() loop
	:twitter:creator: @exakat
	:og:title: Iterator
	:og:type: article
	:og:description: An iterator is an object which can be traversed with a foreach() loop
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/iterator.ini.html
	:og:locale: en


Iterator
--------

An iterator is an object which can be traversed with a foreach() loop. 

`Iterator` is an interface, which shall be implemented by objects. There are also a list of default iterators in the SPL extension.

An iterator may be turned into an array, with the iterator_to_array() function.


.. code-block:: php
   
   
   <?php
   
   class myIterator implements Iterator { /**/ }
   
   $it = new myIterator;
   
   foreach($it as $key => $value) {
       var_dump($key, $value);
       echo "\n";
   }
   
   ?>
   


`Documentation <https://www.php.net/manual/en/class.iterator.php>`__

See also `Modern PHP Developer - Iterator <https://startutorial.com/view/modern-php-developer-iterator>`_, `Iterator in PHP <https://refactoring.guru/design-patterns/iterator/php/example>`_

Related : :ref:`Standard PHP Library (SPL) <spl>`, :ref:`Traversal <traversal>`, :ref:`Foreach <foreach>`
