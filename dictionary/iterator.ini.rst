.. _iterator:

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
