.. _async:
.. meta::
	:description:
		Async: The ``async`` keyword is used in programming (especially in languages like JavaScript, Python, and C#) to define a function that runs asynchronously.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Async
	:twitter:description: Async: The ``async`` keyword is used in programming (especially in languages like JavaScript, Python, and C#) to define a function that runs asynchronously
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Async
	:og:type: article
	:og:description: The ``async`` keyword is used in programming (especially in languages like JavaScript, Python, and C#) to define a function that runs asynchronously
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/async.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Async","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 17 Jun 2025 08:42:19 +0000","dateModified":"Tue, 17 Jun 2025 08:42:19 +0000","description":"The ``async`` keyword is used in programming (especially in languages like JavaScript, Python, and C#) to define a function that runs asynchronously","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Async.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Async
-----

The ``async`` keyword is used in programming (especially in languages like JavaScript, Python, and C#) to define a function that runs asynchronously. It means that it can perform operations without blocking the rest of the program.

PHP does not support a notion of ``async``. The closest feature is called 'fiber' or parallel processing, yet it is quite different from async. Generators also provide a pseudo-asynch processing.

.. code-block:: php
   
   <?php
   
   
   // Starting another process for parallel processing
   shell_exec('php other.php &');
   
   ?>


Related : , :ref:`Generator <generator>`
