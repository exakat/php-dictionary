.. _class_implements:
.. meta::
	:description:
		class_implements(): ``class_implements()`` returns an array of all interfaces implemented by a given class, including interfaces implemented by its parent classes.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: class_implements()
	:twitter:description: class_implements(): ``class_implements()`` returns an array of all interfaces implemented by a given class, including interfaces implemented by its parent classes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: class_implements()
	:og:type: article
	:og:description: ``class_implements()`` returns an array of all interfaces implemented by a given class, including interfaces implemented by its parent classes
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/class_implements.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/class_implements.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/class_implements.ini.html","name":"class_implements()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 09:18:04 +0000","dateModified":"Fri, 17 Jul 2026 09:18:04 +0000","description":"``class_implements()`` returns an array of all interfaces implemented by a given class, including interfaces implemented by its parent classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/class_implements().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


class_implements()
------------------

``class_implements()`` returns an array of all interfaces implemented by a given class, including interfaces implemented by its parent classes. The keys and values of the returned array are both the interface names.

An optional second parameter, by default ``true``, controls whether the autoloader should be invoked if the class does not yet exist. Pass ``false`` to suppress autoloading.

``class_implements()`` returns ``false`` if the class does not exist and autoloading is disabled.

Related functions are ``class_parents()``, which returns parent classes, and ``class_uses()``, which returns traits used by the class.


.. code-block:: php
   
   <?php
   
   interface Countable {}
   interface Stringable {}
   
   class MyCollection implements Countable, Stringable {
       public function count(): int { return 0; }
       public function __toString(): string { return ''; }
   }
   
   $interfaces = class_implements(MyCollection::class);
   // ['Countable' => 'Countable', 'Stringable' => 'Stringable']
   
   // Also works with a string class name
   $interfaces = class_implements('MyCollection');
   
   // Works on instances too
   $obj = new MyCollection();
   $interfaces = class_implements($obj);
   
   var_dump(isset($interfaces['Countable'])); // true
   
   ?>


`Documentation <https://www.php.net/class_implements>`__

See also `class_implements - PHP Manual <https://www.php.net/manual/en/function.class-implements.php>`_.

Related : :ref:`Interface <interface>`, :ref:`implements <implements>`, :ref:`Introspection <introspection>`

Added in PHP 5.1
