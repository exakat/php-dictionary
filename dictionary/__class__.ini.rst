.. _-__class__:
.. meta::
	:description:
		__CLASS__: ``__CLASS__`` holds the current class name: this is the class of definition, not the called class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __CLASS__
	:twitter:description: __CLASS__: ``__CLASS__`` holds the current class name: this is the class of definition, not the called class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __CLASS__
	:og:type: article
	:og:description: ``__CLASS__`` holds the current class name: this is the class of definition, not the called class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__class__.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/ __autoload() is no longer supported, use spl_autoload_register() instead .html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/ __autoload() is no longer supported, use spl_autoload_register() instead .html","name":"__CLASS__","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 19 Feb 2026 21:17:57 +0000","dateModified":"Thu, 19 Feb 2026 21:17:57 +0000","description":"``__CLASS__`` holds the current class name: this is the class of definition, not the called class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__CLASS__.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__CLASS__
---------

``__CLASS__`` holds the current class name: this is the class of definition, not the called class. It is not the same as ``self::class``, which may change depending on the calling context.

The class name includes the namespace it was declared in (e.g. ``N\X``). It does not include the leading ``\``. 

When used inside a trait method, ``__CLASS__`` is the name of the class the trait is used in. When used outside a function, this constant holds an empty string, and does not emit any warning.

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combinaison of uppercase and lower case. 

.. code-block:: php
   
   <?php
   
   namespace N; 
   
   class X {
       function foo() {
           echo __CLASS__;  // N\X
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.constants.magic.php>`__

Related : :ref:`__FUNCTION__ <-__function__>`, :ref:`__METHOD__ <-__method__>`, :ref:`__TRAIT__ <-__trait__>`
