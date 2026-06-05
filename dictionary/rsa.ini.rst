.. _rsa:
.. meta::
	:description:
		RSA: RSA is the Rivest–Shamir–Adleman algorithm, a widely used method of encryption in the field of Cryptography.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: RSA
	:twitter:description: RSA: RSA is the Rivest–Shamir–Adleman algorithm, a widely used method of encryption in the field of Cryptography
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: RSA
	:og:type: article
	:og:description: RSA is the Rivest–Shamir–Adleman algorithm, a widely used method of encryption in the field of Cryptography
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/rsa.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"RSA","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"RSA is the Rivest\u2013Shamir\u2013Adleman algorithm, a widely used method of encryption in the field of Cryptography","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/RSA.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


RSA
---

RSA is the Rivest–Shamir–Adleman algorithm, a widely used method of encryption in the field of Cryptography.

RSA is a public-key cryptosystem, with a a public key, shared with everyone, and a private key, kept secret.

.. code-block:: php
   
   <?php
   
   // 1) Create a new private/public key pair
   $config = [
       'private_key_bits' => 2048,
       'private_key_type' => OPENSSL_KEYTYPE_RSA,
   ];
   
   $res = openssl_pkey_new($config);
   
   // Export the private key
   openssl_pkey_export($res, $privateKey);
   
   // Extract the public key
   $keyDetails = openssl_pkey_get_details($res);
   $publicKey = $keyDetails['key'];
   
   echo "Private Key:\n$privateKey\n\n";
   echo "Public Key:\n$publicKey\n\n";
   
   // 2) Encrypt a message
   $data = 'Hello, RSA!';
   
   // Encrypt with public key
   openssl_public_encrypt($data, $encrypted, $publicKey);
   
   // Encode for safe output/storage
   $encryptedBase64 = base64_encode($encrypted);
   
   echo "Encrypted:\n$encryptedBase64\n\n";
   ?>


`Documentation <https://en.wikipedia.org/wiki/RSA_cryptosystem>`__

See also `openssl_public_encrypt <https://www.php.net/manual/en/function.openssl-public-encrypt.php>`_.

Related : :ref:`Base 64 Encoding <base64>`, :ref:`XXTEA <xxtea>`
