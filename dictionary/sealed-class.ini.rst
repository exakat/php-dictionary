.. _sealed-class:
.. _sealed-interface:
.. _sealed-hierarchy:
.. meta::
	:description:
		Sealed Class: A sealed class (or sealed interface) is a class whose set of direct subclasses is restricted and known at compile time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Sealed Class
	:twitter:description: Sealed Class: A sealed class (or sealed interface) is a class whose set of direct subclasses is restricted and known at compile time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Sealed Class
	:og:type: article
	:og:description: A sealed class (or sealed interface) is a class whose set of direct subclasses is restricted and known at compile time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sealed-class.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Sealed Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 08:06:13 +0000","dateModified":"Thu, 02 Jul 2026 08:06:13 +0000","description":"A sealed class (or sealed interface) is a class whose set of direct subclasses is restricted and known at compile time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Sealed Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Sealed Class
------------

A sealed class (or sealed interface) is a class whose set of direct subclasses is restricted and known at compile time. Only explicitly listed classes are allowed to extend it; no other class may do so, even in an external library.

This makes sealed hierarchies exhaustively enumerable: a compiler can verify that a ``switch`` or pattern match covers every possible subtype, with no catch-all needed.

Sealed classes are available in Kotlin (``sealed class``), Java since version 17 (``sealed interface ... permits ...``), Scala 3 (``sealed trait``), and Swift (``enum`` with associated values serves a similar role). C# has no direct equivalent but approximates it with abstract classes and internal constructors.

PHP has no concept of sealed classes or sealed interfaces. Inheritance cannot be restricted beyond ``final``, which prevents all subclassing rather than allowing a controlled set.

.. code-block:: php
   
   <?php
   
       // PHP has no sealed keyword.
       // final prevents all subclassing, which is too restrictive.
       final class Circle {}  // Nothing can extend Circle at all.
   
       // The sealed pattern must be enforced by convention or static analysis only.
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Sealed_class>`__

See also `Kotlin sealed classes <https://kotlinlang.org/docs/sealed-classes.html>`_, `Java 17 sealed classes JEP 409 <https://openjdk.org/jeps/409>`_ and `Scala 3 sealed traits <https://docs.scala-lang.org/scala3/reference/other-new-features/sealed.html>`_.

Related : :ref:`Final Keyword <final>`, :ref:`Abstract Class <abstract-class>`, :ref:`Inheritance <inheritance>`, :ref:`Enumeration (enum) <enum>`, :ref:`Pattern Matching <pattern-matching>`, :ref:`Polymorphism <polymorphism>`
