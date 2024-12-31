.. _singleton:
.. meta::
	:description:
		Singleton: A singleton is a class which can only have one object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Singleton
	:twitter:description: Singleton: A singleton is a class which can only have one object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Singleton
	:og:type: article
	:og:description: A singleton is a class which can only have one object
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/singleton.ini.html
	:og:locale: en


Singleton
---------

A singleton is a class which can only have one object. There is no way to instantiate the class and get a second, distinct object.

A singleton is used when there is a significant cost or limitations at maintaining multiple instances of the same object. For example, multiple ``Sqlite3`` access to the same file, even as read-only, means several copies of the same file in memory. Or, several object referencing the same lock may be a problem.

Singleton are more difficult to test, as there is only one instance, and it is difficult to control it. Singleton may be achieve by dependency injection, with the same object. 



.. code-block:: php
   
   
   <?php
   // One method to build a singleton class
   class Singleton {
     private static self $instance = null;
     
     // The constructor is private, to avoid multiple instantiation
     // it is still accessible indirectly, via a public static method. 
     private function __construct()
     {
       // the usual constructo code
     }
   
     // the factory to build the singleton 
     public static function getInstance() : self {
       if (self::$instance === null) {
         self::$instance = new self;
       }
    
       return self::$instance;
     }
   }
   ?>
   


`Documentation <https://en.wikipedia.org/wiki/Singleton_pattern>`__

See also `The little singleton <https://blog.cleancoder.com/uncle-bob/2015/07/01/TheLittleSingleton.html>`_, `The singleton pattern::the good, the bad, and the ugly <https://phpenthusiast.com/blog/the-singleton-design-pattern-in-php>`_, `Stop Using Singleton Pattern <https://medium.com/@dotcom.software/stop-using-singleton-pattern-c078abc99eb2>`_, `PHP Design Patterns Game : The Singleton Pattern <https://phpmagazine.net/2023/03/php-design-patterns-game-the-singleton-pattern.html>`_

Related : :ref:`Design Pattern <design-pattern>`
