.. _special-constant:
.. meta::
	:description:
		Special Constant: The only special constant is the ``::class`` constant.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Special Constant
	:twitter:description: Special Constant: The only special constant is the ``::class`` constant
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Special Constant
	:og:type: article
	:og:description: The only special constant is the ``::class`` constant
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/special-constant.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Special Constant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"The only special constant is the ``::class`` constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Special Constant.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Special Constant
----------------

The only special constant is the ``::class`` constant. It has the same syntax as a class constant, hence the name. Yet, it is always defined, and holds the fully qualified name of the related class, interface, trait or enumeration.

It is convenient for class name resolution, in particular with namespaced classes.

The resulting name does not include the initial ``\``.

``::class`` is similar to the get_class() function, although it is compatible with ``static``, ``self`` or ``parent``.

The notion of special constant is distinct from the magic constants, such as ``__FILE__``.


.. code-block:: php
   
   <?php
   
   use A\B\C as D;
   
   echo A::class;  // A 
   
   echo D::class;  // A\B\C 
   
   class x {
   	function foo() {
   		echo static::class;  // x
   	}
   }
   
   echo $object::class; // similar to get_class($object)
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.constants.php>`__

Related : :ref:`Fully Qualified Name <fqn>`, :ref:`Static Constant <class-constant>`, :ref:`Magic Constants <magic-constant>`
