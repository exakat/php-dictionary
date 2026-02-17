.. _noop:
.. _no-operation:
.. meta::
	:description:
		Noop: A noop, or no operation, is a command that does nothing.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Noop
	:twitter:description: Noop: A noop, or no operation, is a command that does nothing
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Noop
	:og:type: article
	:og:description: A noop, or no operation, is a command that does nothing
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/noop.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/A non-numeric value encountered.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/A non-numeric value encountered.html","name":"Noop","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 11 Feb 2026 10:58:37 +0000","dateModified":"Wed, 11 Feb 2026 10:58:37 +0000","description":"A noop, or no operation, is a command that does nothing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Noop.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Noop
----

A noop, or no operation, is a command that does nothing. No-op may be an empty expression, or even entirely omitted. 

``echo`` an empty string is also a noop: it displays a string, which is empty so has no impact on the output. The entire command may be ignored.

Neutral operation such as ``+ 0`` or ``. ''`` are noops, but they include a silent cast to integer or string, which may have a larger impact on the other values of the operation.

No operation are often considered as useless. Noop are sometimes needed where an operation is needed, but, contextually, should be neutral.

This is distinct, though close, to the identity: identity returns the incoming data, doing nothing with it. Yet, it still returns something.


.. code-block:: php
   
   <?php
   
   // empty expressions: noops
   $a = 1;;;
   
   switch($m) {
       case 1:
        // silent no op here
        // but fallthrough
        
       case 2: 
           $b = 3;
   }
   
   while (false);
   
   echo '';
   
   $x = 'abc'.'';
   
   'lone string';
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/NOP_(code)>`__

See also https://www.php.net/manual/en/function.eio-nop.php, https://backendtea.com/post/noop-polyfill/
