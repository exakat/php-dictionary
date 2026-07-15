.. _canary:
.. _canary-release:
.. _canary-deployment:
.. _stack-canary:
.. meta::
	:description:
		Canary: Canary, borrowed from the miner's canary once used to detect dangerous gas underground, has two distinct meanings in software engineering:.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Canary
	:twitter:description: Canary: Canary, borrowed from the miner's canary once used to detect dangerous gas underground, has two distinct meanings in software engineering:
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Canary
	:og:type: article
	:og:description: Canary, borrowed from the miner's canary once used to detect dangerous gas underground, has two distinct meanings in software engineering:
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/canary.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/canary.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/canary.ini.html","name":"Canary","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:55:23 +0000","dateModified":"Thu, 09 Jul 2026 09:55:23 +0000","description":"Canary, borrowed from the miner's canary once used to detect dangerous gas underground, has two distinct meanings in software engineering:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Canary.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Canary
------

Canary, borrowed from the miner's canary once used to detect dangerous gas underground, has two distinct meanings in software engineering:

+ A canary release, or canary deployment, is a rollout strategy where a new version is deployed to a small subset of servers or users first. Its behavior and metrics are monitored before the rollout is extended to everyone, which limits the blast radius of a regression. It is a close relative of the feature flag and of blue-green deployment.
+ A stack canary, or stack cookie, is a known value placed on the call stack, right before a function's return address. If a buffer overflow overwrites the return address, it also overwrites the canary first, so the corruption is detected before the corrupted address is ever used. It is a memory-safety technique specific to compiled, memory-unsafe languages such as C and C++.

PHP scripts do not manage the stack directly, so stack canaries are not a PHP-level concern; the Zend Engine that executes PHP, however, is itself written in C, and may benefit from stack canaries at the compiler level. Canary releases, on the other hand, are a common practice for deploying PHP applications.

.. code-block:: php
   
   <?php
   
       // a simple canary release, gated by a user's id
       if ($user->id % 100 < 5) { // only 5% of users see the new checkout flow
           return new CheckoutFlowV2();
       }
   
       return new CheckoutFlowV1();
   
   ?>


`Documentation <https://martinfowler.com/bliki/CanaryRelease.html>`__

See also `Canary Release <https://martinfowler.com/bliki/CanaryRelease.html>`_ and `Stack canary <https://en.wikipedia.org/wiki/Buffer_overflow_protection#Canaries>`_.

Related : :ref:`Feature Flag <feature-flag>`, :ref:`Release <release>`, :ref:`Circuit Breaker <circuit-breaker>`, :ref:`Sentinel <sentinel>`
