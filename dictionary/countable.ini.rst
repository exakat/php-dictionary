.. _countable:

Countable Interface
-------------------

The Countable interface in PHP is a built-in interface that allows objects to be counted using the count() function. 

By implementing the Countable interface, a class can define custom logic for determining its count.

.. code-block:: php
   
   <?php
   class Collection implements Countable
   {
       private $list = [];
       
       public function add($x) {
           $this->list[] = $x;
       }
   
       public function count()
       {
           return $this->count;
       }
   
   }
   
   $count = new Counter;
   $count->inc();
   $count->inc();
   
   
   print count($count).PHP_EOL;
   
   ?>


`Documentation <https://www.php.net/manual/en/class.countable.php>`__

See also `Using the count() Function in PHP <https://pimylifeup.com/php-count/>`_
