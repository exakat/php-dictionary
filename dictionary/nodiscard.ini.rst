.. _nodiscard:
.. meta::
	:description:
		NoDiscard: ``NoDiscard`` attribute ensures that the returned value of a method is collected in the calling context.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: NoDiscard
	:twitter:description: NoDiscard: ``NoDiscard`` attribute ensures that the returned value of a method is collected in the calling context
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: NoDiscard
	:og:type: article
	:og:description: ``NoDiscard`` attribute ensures that the returned value of a method is collected in the calling context
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/nodiscard.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"NoDiscard","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 14:31:10 +0000","dateModified":"Fri, 04 Jul 2025 14:31:10 +0000","description":"``NoDiscard`` attribute ensures that the returned value of a method is collected in the calling context","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/NoDiscard.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


NoDiscard
---------

``NoDiscard`` attribute ensures that the returned value of a method is collected in the calling context. That value must be processed there, and not ignored, as it is important for the rest of the processing.

``NoDiscard`` is already used internally, with ``flock`` and ``DateTimeImmutable::setTime()``, to ensure that the result is checked.

.. code-block:: php
   
   <?php
   
   #[\NoDiscard("This returns NULL in case of error")]
   function foo(): ?array {}
   
   $result = foo();
   if ($result === null) { throw new Exception('an error occured!');}
   
   ?>


See also https://wiki.php.net/rfc/marking_return_value_as_important

Related : 

Added in PHP 8.5+
