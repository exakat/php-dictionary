.. _sessionhandlerinterface:
.. meta::
	:description:
		SessionHandlerInterface: ``SessionHandlerInterface`` defines the contract for custom PHP session save handlers.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SessionHandlerInterface
	:twitter:description: SessionHandlerInterface: ``SessionHandlerInterface`` defines the contract for custom PHP session save handlers
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: SessionHandlerInterface
	:og:type: article
	:og:description: ``SessionHandlerInterface`` defines the contract for custom PHP session save handlers
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sessionhandlerinterface.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"SessionHandlerInterface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:23:00 +0000","dateModified":"Mon, 06 Jul 2026 10:23:00 +0000","description":"``SessionHandlerInterface`` defines the contract for custom PHP session save handlers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/SessionHandlerInterface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


SessionHandlerInterface
-----------------------

``SessionHandlerInterface`` defines the contract for custom PHP session save handlers. Implementing it allows storing sessions in any backend, may it be a Redis server, a database, an encrypted file, etc.

The six methods to implement are ``open()``, ``close()``, ``read()``, ``write()``, ``destroy()``, and ``gc()``. Register the handler with ``session_set_save_handler()``.

.. code-block:: php
   
   <?php
   
   class RedisSessionHandler implements SessionHandlerInterface {
       private Redis $redis;
   
       public function open(string $path, string $name): bool { return true; }
       public function close(): bool { return true; }
   
       public function read(string $id): string|false {
           return $this->redis->get('sess:' . $id) ?: '';
       }
   
       public function write(string $id, string $data): bool {
           return (bool) $this->redis->setex('sess:' . $id, 1440, $data);
       }
   
       public function destroy(string $id): bool {
           $this->redis->del('sess:' . $id);
           return true;
       }
   
       public function gc(int $max_lifetime): int|false { return 0; }
   }
   
   session_set_save_handler(new RedisSessionHandler());
   
   ?>


`Documentation <https://www.php.net/manual/en/class.sessionhandlerinterface.php>`__

See also `session_set_save_handler() <https://www.php.net/manual/en/function.session-set-save-handler.php>`_.

Related : :ref:`Session <session>`, :ref:`Interface <interface>`, :ref:`PHP Native Interfaces <php-interface>`, :ref:`SessionIdInterface <sessionidinterface>`, :ref:`SessionUpdateTimestampHandlerInterface <sessionupdatetimestamphandlerinterface>`, :ref:`SplSubject <splsubject>`

Added in PHP 5.4
