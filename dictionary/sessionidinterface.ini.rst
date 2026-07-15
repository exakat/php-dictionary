.. _sessionidinterface:
.. meta::
	:description:
		SessionIdInterface: ``SessionIdInterface`` is an optional interface a session handler can implement to generate its own session IDs.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SessionIdInterface
	:twitter:description: SessionIdInterface: ``SessionIdInterface`` is an optional interface a session handler can implement to generate its own session IDs
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: SessionIdInterface
	:og:type: article
	:og:description: ``SessionIdInterface`` is an optional interface a session handler can implement to generate its own session IDs
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sessionidinterface.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/sessionidinterface.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/sessionidinterface.ini.html","name":"SessionIdInterface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 19:32:48 +0000","dateModified":"Mon, 06 Jul 2026 19:32:48 +0000","description":"``SessionIdInterface`` is an optional interface a session handler can implement to generate its own session IDs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/SessionIdInterface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


SessionIdInterface
------------------

``SessionIdInterface`` is an optional interface a session handler can implement to generate its own session IDs. It defines a single method ``create_sid(): string`` returning a new unique session identifier.

When PHP needs a new session ID and the handler implements this interface, ``create_sid()`` is called instead of the built-in ID generation.

.. code-block:: php
   
   <?php
   
       class CustomSessionHandler implements SessionHandlerInterface, SessionIdInterface {
           public function create_sid(): string {
               return bin2hex(random_bytes(16));
           }
           // ... implement remaining SessionHandlerInterface methods
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.sessionidinterface.php>`__

Related : :ref:`Session <session>`, :ref:`Interface <interface>`, :ref:`PHP Native Interfaces <php-interface>`, :ref:`SessionHandlerInterface <sessionhandlerinterface>`, :ref:`SplSubject <splsubject>`

Added in PHP 5.5.1
