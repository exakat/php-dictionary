.. _openssl:

OpenSSL
-------

The OpenSSL Project develops and maintains the OpenSSL software - a robust, commercial-grade, full-featured toolkit for general-purpose cryptography and secure communication. 

The library is integrated into PHP as an extension. It provides a lot of functions and features to the language.


.. code-block:: php
   
   <?php
   // Example from php.net documentation
   // $data is assumed to contain the data to be signed
   
   // fetch private key from file and ready it
   $pkeyid = openssl_pkey_get_private("file://src/openssl-0.9.6/demos/sign/key.pem");
   
   // compute signature
   openssl_sign($data, $signature, $pkeyid);
   
   // free the key from memory
   openssl_free_key($pkeyid);
   ?>


`Documentation <https://www.openssl.org/>`__

See also `Encryption using PHP and OpenSSL <https://www.virendrachandak.com/techtalk/encryption-using-php-openssl/>`_

Related : :ref:`Cryptography <cryptography>`, :ref:`libsodium <libsodium>`
