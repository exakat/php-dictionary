.. _random_cryptosafeengine:
.. meta::
	:description:
		Random\CryptoSafeEngine: ``Random\CryptoSafeEngine`` is a marker interface in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Random\CryptoSafeEngine
	:twitter:description: Random\CryptoSafeEngine: ``Random\CryptoSafeEngine`` is a marker interface in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Random\CryptoSafeEngine
	:og:type: article
	:og:description: ``Random\CryptoSafeEngine`` is a marker interface in PHP 8
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/random_cryptosafeengine.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Random\\CryptoSafeEngine","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:27:59 +0000","dateModified":"Fri, 05 Jun 2026 08:27:59 +0000","description":"``Random\\CryptoSafeEngine`` is a marker interface in PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Random\\CryptoSafeEngine.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Random\CryptoSafeEngine
-----------------------

``Random\CryptoSafeEngine`` is a marker interface in PHP 8.2's ``Random`` extension. Any ``Random\Engine`` that also implements this interface guarantees cryptographically secure output.

The only built-in engine implementing it is ``Random\Engine\Secure``. Type-hinting against ``CryptoSafeEngine`` enforces that callers provide a secure source of randomness.

.. code-block:: php
   
   <?php
   
       function generateToken(Random\CryptoSafeEngine $engine): string {
           $randomizer = new Random\Randomizer($engine);
           return bin2hex($randomizer->getBytes(16));
       }
       
       $token = generateToken(new Random\Engine\Secure());
   
   ?>


`Documentation <https://www.php.net/manual/en/class.random-cryptosafeengine.php>`__

See also `Random\CryptoSafeEngine <https://www.php.net/manual/en/class.random-cryptosafeengine.php>`_ and `Random\Engine\Secure <https://www.php.net/manual/en/class.random-engine-secure.php>`_.

Related : :ref:`Random <random>`, :ref:`Cryptography <cryptography>`, :ref:`Interface <interface>`, , :ref:`PHP Native Interfaces <php-interface>`

Added in PHP 8.2
