.. _void-cast:
.. meta::
	:description:
		(void) Cast: The ``(void)`` cast is a special cast.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: (void) Cast
	:twitter:description: (void) Cast: The ``(void)`` cast is a special cast
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: (void) Cast
	:og:type: article
	:og:description: The ``(void)`` cast is a special cast
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/void-cast.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"(void) Cast","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Nov 2025 19:45:40 +0000","dateModified":"Sun, 16 Nov 2025 19:45:40 +0000","description":"The ``(void)`` cast is a special cast","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/(void) Cast.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


(void) Cast
-----------

The ``(void)`` cast is a special cast. It doesn't actually cast a value to ``void``, which does not exist as data, only as a type. ``(void)`` actually tells the ``#[NoDiscard]`` attribute that the returned value is explicitely discarded. Otherwise, PHP expects the returned value to be collected and used.

.. code-block:: php
   
   <?php
   
   #[NoDiscard]
   function foo() {
       return 1;
   }
   
   // OK
   (void) foo(); 
   
   // Wrong, the returned value MUST be collected
   foo(); 
   
   ?>


`Documentation <https://www.php.net/manual/en/migration85.new-features.php#migration85.new-features.core.nodiscard-attribute>`__
