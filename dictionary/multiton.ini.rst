.. _multiton:
.. meta::
	:description:
		Multiton: A multiton is a singleton which holds several instances of itself.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Multiton
	:twitter:description: Multiton: A multiton is a singleton which holds several instances of itself
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Multiton
	:og:type: article
	:og:description: A multiton is a singleton which holds several instances of itself
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/multiton.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Multiton","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 11 Dec 2025 18:46:44 +0000","dateModified":"Thu, 11 Dec 2025 18:46:44 +0000","description":"A multiton is a singleton which holds several instances of itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Multiton.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Multiton
--------

A multiton is a singleton which holds several instances of itself. Each instance is identified with a distinct name, and may be reached independantly.

.. code-block:: php
   
   <?php
   
   class Database {
       private static $instances = array();
   
       private function __construct() { }
   
       public static function getInstance(string $name) {
    
           // Check if an instance exists with this key already
           if(!isset(self::$instances[$key])) {
               self::$instances[$name] = match($name) {
                   'write' => new Connection(self::WRITE_CREDENTIALS),
                   'read' => new Connection(self::READ_CREDENTIALS),
                   'blackhole' => new NullObject(),
                   default => throw new Exception('No such database access')
               };
           }
    
           // Return the correct instance of this class
           return self::$instances[$name];
       }
   
       private function __clone() { }
   }
    
   // Create first instance to the master database
   $master = Database::getInstance('read');
   var_dump($master); // object(Database)#1 (0) { }
    
   // Create second instance of this class for a logger database
   $logger = Database::getInstance('write');
   var_dump($logger); // object(Database)#2 (0) { }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Multiton_pattern>`__

See also https://www.jakowicz.com/multitons-in-php/

Related : :ref:`Singleton <singleton>`
