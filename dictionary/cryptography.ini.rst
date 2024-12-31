.. _cryptography:
.. _crypto:
.. meta::
	:description:
		Cryptography: Cryptography is the practice and study of techniques for secure communication in the presence of adversarial behavior.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cryptography
	:twitter:description: Cryptography: Cryptography is the practice and study of techniques for secure communication in the presence of adversarial behavior
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cryptography
	:og:type: article
	:og:description: Cryptography is the practice and study of techniques for secure communication in the presence of adversarial behavior
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cryptography.ini.html
	:og:locale: en


Cryptography
------------

Cryptography is the practice and study of techniques for secure communication in the presence of adversarial behavior. It includes techniques like hashing and encryption. 

PHP include native crypto features, like hash() and crypt(), and also extensions, such as openssl or sodium.


.. code-block:: php
   
   
   <?php
   echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');
   ?>
   


`Documentation <https://www.php.net/manual/en/refs.crypto.php>`__
