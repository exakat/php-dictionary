.. _crack:
.. _password-cracking:
.. _hash-cracking:
.. meta::
	:description:
		Crack: Cracking refers to breaking a security mechanism.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Crack
	:twitter:description: Crack: Cracking refers to breaking a security mechanism
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Crack
	:og:type: article
	:og:description: Cracking refers to breaking a security mechanism
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/crack.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Crack","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 02 Jun 2026 17:07:37 +0000","dateModified":"Tue, 02 Jun 2026 17:07:37 +0000","description":"Cracking refers to breaking a security mechanism","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Crack.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Crack
-----

Cracking refers to breaking a security mechanism. Most commonly, it means recovering a plaintext password from its hash. Attackers crack hashes using:

+ Brute force: trying every possible input
+ Dictionary attacks: trying common words and known passwords
+ Rainbow tables: precomputed hash linked to plaintext mappings
+ Rule-based attacks: applying transformations like capitalisation, digit appending, ... to existing wordlists

In any application, passwords must be stored using a strong, salted hashing algorithm such as ``bcrypt`` or Argon2. These algorithms are deliberately slow and include a random salt, making cracking computationally expensive and rendering rainbow tables useless.

Using weak algorithms such as MD5 or SHA-1 for passwords is a critical vulnerability, as they can be cracked rapidly with modern GPUs.


.. code-block:: php
   
   <?php
   
       // WRONG: MD5 is trivially crackable
       $hash = md5('password123'); // 482c811da5d5b4bc6d497ffa98491e38
       
       // CORRECT: use password_hash() — bcrypt with automatic salt
       $hash = password_hash('password123', PASSWORD_BCRYPT);
       
       // Verify
       if (password_verify('password123', $hash)) {
           echo 'Password is correct';
       }
       
       // Even stronger: Argon2id (PHP 7.3+)
       $hash = password_hash('password123', PASSWORD_ARGON2ID);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.password-hash.php>`__

See also `password_hash - PHP Manual <https://www.php.net/manual/en/function.password-hash.php>`_ and `OWASP Password Storage Cheat Sheet <https://cheatsheetseries.owasp.org/cheatsheets/Password_Storage_Cheat_Sheet.html>`_.

Related : :ref:`Password <password>`, :ref:`Cryptographic Hash <hash-crypto>`, :ref:`Weak Cryptography <weak-cryptography>`, :ref:`Argon2 <argon2>`, :ref:`Message Digest Algorithm 5 (MD5) <md5>`, :ref:`Secure Hash Algorithm (SHA) <sha>`, :ref:`Timing Attack <timing-attack>`
