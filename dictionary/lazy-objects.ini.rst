.. _lazy-objects:

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

Related : :ref:`Lazy Loading <lazy-loading>`
