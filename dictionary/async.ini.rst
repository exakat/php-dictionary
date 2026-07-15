.. _async:
.. meta::
	:description:
		Async: The ``async`` keyword is used in programming, and especially in languages like JavaScript, Python, and C#, to define a function that runs asynchronously.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Async
	:twitter:description: Async: The ``async`` keyword is used in programming, and especially in languages like JavaScript, Python, and C#, to define a function that runs asynchronously
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Async
	:og:type: article
	:og:description: The ``async`` keyword is used in programming, and especially in languages like JavaScript, Python, and C#, to define a function that runs asynchronously
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/async.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/async.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/async.ini.html","name":"Async","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:23:54 +0000","dateModified":"Tue, 14 Jul 2026 06:23:54 +0000","description":"The ``async`` keyword is used in programming, and especially in languages like JavaScript, Python, and C#, to define a function that runs asynchronously","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Async.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Async
-----

The ``async`` keyword is used in programming, and especially in languages like JavaScript, Python, and C#, to define a function that runs asynchronously. It means that it can perform operations without blocking the rest of the program.

PHP does not support a notion of ``async``. The closest feature is called ``fiber`` or parallel processing, yet it is quite different from asynchronous. Generators also provide a pseudo-asynchronous processing.

.. code-block:: php
   
   <?php
   
       // Starting another process for parallel processing
       shell_exec('php other.php &');
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Async/await>`__

See also `TrueAsync <https://github.com/true-async>`_.

Related : :ref:`Fibers <fiber>`, :ref:`Generator <generator>`, :ref:`Asynchronous <asynchronous>`, :ref:`Fibers <fibers>`, :ref:`Spiral <spiral>`, :ref:`Thread <thread>`, :ref:`Blocking Wait <blocking-wait>`, :ref:`Stealth Generator <stealth-generator>`, :ref:`C10K <c10k>`, :ref:`Edge Triggered <edge-triggered>`, :ref:`Fire-and-forget <fire-and-forget>`, :ref:`Non-blocking <non-blocking>`, :ref:`One-shot <one-shot>`, :ref:`AMP (Asynchronous Markup Protocol) <amp>`, :ref:`Channel <channel>`, :ref:`Green Thread <green-thread>`, :ref:`ReactPHP <reactphp>`

Related packages : `amphp/amp <https://packagist.org/packages/amphp/amp>`_
