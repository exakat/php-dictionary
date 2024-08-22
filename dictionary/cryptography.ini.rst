.. _cryptography:
.. _crypto:

Cryptography
------------

Cryptography is the practice and study of techniques for secure communication in the presence of adversarial behavior. It includes techniques like hashing and encryption. 

PHP include native crypto features, like hash() and crypt(), and also extensions, such as openssl or sodium.


.. code-block:: php
   
   
   <?php
   echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');
   ?>
   


`Documentation <https://www.php.net/manual/en/refs.crypto.php>`__
