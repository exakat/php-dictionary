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
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Argon2","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"Argon2 is a modern, secure, and highly efficient password hashing algorithm","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Argon2.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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
