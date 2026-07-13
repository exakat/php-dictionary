.. _fire-and-forget:
.. meta::
	:description:
		Fire-and-forget: Fire-and-forget is a pattern where a task is dispatched and the caller does not wait for its result, does not check for errors, and does not expect a return value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Fire-and-forget
	:twitter:description: Fire-and-forget: Fire-and-forget is a pattern where a task is dispatched and the caller does not wait for its result, does not check for errors, and does not expect a return value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Fire-and-forget
	:og:type: article
	:og:description: Fire-and-forget is a pattern where a task is dispatched and the caller does not wait for its result, does not check for errors, and does not expect a return value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fire-and-forget.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Fire-and-forget","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:46:22 +0000","dateModified":"Sat, 11 Jul 2026 14:46:22 +0000","description":"Fire-and-forget is a pattern where a task is dispatched and the caller does not wait for its result, does not check for errors, and does not expect a return value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Fire-and-forget.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Fire-and-forget
---------------

Fire-and-forget is a pattern where a task is dispatched and the caller does not wait for its result, does not check for errors, and does not expect a return value. The caller continues execution immediately after dispatching.

Common uses include sending emails, dispatching jobs to a queue, logging, analytics events, and cache invalidation: any side-effect that should not delay the main response.

In synchronous PHP, fire-and-forget is often approximated by closing the HTTP response early, ``fastcgi_finish_request()``, and continuing processing, or by pushing work onto a message queue, like Redis, RabbitMQ, SQS, etc. With fibers or async runtimes such as ReactPHP, AMPHP, Revolt, etc. true non-blocking dispatch becomes possible.

The risk of fire-and-forget is silent failure: if the dispatched task errors, the caller has no way to detect or recover from it. Robust implementations route failures to a dead-letter queue or structured log.

.. code-block:: php
   
   <?php
   
       // Approximated in sync PHP via fastcgi_finish_request()
       ob_start();
       echo 'Response sent to client.';
       $size = ob_get_length();
       header('Content-Length: ' . $size);
       header('Connection: close');
       ob_end_flush();
       flush();
       fastcgi_finish_request(); // client receives the response here
       
       // Work runs after the client is disconnected
       dispatch_slow_email($user);
       
       // With a queue (true fire-and-forget)
       $queue->push(new SendEmailJob($user));
       // caller does not wait — queue worker handles it asynchronously
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Fire_and_forget>`__

See also `fastcgi_finish_request <https://www.php.net/manual/en/function.fastcgi-finish-request.php>`_.

Related : :ref:`Async <async>`, :ref:`Asynchronous <asynchronous>`, :ref:`Event Loop <event-loop>`, :ref:`Message Queue <message-queue>`, :ref:`Fibers <fibers>`, :ref:`Polling <polling>`, :ref:`Side Effect <side-effect>`
