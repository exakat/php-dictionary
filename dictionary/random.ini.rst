.. _random:
.. meta::
	:description:
		Random: Random generators generates numbers or strings.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Random
	:twitter:description: Random: Random generators generates numbers or strings
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Random
	:og:type: article
	:og:description: Random generators generates numbers or strings
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/random.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Random","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 13:18:59 +0000","dateModified":"Thu, 22 Jan 2026 13:18:59 +0000","description":"Random generators generates numbers or strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Random.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Random
------

Random generators generates numbers or strings. 

random_bytes(), random_int() and openssl_random_pseudo_bytes() produce pseudo-random data, suitable for cryptography. 

Traditional native functions, such as rand() and mt_rand() are not recommended for cryptography.

.. code-block:: php
   
   <?php
   $bytes = random_bytes(5);
   var_dump(bin2hex($bytes));
   ?>


`Documentation <https://www.php.net/manual/en/function.random-bytes.php>`__

See also https://pimylifeup.com/php-rand/
