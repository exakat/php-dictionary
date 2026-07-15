.. _random_engine:
.. meta::
	:description:
		Random\Engine: ``Random\Engine`` is the base interface for all random number generator engines introduced in version 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Random\Engine
	:twitter:description: Random\Engine: ``Random\Engine`` is the base interface for all random number generator engines introduced in version 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Random\Engine
	:og:type: article
	:og:description: ``Random\Engine`` is the base interface for all random number generator engines introduced in version 8
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/random_engine.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/random_engine.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/random_engine.ini.html","name":"Random\\Engine","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:25:30 +0000","dateModified":"Mon, 06 Jul 2026 10:25:30 +0000","description":"``Random\\Engine`` is the base interface for all random number generator engines introduced in version 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Random\\Engine.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Random\Engine
-------------

``Random\Engine`` is the base interface for all random number generator engines introduced in version 8.2. It defines a single method ``generate(): string`` that produces a string of random bytes.

Built-in engines include ``Random\Engine\Mt19937``, ``Random\Engine\PcgOneseq128XslRr64``, ``Random\Engine\Xoshiro256StarStar``, and the cryptographically secure ``Random\Engine\Secure``. Custom engines can be implemented by adding this interface.

.. code-block:: php
   
   <?php
   
       $engine = new Random\Engine\Mt19937(seed: 42);
       $randomizer = new Random\Randomizer($engine);
       echo $randomizer->getInt(1, 100);
   
   ?>


`Documentation <https://www.php.net/manual/en/class.random-engine.php>`__

See also `Random\Randomizer <https://www.php.net/manual/en/class.random-randomizer.php>`_.

Related : :ref:`Random <random>`, :ref:`Interface <interface>`, :ref:`PHP Native Interfaces <php-interface>`, :ref:`Random\CryptoSafeEngine <random_cryptosafeengine>`, :ref:`Deterministic <deterministic>`

Added in PHP 8.2
