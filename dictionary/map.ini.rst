.. _map:

Map
---

A map refers to an abstract data type (ADT) that stores key-value pairs, where each key is unique within the map. In PHP, this feature is supported by array. 

PHP's array syntax supports a feature to assign the index an arbitrary key. A map allows efficient lookup, insertion, and deletion of values based on their associated keys. The key-value pairs are typically unordered, meaning that the order of insertion may not be preserved when iterating over the map's elements.

Maps are also called associative array, dictionary, or hashes.

Maps are useful to associate a value with a specific key and perform operations like searching for a value by its key or updating the value associated with a key. They provide a convenient way to store and retrieve data based on some unique identifier.



.. code-block:: php
   
   
   <?php
   
   // explicit keys : this is a map
   $array = array('a' => 0, 2 => 1, '123' => 2);
   
   
   // keys are assigned automatically
   $array = array(0, 1, 2);
   
   ?>
   


See also `Associative Arrays in PHP: An Overview <https://www.simplilearn.com/tutorials/php-tutorial/associative-array-in-php>`_

Related : :ref:`Array <array>`, :ref:`Index For Arrays <index-array>`, :ref:`Collection <collection>`
