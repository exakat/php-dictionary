.. _argon2:
.. meta::
	:description:
		Argon2: Argon2 is a modern, secure, and highly efficient password hashing algorithm.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Argon2
	:twitter:description: Argon2: Argon2 is a modern, secure, and highly efficient password hashing algorithm
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Argon2
	:og:type: article
	:og:description: Argon2 is a modern, secure, and highly efficient password hashing algorithm
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/argon2.ini.html
	:og:locale: en


Argon2
------

Argon2 is a modern, secure, and highly efficient password hashing algorithm. It was the winner of the Password Hashing Competition (PHC) in 2015 and is designed to resist brute-force attacks, including GPU-based attacks. PHP has built-in support for Argon2 starting from version 7.2.

.. code-block:: php
   
   <?php
   $password = "PHP is alive and kicking!";
   
   // Hash the password with Argon2id
   print password_hash($password, PASSWORD_ARGON2ID);
   
   ?>


`Documentation <https://guriasoft.com/server-side/php/argon2>`__
