.. _countable:
.. meta::
	:description:
		Countable Interface: The ``Countable`` interface in PHP is a built-in interface that allows objects to be counted using the ``count()`` function.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Countable Interface
	:twitter:description: Countable Interface: The ``Countable`` interface in PHP is a built-in interface that allows objects to be counted using the ``count()`` function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Countable Interface
	:og:type: article
	:og:description: The ``Countable`` interface in PHP is a built-in interface that allows objects to be counted using the ``count()`` function
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/countable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Argument #1 ($value) must be of type Countable|array, object given .html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Argument #1 ($value) must be of type Countable|array, object given .html","name":"Countable Interface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 24 Mar 2026 09:11:02 +0000","dateModified":"Tue, 24 Mar 2026 09:11:02 +0000","description":"The ``Countable`` interface in PHP is a built-in interface that allows objects to be counted using the ``count()`` function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Countable Interface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Countable Interface
-------------------

The ``Countable`` interface in PHP is a built-in interface that allows objects to be counted using the ``count()`` function. 

By implementing the ``Countable`` interface, a class defines custom logic for determining its count.

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

See also https://pimylifeup.com/php-count/

Related : :ref:`count() <count>`, :ref:`Interface <interface>`, 
