.. _meta-object-protocol:
.. _mop:
.. meta::
	:description:
		Meta-object Protocol: A Meta-object Protocol (MOP) is an API that exposes a language's own object system as a first-class, programmable layer.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Meta-object Protocol
	:twitter:description: Meta-object Protocol: A Meta-object Protocol (MOP) is an API that exposes a language's own object system as a first-class, programmable layer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Meta-object Protocol
	:og:type: article
	:og:description: A Meta-object Protocol (MOP) is an API that exposes a language's own object system as a first-class, programmable layer
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/meta-object-protocol.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Meta-object Protocol","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 04 Jul 2026 08:09:37 +0000","dateModified":"Sat, 04 Jul 2026 08:09:37 +0000","description":"A Meta-object Protocol (MOP) is an API that exposes a language's own object system as a first-class, programmable layer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Meta-object Protocol.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Meta-object Protocol
--------------------

A Meta-object Protocol (MOP) is an API that exposes a language's own object system as a first-class, programmable layer. Through a MOP, user code can redefine how classes are created, how methods are looked up and dispatched, how instances are allocated, and how inheritance is resolved: extending or replacing the object model itself from within the language. The canonical MOP is CLOS (Common Lisp Object System), which exposes generic functions such as ``make-instance``, ``compute-applicable-methods``, and ``slot-value`` as overridable entry points.

Python's data model, with ``__new__``, ``__init_subclass__``, ``__class_getitem__``, metaclasses, and Ruby's ``BasicObject`` and ``method_missing`` give partial MOP-like access. Smalltalk's entire class hierarchy is itself a set of Smalltalk objects, making it fully reflective by design.

PHP does not have a Meta-object Protocol. PHP's object system is implemented in C (the Zend Engine) and is not programmable from userland. PHP does provide several approximations:

+ The Reflection API, ``ReflectionClass``, ``ReflectionMethod``, ``ReflectionProperty``, exposes read access to the object model at runtime, but cannot modify it.
+ Magic methods, (``__get``, ``__set``, ``__call``, ``__callStatic``, ``__isset``, ``__unset``, intercept individual property and method access operations, giving hook points that resemble parts of a MOP.
+ ``class_alias()`` lets user code create alternative names for classes, but cannot alter dispatch behaviour.
+ ``Closure::bind()`` and ``Closure::bindTo()`` allow closures to be rebound to a different object scope, approximating dynamic method injection.
+ Libraries such as ``ocramius/proxy-manager`` implement lazy-loading and interception proxies on top of these primitives, simulating part of what a MOP would provide natively.

.. code-block:: php
   
   <?php
   
       // PHP Reflection: read-only introspection of the object model.
       // A true MOP would also allow redefining dispatch and instantiation.
   
       $rc = new ReflectionClass(ArrayObject::class);
   
       foreach ($rc->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {
           echo $method->getName() . "\n";
       }
   
       // Magic methods: intercept property/method access — limited MOP hooks.
       class DynamicEntity {
           private array $data = [];
   
           public function __get(string $name): mixed {
               return $this->data[$name] ?? null;
           }
   
           public function __set(string $name, mixed $value): void {
               $this->data[$name] = $value;
           }
   
           public function __call(string $name, array $args): mixed {
               // intercept unknown method calls — not full method-dispatch override
               throw new \BadMethodCallException("No method: $name");
           }
       }
   
       // Rebind a closure to a different object scope (approximates method injection)
       $greet = Closure::bind(
           static function (string $suffix): string { return self::class . $suffix; },
           null,
           DynamicEntity::class
       );
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Metaobject>`__

See also `The Art of the Metaobject Protocol (Kiczales et al.) <https://en.wikipedia.org/wiki/The_Art_of_the_Metaobject_Protocol>`_, `PHP Reflection API <https://www.php.net/manual/en/book.reflection.php>`_ and `ocramius/proxy-manager <https://github.com/Ocramius/ProxyManager>`_.

Related : :ref:`Reflection <reflection>`, :ref:`Magic Methods <magic-method>`, :ref:`Metaprogramming <metaprogramming>`, :ref:`Homoiconicity <homoiconicity>`, :ref:`Proxy <proxy>`, :ref:`Closure <closure>`, :ref:`__get() Method <-__get>`, :ref:`__call() Method <-__call>`, :ref:`Metaclass <metaclass>`

Related packages : `ocramius/proxy-manager <https://packagist.org/packages/ocramius/proxy-manager>`_
