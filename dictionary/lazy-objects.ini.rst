.. _lazy-objects:
.. meta::
	:description:
		Lazy Objects: Lazy objects is a application of lazy-loading, directly applied in the PHP engine, and available as an engine feature since PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Lazy Objects
	:twitter:description: Lazy Objects: Lazy objects is a application of lazy-loading, directly applied in the PHP engine, and available as an engine feature since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Lazy Objects
	:og:type: article
	:og:description: Lazy objects is a application of lazy-loading, directly applied in the PHP engine, and available as an engine feature since PHP 8
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/lazy-objects.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Lazy Objects","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 19 Jan 2026 14:11:49 +0000","dateModified":"Mon, 19 Jan 2026 14:11:49 +0000","description":"Lazy objects is a application of lazy-loading, directly applied in the PHP engine, and available as an engine feature since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Lazy Objects.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Lazy Objects
------------

Lazy objects is a application of lazy-loading, directly applied in the PHP engine, and available as an engine feature since PHP 8.4.

.. code-block:: php
   
   <?php
   
   // taken from the RFC (https://wiki.php.net/rfc/lazy-objects)
   class MyClass
   {
       public function __construct(private int $foo)
       {
           // Heavy initialization logic here.
       }
    
       // ...
   }
    
   $initializer = static function (MyClass $ghost): void {
       $ghost->__construct(123);
   };
    
   $reflector = new ReflectionClass(MyClass::class);
   $object = $reflector->newLazyGhost($initializer);
    
   // At this point, $object is a lazy ghost object.
   
   ?>


`Documentation <https://wiki.php.net/rfc/lazy-objects>`__

See also https://chrastecky.dev/programming/lazy-objects-in-php-8-4

Related : :ref:`Lazy Loading <lazy-loading>`
