.. _random_cryptosafeengine:
.. meta::
	:description:
		Random\CryptoSafeEngine: ``Random\CryptoSafeEngine`` is a marker interface ``Random`` extension.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Random\CryptoSafeEngine
	:twitter:description: Random\CryptoSafeEngine: ``Random\CryptoSafeEngine`` is a marker interface ``Random`` extension
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Random\CryptoSafeEngine
	:og:type: article
	:og:description: ``Random\CryptoSafeEngine`` is a marker interface ``Random`` extension
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/random_cryptosafeengine.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/random_cryptosafeengine.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/random_cryptosafeengine.ini.html","name":"Random\\CryptoSafeEngine","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:47:12 +0000","dateModified":"Mon, 13 Jul 2026 18:47:12 +0000","description":"``Random\\CryptoSafeEngine`` is a marker interface ``Random`` extension","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Random\\CryptoSafeEngine.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Random\CryptoSafeEngine
-----------------------

``Random\CryptoSafeEngine`` is a marker interface ``Random`` extension. Any ``Random\Engine`` that also implements this interface guarantees cryptographically secure output.

The only built-in engine implementing it is ``Random\Engine\Secure``. Type-hinting against ``CryptoSafeEngine`` enforces that callers provide a secure source of randomness.

``Random\CryptoSafeEngine`` was introduced in version 8.2.


.. code-block:: php
   
   <?php
   
       function generateToken(Random\CryptoSafeEngine $engine): string {
           $randomizer = new Random\Randomizer($engine);
           return bin2hex($randomizer->getBytes(16));
       }
       
       $token = generateToken(new Random\Engine\Secure());
   
   ?>


`Documentation <https://www.php.net/manual/en/class.random-cryptosafeengine.php>`__

See also `Random\Engine\Secure <https://www.php.net/manual/en/class.random-engine-secure.php>`_.

Related : :ref:`Random <random>`, :ref:`Cryptography <cryptography>`, :ref:`Interface <interface>`, :ref:`Random\Engine <random_engine>`, :ref:`PHP Native Interfaces <php-interface>`

Added in PHP 8.2
