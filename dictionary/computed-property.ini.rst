.. _computed-property:
.. _computed-properties:
.. meta::
	:description:
		Computed Property: A computed property is a property whose value is derived from an expression at the point of access, with no explicit getter method in user code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Computed Property
	:twitter:description: Computed Property: A computed property is a property whose value is derived from an expression at the point of access, with no explicit getter method in user code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Computed Property
	:og:type: article
	:og:description: A computed property is a property whose value is derived from an expression at the point of access, with no explicit getter method in user code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/computed-property.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/computed-property.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/computed-property.ini.html","name":"Computed Property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 08:34:43 +0000","dateModified":"Fri, 03 Jul 2026 08:34:43 +0000","description":"A computed property is a property whose value is derived from an expression at the point of access, with no explicit getter method in user code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Computed Property.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Computed Property
-----------------

A computed property is a property whose value is derived from an expression at the point of access, with no explicit getter method in user code. The computation is declared inline with the property itself, and the language runtime invokes it transparently when the property is read.

Languages such as Swift, Kotlin, and C# offer computed properties as a first-class syntax:

+ In Swift, ``var area: Double { width * height }`` defines a read-only computed property.
+ In C#, ``public int Area => Width * Height;`` uses an expression-bodied property.
+ In Kotlin, ``val area get() = width * height`` attaches a getter expression directly to the declaration.

In all these cases the computation is expressed as part of the property declaration, not as a separate method the programmer must name and call.

PHP does not support computed properties natively. PHP 8.4 introduced property hooks, with ``get`` and ``set``, which come close: they attach getter and setter logic to a property declaration. However, property hooks still require explicit block or arrow syntax inside the property body and are closer to accessor methods than to the lightweight ``expr``-body computed properties found in Swift or Kotlin.

Before PHP 8.4, the only option was a dedicated ``getter`` method, e.g. ``getArea()``, which is a named method, not a property.

.. code-block:: php
   
   <?php
   
       // PHP 8.4 property hook: closest available approximation.
       class Rectangle {
           public function __construct(
               public float $width,
               public float $height,
           ) {}
       
           // get hook — behaves like a computed property, but requires
           // explicit hook syntax rather than a bare expression.
           public float $area {
               get => $this->width * $this->height;
           }
       }
       
       $r = new Rectangle(3.0, 4.0);
       echo $r->area; // 12.0
       
       // Before PHP 8.4, a dedicated method was the only option:
       // public function getArea(): float { return $this->width * $this->height; }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.property-hooks.php>`__

See also `Swift computed properties <https://docs.swift.org/swift-book/documentation/the-swift-programming-language/properties/#Computed-Properties>`_, `Kotlin properties <https://kotlinlang.org/docs/properties.html>`_ and `C# properties <https://learn.microsoft.com/en-us/dotnet/csharp/programming-guide/classes-and-structs/properties>`_.

Related : :ref:`Property Hook <property-hook>`, :ref:`Virtual Property <virtual-property>`, :ref:`Properties <property>`, :ref:`__get() Method <-__get>`, :ref:`Class Getter Method <getter>`
