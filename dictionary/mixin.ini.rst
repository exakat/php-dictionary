.. _mixin:
.. _class-mixin:
.. meta::
	:description:
		Mixin: A mixin is a class-level construct that provides a set of methods intended to be incorporated into other classes, without forming a base-class relationship.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Mixin
	:twitter:description: Mixin: A mixin is a class-level construct that provides a set of methods intended to be incorporated into other classes, without forming a base-class relationship
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Mixin
	:og:type: article
	:og:description: A mixin is a class-level construct that provides a set of methods intended to be incorporated into other classes, without forming a base-class relationship
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/mixin.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Mixin","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 08:37:42 +0000","dateModified":"Fri, 03 Jul 2026 08:37:42 +0000","description":"A mixin is a class-level construct that provides a set of methods intended to be incorporated into other classes, without forming a base-class relationship","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Mixin.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Mixin
-----

A mixin is a class-level construct that provides a set of methods intended to be incorporated into other classes, without forming a base-class relationship. Unlike inheritance, a mixin does not impose an ``is-a`` relationship. Unlike an interface, it supplies concrete implementations. Unlike a trait (as PHP defines it), a mixin is itself an instantiable class or a first-class language entity that is composed through language syntax rather than a ``use`` directive inside the class body.

Languages such as Dart, Kotlin (via delegation), and Scala (via self-types and stackable modifications) offer mixins as distinct, class-level features.

PHP does not have mixins. PHP traits are the closest analogue: they provide method reuse without inheritance. However, traits differ from true mixins in several ways:

+ A trait is not a class and cannot be instantiated on its own.
+ A trait is composed inside the class definition (it cannot be applied after the fact).
+ A trait cannot extend another class; a mixin in some languages can carry its own class hierarchy.
+ PHP traits are resolved at compile time; some mixin systems allow run-time composition.

PHP interfaces with default implementations (as in Java) are also a common comparison point, but PHP interfaces carry no implementation at all.

.. code-block:: php
   
   <?php
   
       // PHP uses traits as the closest equivalent to mixins.
       // They share the intent but differ from class-level mixins.
       
       trait Timestampable {
           private \DateTimeImmutable $createdAt;
       
           public function getCreatedAt(): \DateTimeImmutable {
               return $this->createdAt;
           }
       }
       
       class Article {
           use Timestampable;   // composed here, not applied externally
       }
       
       // A true class-level mixin (as in Dart) would be declared separately
       // and applied without modifying the target class source.
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Mixin>`__

See also `Dart mixins <https://dart.dev/language/mixins>`_ and `Mixins vs Traits <https://en.wikipedia.org/wiki/Mixin>`_.

Related : :ref:`Trait <trait>`, :ref:`Use In Traits <use-trait>`, :ref:`Open Class <open-class>`, :ref:`Polymorphism <polymorphism>`, :ref:`Method Resolution Order (MRO) <mro>`
