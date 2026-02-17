.. _dereferencing:
.. meta::
	:description:
		Dereferencing: Dereferencing is the action to access a value, which is referenced with a pointer.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dereferencing
	:twitter:description: Dereferencing: Dereferencing is the action to access a value, which is referenced with a pointer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dereferencing
	:og:type: article
	:og:description: Dereferencing is the action to access a value, which is referenced with a pointer
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dereferencing.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Dereferencing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 09 Feb 2026 16:31:48 +0000","dateModified":"Mon, 09 Feb 2026 16:31:48 +0000","description":"Dereferencing is the action to access a value, which is referenced with a pointer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dereferencing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Dereferencing
-------------

Dereferencing is the action to access a value, which is referenced with a pointer. Since PHP has no pointer, dereferencing applies to accessing an element in an array or an object. 

Dereferencing is also possible to function and methods calls: when a function returns an array or an object, it is possible to immediately access one of the element by using the array or method syntax.

.. code-block:: php
   
   <?php
   
   $array = ['a', 'b', 'c'];
   
   echo $array['b'];
   
   function foo() {
       return ['x', 'y', 'z'];
   }
   
   // Function Array Dereferencing
   foo()[2]; // display z
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.array.php>`__

See also https://wiki.php.net/rfc/functionarraydereferencing, https://xpertdeveloper.com/php-array-dereferencing/, https://www.php.net/manual/en/language.types.array.php#language.types.array.syntax

Related : :ref:`Functions <function>`, :ref:`Array <array>`, :ref:`Object <object>`
