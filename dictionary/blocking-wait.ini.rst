.. _blocking-wait:
.. _blocking-call:
.. _synchronous-wait:
.. meta::
	:description:
		Blocking Wait: A blocking wait, or blocking call, is an operation that suspends the execution of the current process or thread until the operation completes.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Blocking Wait
	:twitter:description: Blocking Wait: A blocking wait, or blocking call, is an operation that suspends the execution of the current process or thread until the operation completes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Blocking Wait
	:og:type: article
	:og:description: A blocking wait, or blocking call, is an operation that suspends the execution of the current process or thread until the operation completes
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/blocking-wait.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Blocking Wait","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"A blocking wait, or blocking call, is an operation that suspends the execution of the current process or thread until the operation completes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Blocking Wait.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Blocking Wait
-------------

A blocking wait, or blocking call, is an operation that suspends the execution of the current process or thread until the operation completes. During a blocking wait, no other work can be done by that execution unit.

Most PHP I/O operations like file reads, database queries, HTTP requests via ``curl``... are blocking by default. The PHP process simply waits until the operation returns a result.

The alternative is non-blocking or asynchronous I/O, where execution continues and a callback or coroutine is invoked when the result is ready. Frameworks such as ReactPHP and Amp provide non-blocking event loops for PHP.

Blocking waits can become a bottleneck in high-concurrency scenarios, as each blocking call ties up a worker process.


.. code-block:: php
   
   <?php
   
       // Blocking: execution stops here until the HTTP response arrives
       $response = file_get_contents('https://api.example.com/data');
       
       // Blocking: waits for the sleep to complete
       sleep(2);
       
       // Non-blocking alternative using ReactPHP
       $loop = React\EventLoop\Factory::create();
       $browser = new React\Http\Browser($loop);
       $browser->get('https://api.example.com/data')->then(function ($response) {
           echo $response->getBody();
       });
       $loop->run();
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Blocking_(computing)>`__

See also `Blocking vs non-blocking I/O <https://en.wikipedia.org/wiki/Asynchronous_I/O>`_.

Related : :ref:`Async <async>`, :ref:`Asynchronous <asynchronous>`, :ref:`Synchronous <synchronous>`, :ref:`Fibers <fibers>`, :ref:`Coroutine <coroutine>`, :ref:`Event Loop <event-loop>`, :ref:`Polling <polling>`

Related packages : `react/event-loop <https://packagist.org/packages/react/event-loop>`_, `amphp/amp <https://packagist.org/packages/amphp/amp>`_
