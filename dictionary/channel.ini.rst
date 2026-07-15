.. _channel:
.. _csp:
.. meta::
	:description:
		Channel: A channel is a typed, synchronized queue used to pass values between concurrent tasks, popularized by Go's ``chan`` and modeled on Communicating Sequential Processes, CSP: rather than sharing mutable memory protected by locks, tasks communicate by sending values through a channel, and the channel itself provides the necessary synchronization.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Channel
	:twitter:description: Channel: A channel is a typed, synchronized queue used to pass values between concurrent tasks, popularized by Go's ``chan`` and modeled on Communicating Sequential Processes, CSP: rather than sharing mutable memory protected by locks, tasks communicate by sending values through a channel, and the channel itself provides the necessary synchronization
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Channel
	:og:type: article
	:og:description: A channel is a typed, synchronized queue used to pass values between concurrent tasks, popularized by Go's ``chan`` and modeled on Communicating Sequential Processes, CSP: rather than sharing mutable memory protected by locks, tasks communicate by sending values through a channel, and the channel itself provides the necessary synchronization
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/channel.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/channel.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/channel.ini.html","name":"Channel","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 15:26:13 +0000","dateModified":"Wed, 08 Jul 2026 15:26:13 +0000","description":"A channel is a typed, synchronized queue used to pass values between concurrent tasks, popularized by Go's ``chan`` and modeled on Communicating Sequential Processes, CSP: rather than sharing mutable memory protected by locks, tasks communicate by sending values through a channel, and the channel itself provides the necessary synchronization","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Channel.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Channel
-------

A channel is a typed, synchronized queue used to pass values between concurrent tasks, popularized by Go's ``chan`` and modeled on Communicating Sequential Processes, CSP: rather than sharing mutable memory protected by locks, tasks communicate by sending values through a channel, and the channel itself provides the necessary synchronization. A send can block until a receiver is ready, and a receive can block until a value is sent, depending on whether the channel is buffered.

CSP-style concurrency treats the channel, not the lock, as the primary coordination primitive, and languages built around it, in Go, in Clojure's core.async, with Erlang-style message passing, encourage structuring concurrent programs as independent tasks connected by channels rather than as threads sharing state.

PHP has no native channel type. Concurrency primitives such as ``Fiber`` provide cooperative multitasking within a single thread, but communication between fibers or between processes must be built from lower-level tools: a ``SplQueue``, a message queue extension, shared memory, or a userland library; none of these are integrated into the language as a first-class, typed, blocking channel the way Go's ``chan`` is.

`Documentation <https://en.wikipedia.org/wiki/Communicating_sequential_processes>`__

Related : :ref:`Fibers <fibers>`, :ref:`Coroutine <coroutine>`, :ref:`Queue <queue>`, :ref:`Thread <thread>`, :ref:`Shared Memory <shared-memory>`, :ref:`Async <async>`
