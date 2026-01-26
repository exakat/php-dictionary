.. _factory:
.. meta::
	:description:
		Factory: A factory is a design pattern used to create objects without exposing the instantiation logic (i.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Factory
	:twitter:description: Factory: A factory is a design pattern used to create objects without exposing the instantiation logic (i
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Factory
	:og:type: article
	:og:description: A factory is a design pattern used to create objects without exposing the instantiation logic (i
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/factory.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Factory","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 13:49:00 +0000","dateModified":"Mon, 26 Jan 2026 13:49:00 +0000","description":"A factory is a design pattern used to create objects without exposing the instantiation logic (i","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Factory.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Factory
-------

A factory is a design pattern used to create objects without exposing the instantiation logic (i.e., the new keyword) to the client code. Instead of the client knowing exactly which class to instantiate, it asks the factory to produce the object for it.

.. code-block:: php
   
   <?php
   // LoggerFactory.php
   class LoggerFactory
   {
       // Logger is an interface
       public static function createLogger(string $type): Logger
       {
           switch (strtolower($type)) {
               case 'file':
                   return new FileLogger();
               case 'database':
               case 'db':
                   return new DatabaseLogger();
               default:
                   throw new InvalidArgumentException("Unknown logger type:" . $type);
           }
       }
   }
   
   ?>


`Documentation <https://refactoring.guru/design-patterns/factory-method/php/example>`__

Related : :ref:`Abstract Factory <abstract-factory>`
