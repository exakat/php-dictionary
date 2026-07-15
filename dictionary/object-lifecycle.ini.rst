.. _object-lifecycle:
.. meta::
	:description:
		Object Lifecycle: The lifecycle of an object is the sequence of stages an instance goes through, from its creation to its destruction.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Object Lifecycle
	:twitter:description: Object Lifecycle: The lifecycle of an object is the sequence of stages an instance goes through, from its creation to its destruction
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Object Lifecycle
	:og:type: article
	:og:description: The lifecycle of an object is the sequence of stages an instance goes through, from its creation to its destruction
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/object-lifecycle.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/object-lifecycle.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/object-lifecycle.ini.html","name":"Object Lifecycle","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:57:28 +0000","dateModified":"Wed, 15 Jul 2026 13:57:28 +0000","description":"The lifecycle of an object is the sequence of stages an instance goes through, from its creation to its destruction","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Object Lifecycle.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Object Lifecycle
----------------

The lifecycle of an object is the sequence of stages an instance goes through, from its creation to its destruction.

An object is born when ``new`` is called: PHP allocates it, then runs its ``__construct()`` method with the supplied arguments. While it lives, the object may be duplicated with ``clone``, which triggers ``__clone()`` if it is defined, or turned into a string, an array, or plain data through magic methods such as ``__toString()``, ``__serialize()`` and ``__unserialize()``, or the older ``__sleep()`` and ``__wakeup()``.

An object dies when its last reference disappears, whether by ``unset()``, by going out of scope, or by being overwritten. PHP's reference counting then reclaims it immediately, calling ``__destruct()`` if it is defined. Objects caught in a reference cycle are not freed right away: they wait for the garbage collector to run.

Unlike languages with an explicit destroy step, PHP objects have no forced end of life during normal execution: the engine handles it automatically, though the final destructions of any surviving objects are guaranteed to happen at shutdown, at the latest.

.. code-block:: php
   
   <?php
   
       class Handle {
           private $resource;
   
           function __construct(string $path) {
               $this->resource = fopen($path, 'r');
           }
   
           function __clone() {
               // duplicate the underlying resource instead of sharing it
               $this->resource = fopen(stream_get_meta_data($this->resource)['uri'], 'r');
           }
   
           function __destruct() {
               fclose($this->resource);
           }
       }
   
       $a = new Handle('/tmp/data.txt');
       $b = clone $a;
   
       unset($a); // __destruct() runs for $a's resource
       unset($b); // __destruct() runs for $b's resource
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.decon.php>`__

See also `PHP Constructors and Destructors: Practical Patterns for Predictable Object Lifecycles <https://thelinuxcode.com/php-constructors-and-destructors-practical-patterns-for-predictable-object-lifecycles/>`_ and `PHP Constructor & Destructor <https://redohub.com/php/php-constructor-destructor>`_.

Related : :ref:`Constructor <constructor>`, :ref:`Destructor <destructor>`, :ref:`__clone() Method <-__clone>`, :ref:`__sleep() Method <-__sleep>`, :ref:`__wakeup() Method <-__wakeup>`, :ref:`__serialize() Method <-__serialize>`, :ref:`__unserialize() Method <-__unserialize>`, :ref:`Reference Count <reference-count>`, :ref:`Garbage Collection <garbage-collection>`, :ref:`Lifecycle <lifecycle>`, :ref:`Shutdown <shutdown>`, :ref:`Object <object>`, :ref:`instance <instance>`
