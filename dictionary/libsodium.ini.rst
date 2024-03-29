.. _libsodium:
.. _sodium:

libsodium
---------

Sodium is a modern, easy-to-use software library for encryption, decryption, signatures, password hashing and more.

The library is integrated into PHP as an extension. It provides a lot of functions and features to the language.


.. code-block:: php
   
   <?php
   //Generate a random key for sodium_crypto_auth
   $key = sodium_crypto_auth_keygen();
   
   ?>


`Documentation <https://libsodium.gitbook.io/doc/>`__

See also `libsodium on github <https://github.com/jedisct1/libsodium.git>`_

Related : :ref:`Cryptography <cryptography>`, :ref:`OpenSSL <openssl>`
