.. _sessionupdatetimestamphandlerinterface:
.. meta::
	:description:
		SessionUpdateTimestampHandlerInterface: ``SessionUpdateTimestampHandlerInterface`` allows session handlers to validate session IDs and control whether the session timestamp is updated on read.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SessionUpdateTimestampHandlerInterface
	:twitter:description: SessionUpdateTimestampHandlerInterface: ``SessionUpdateTimestampHandlerInterface`` allows session handlers to validate session IDs and control whether the session timestamp is updated on read
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: SessionUpdateTimestampHandlerInterface
	:og:type: article
	:og:description: ``SessionUpdateTimestampHandlerInterface`` allows session handlers to validate session IDs and control whether the session timestamp is updated on read
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sessionupdatetimestamphandlerinterface.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"SessionUpdateTimestampHandlerInterface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 19:37:25 +0000","dateModified":"Mon, 06 Jul 2026 19:37:25 +0000","description":"``SessionUpdateTimestampHandlerInterface`` allows session handlers to validate session IDs and control whether the session timestamp is updated on read","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/SessionUpdateTimestampHandlerInterface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


SessionUpdateTimestampHandlerInterface
--------------------------------------

``SessionUpdateTimestampHandlerInterface`` allows session handlers to validate session IDs and control whether the session timestamp is updated on read.

It adds two methods: ``validateId(string $id): bool`` to check whether a session ID exists, and ``updateTimestamp(string $id, string $data): bool`` to refresh the session's last-accessed time without rewriting all its data.

.. code-block:: php
   
   <?php
   
       class OptimisedSessionHandler implements SessionHandlerInterface, SessionUpdateTimestampHandlerInterface {
           public function validateId(string $id): bool {
               return (bool) $this->redis->exists('sess:' . $id);
           }
       
           public function updateTimestamp(string $id, string $data): bool {
               return (bool) $this->redis->expire('sess:' . $id, 1440);
           }
           // ... implement remaining SessionHandlerInterface methods
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.sessionupdatetimestamphandlerinterface.php>`__

Related : :ref:`Session <session>`, :ref:`Interface <interface>`, :ref:`PHP Native Interfaces <php-interface>`, :ref:`SessionHandlerInterface <sessionhandlerinterface>`, :ref:`SplSubject <splsubject>`

Added in PHP 7.0
