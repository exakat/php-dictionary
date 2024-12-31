.. _countable:
.. meta::
	:description:
		Countable Interface: The Countable interface in PHP is a built-in interface that allows objects to be counted using the count() function.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Countable Interface
	:twitter:description: Countable Interface: The Countable interface in PHP is a built-in interface that allows objects to be counted using the count() function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Countable Interface
	:og:type: article
	:og:description: The Countable interface in PHP is a built-in interface that allows objects to be counted using the count() function
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/countable.ini.html
	:og:locale: en


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
