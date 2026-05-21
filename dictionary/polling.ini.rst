.. _polling:
.. _long-polling:
.. _short-polling:
.. meta::
	:description:
		Polling: Polling is a technique where a script repeatedly checks the status of a resource or condition at regular intervals, until a result is available or a timeout is reached.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Polling
	:twitter:description: Polling: Polling is a technique where a script repeatedly checks the status of a resource or condition at regular intervals, until a result is available or a timeout is reached
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Polling
	:og:type: article
	:og:description: Polling is a technique where a script repeatedly checks the status of a resource or condition at regular intervals, until a result is available or a timeout is reached
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/polling.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Polling","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 21 May 2026 08:42:08 +0000","dateModified":"Thu, 21 May 2026 08:42:08 +0000","description":"Polling is a technique where a script repeatedly checks the status of a resource or condition at regular intervals, until a result is available or a timeout is reached","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Polling.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Polling
-------

Polling is a technique where a script repeatedly checks the status of a resource or condition at regular intervals, until a result is available or a timeout is reached.

In PHP, polling is common when waiting for asynchronous results: checking a queue, a database row, a file, or a socket. Short polling loops with a ``sleep()`` or ``usleep()`` call between iterations, while long polling holds the HTTP connection open until the server has a response.

``stream_select()`` is the native PHP primitive for polling multiple streams simultaneously without busy-waiting. For process-level polling, ``pcntl_waitpid()`` with the ``WNOHANG`` flag avoids blocking.

Polling trades simplicity for efficiency: it is easy to implement but may waste CPU cycles or impose latency. Event-driven alternatives such as ``libevent``, ReactPHP, or Swoole coroutines can replace polling when throughput matters.

Several PHP native functions include polling as a configuration: ``curl_multi_select()``, ``inotify_read()``.


.. code-block:: php
   
   <?php
   
       // Short polling: check a database flag every second
       $timeout = 30;
       $start   = time();
   
       while (time() - $start < $timeout) {
           $row = $pdo->query('SELECT done FROM jobs WHERE id = 1')->fetch();
           if ($row['done']) {
               echo 'Job finished.';
               break;
           }
           sleep(1);
       }
   
       // Stream polling with stream_select()
       $read    = [$socket];
       $write   = null;
       $except  = null;
       $changed = stream_select($read, $write, $except, seconds: 5);
       if ($changed > 0) {
           $data = fread($read[0], 1024);
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Polling_(computer_science)>`__

See also `stream_select <https://www.php.net/manual/en/function.stream-select.php>`_ and `pcntl_waitpid <https://www.php.net/manual/en/function.pcntl-waitpid.php>`_.

Related : :ref:`sleep <sleep>`, :ref:`Stream <stream>`, :ref:`Socket <socket>`, :ref:`Event Driven <event-driven>`, 
