.. _mcrypt:
.. meta::
	:description:
		mcrypt Extension: mcrypt is a PHP extension that provides access to the mcrypt library.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: mcrypt Extension
	:twitter:description: mcrypt Extension: mcrypt is a PHP extension that provides access to the mcrypt library
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: mcrypt Extension
	:og:type: article
	:og:description: mcrypt is a PHP extension that provides access to the mcrypt library
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/mcrypt.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"mcrypt Extension","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"mcrypt is a PHP extension that provides access to the mcrypt library","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/mcrypt Extension.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


mcrypt Extension
----------------

mcrypt is a PHP extension that provides access to the mcrypt library. It provides a variety of cryptographic algorithms. 

mcrypt was deprecated in PHP 7.1 and removed in PHP 7.2. It is recommended to use ``sodium`` or ``openssl`` instead.

.. code-block:: php
   
   <?php
       $key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");
   
       $key_size =  strlen($key);
       echo "Key size: " . $key_size . "\n";
       
       $plaintext = "This string was AES-256 / CBC / ZeroBytePadding encrypted.";
   
       # create a random IV to use with CBC encoding
       $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
       $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
   
       $ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key,
                                    $plaintext, MCRYPT_MODE_CBC, $iv);
   ?>


`Documentation <https://www.php.net/manual/en/ref.mcrypt.php>`__

See also `ext/sodium <https://www.php.net/manual/en/book.sodium.php>`_, `ext/openssl <https://www.php.net/manual/en/book.openssl.php>`_

Related : :ref:`libsodium <sodium>`, :ref:`OpenSSL <openssl>`
