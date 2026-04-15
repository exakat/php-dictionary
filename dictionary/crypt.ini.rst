.. _crypt:
.. meta::
	:description:
		To Crypt: To crypt is to apply a data transformation that keeps the original information, but makes it impossible to read without decrypting.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: To Crypt
	:twitter:description: To Crypt: To crypt is to apply a data transformation that keeps the original information, but makes it impossible to read without decrypting
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: To Crypt
	:og:type: article
	:og:description: To crypt is to apply a data transformation that keeps the original information, but makes it impossible to read without decrypting
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/crypt.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"To Crypt","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Apr 2026 14:47:15 +0000","dateModified":"Tue, 14 Apr 2026 14:47:15 +0000","description":"To crypt is to apply a data transformation that keeps the original information, but makes it impossible to read without decrypting","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/To Crypt.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


To Crypt
--------

To crypt is to apply a data transformation that keeps the original information, but makes it impossible to read without decrypting. Usually, the transformation involves a key, which stays secret, and is only known from the author or the receiver of the data.

Crypting data may be done for the transit of information, or its storage, in a database, until its usage. In both case, privacy is critical.

Since the data may be decrypted, it is always possible that an unwanted actor access the crypted data. The notion of impossible to read is related to the difficulty to perform the decryption without the critical key. 

The opposite to crypt is to decrypt, when it is a legit operation, or to crack, when it is an unwanted operation.

.. code-block:: php
   
   <?php
   
       // Encryption
       $key = openssl_random_pseudo_bytes(32); // 256-bit key
       $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
       
       $plaintext = 'PHP rocks';
       $ciphertext = openssl_encrypt($plaintext, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
       $encrypted = base64_encode($iv . $ciphertext);
       
       // Decryption
       $decoded = base64_decode($encrypted);
       $iv = substr($decoded, 0, openssl_cipher_iv_length('aes-256-cbc'));
       $ciphertext = substr($decoded, openssl_cipher_iv_length('aes-256-cbc'));
       $decrypted = openssl_decrypt($ciphertext, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
       
       echo 'Encrypted: ' . $encrypted . PHP_EOL;
       echo 'Decrypted: ' . $decrypted . PHP_EOL;
   
   ?>


See also decrypt, crack

Related : 
