.. _extension-method:
.. meta::
	:description:
		Extension Method: An extension method, as found in C#, Kotlin, and Swift, lets a developer add a method to a type without modifying that type's source and without subclassing it: ``fun String.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Extension Method
	:twitter:description: Extension Method: An extension method, as found in C#, Kotlin, and Swift, lets a developer add a method to a type without modifying that type's source and without subclassing it: ``fun String
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Extension Method
	:og:type: article
	:og:description: An extension method, as found in C#, Kotlin, and Swift, lets a developer add a method to a type without modifying that type's source and without subclassing it: ``fun String
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/extension-method.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/extension-method.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/extension-method.ini.html","name":"Extension Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 15:35:45 +0000","dateModified":"Wed, 08 Jul 2026 15:35:45 +0000","description":"An extension method, as found in C#, Kotlin, and Swift, lets a developer add a method to a type without modifying that type's source and without subclassing it: ``fun String","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Extension Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Extension Method
----------------

An extension method, as found in C#, Kotlin, and Swift, lets a developer add a method to a type without modifying that type's source and without subclassing it: ``fun String.shout() = this.uppercase() + '!'`` adds a ``shout()`` method callable on every ``String``, including strings from the standard library. The compiler resolves the call statically, based on the static type of the receiver, and injects it as if it were a real member.

Extension methods are typically used to attach domain-specific behavior to library or built-in types, or to gradually retrofit an interface's default methods onto existing implementations.

PHP has no extension method mechanism. Methods can only be added to a class by editing its source, extending it, or mixing in a trait, all of which require access to the class declaration or the willingness to create a subclass; a built-in type such as ``string`` or a final third-party class cannot receive new methods at all. The common workaround is a free function or a static helper class, called as ``Str::shout($value)`` instead of ``$value->shout()``.

.. code-block:: php
   
   <?php
   
       // PHP has no way to add shout() to string itself.
       final class Str {
           public static function shout(string $s): string {
               return strtoupper($s) . '!';
           }
       }
       
       echo Str::shout('hello'); // HELLO!, not 'hello'->shout()
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Extension_method>`__

Related : :ref:`Trait <trait>`, :ref:`Class <class>`, :ref:`Mixin <mixin>`, :ref:`Static Method <static-method>`
