.. _race-condition:
.. meta::
	:description:
		Race Condition: A Race Condition is a broad term for any situation where the outcome of a program depends on the timing of uncontrollable events.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Race Condition
	:twitter:description: Race Condition: A Race Condition is a broad term for any situation where the outcome of a program depends on the timing of uncontrollable events
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Race Condition
	:og:type: article
	:og:description: A Race Condition is a broad term for any situation where the outcome of a program depends on the timing of uncontrollable events
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/race-condition.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Race Condition","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 04 Jul 2026 08:14:09 +0000","dateModified":"Sat, 04 Jul 2026 08:14:09 +0000","description":"A Race Condition is a broad term for any situation where the outcome of a program depends on the timing of uncontrollable events","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Race Condition.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Race Condition
--------------

A Race Condition is a broad term for any situation where the outcome of a program depends on the timing of uncontrollable events.

Race conditions happen in file systems, database accesses, sessions, cache, global variables, signals. 

Race conditions may be migitated by using atomic operations, transactions, locks and unique identifiers.

.. code-block:: php
   
   <?php
   
       if (!file_exists('/path/to/directory')) {
           // race condition
           mkdir('/path/to/directory', 0755); // This might fail as the directory may be created between the time of the previous check and now
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Race_condition>`__

See also `PHP Race Condition Vulnerability Example <http://blog.hoangdoan.io/2015/11/php-race-condition-vulnerability-example.html>`_, `PHP MySQLi - Race condition 🏁 <https://github.com/wzul/PHP-MySQLi-Race-Condition>`_ and `Symfony Lock + Workflow: Taming the Race Condition that will hit you in production <https://nicolas-jourdan.medium.com/symfony-lock-workflow-taming-the-race-condition-that-will-hit-you-in-production-d04613e0b6a8>`_.

Related : :ref:`Atomic Operation <atomic-operation>`, :ref:`Unique Identifier <unique-identifier>`, :ref:`Lock <lock>`, :ref:`Transaction <transaction>`, :ref:`Session <session>`, :ref:`Security <security>`, :ref:`Time Of Check To Time Of Use (TOCTOU) <toctou>`, :ref:`Actor Model <actor-model>`, :ref:`Cache Stampede <cache-stampede>`, :ref:`Concurrency <concurrency>`, :ref:`Mutex <mutex>`, :ref:`Software Transactional Memory (STM) <software-transactional-memory>`
