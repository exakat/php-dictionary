.. _decrypt:
.. meta::
	:description:
		To Decrypt: To decrypt is to apply a data transformation on crypted data to access the original and readable information.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: To Decrypt
	:twitter:description: To Decrypt: To decrypt is to apply a data transformation on crypted data to access the original and readable information
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: To Decrypt
	:og:type: article
	:og:description: To decrypt is to apply a data transformation on crypted data to access the original and readable information
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/decrypt.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"To Decrypt","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Apr 2026 14:46:51 +0000","dateModified":"Tue, 14 Apr 2026 14:46:51 +0000","description":"To decrypt is to apply a data transformation on crypted data to access the original and readable information","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/To Decrypt.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


To Decrypt
----------

To decrypt is to apply a data transformation on crypted data to access the original and readable information. Usually, the transformation involves a key. That key may be public or private.

Decrypting data may be done after the transit of information, or its storage, in a database. In both case, privacy is critical.

The opposite to crypt is to crypt, when it is a legit operation. The evil equivalent to decrypt is to crack, when the secrets have been forced by any mean.

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
