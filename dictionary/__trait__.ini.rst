.. _-__trait__:
.. meta::
	:description:
		__TRAIT__: ``__TRAIT__`` holds the current trait name: this is trait of definition, not the called class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __TRAIT__
	:twitter:description: __TRAIT__: ``__TRAIT__`` holds the current trait name: this is trait of definition, not the called class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __TRAIT__
	:og:type: article
	:og:description: ``__TRAIT__`` holds the current trait name: this is trait of definition, not the called class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__trait__.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"__TRAIT__","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 19 Feb 2026 21:20:51 +0000","dateModified":"Thu, 19 Feb 2026 21:20:51 +0000","description":"``__TRAIT__`` holds the current trait name: this is trait of definition, not the called class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__TRAIT__.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__TRAIT__
---------

``__TRAIT__`` holds the current trait name: this is trait of definition, not the called class. It is not the same as ``self::class``, which may change depending on the calling context.

The trait name includes the namespace it was declared in (e.g. ``N\X``). It does not include the leading ``\``. 

When used outside a trait, ``__TRAIT__`` is empty. 

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combinaison of uppercase and lower case. 

.. code-block:: php
   
   <?php
   
   namespace N; 
   
   trait T {
       function foo() {
           echo __TRAIT__;  // N\T
           echo __CLASS__;  // N\X 
       }
   }
   
   class X {
       use T;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.constants.magic.php>`__

Related : :ref:`__FUNCTION__ <-__function__>`, :ref:`__METHOD__ <-__method__>`, :ref:`__CLASS__ <-__class__>`
