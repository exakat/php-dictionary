.. _hash_equals:
.. meta::
	:description:
		hash_equals(): ``hash_equals()`` is a built-in PHP function that compares two strings in constant time, regardless of where they differ.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: hash_equals()
	:twitter:description: hash_equals(): ``hash_equals()`` is a built-in PHP function that compares two strings in constant time, regardless of where they differ
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: hash_equals()
	:og:type: article
	:og:description: ``hash_equals()`` is a built-in PHP function that compares two strings in constant time, regardless of where they differ
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/hash_equals.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/hash_equals.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/hash_equals.ini.html","name":"hash_equals()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``hash_equals()`` is a built-in PHP function that compares two strings in constant time, regardless of where they differ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/hash_equals().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


hash_equals()
-------------

``hash_equals()`` is a built-in PHP function that compares two strings in constant time, regardless of where they differ.

It is specifically designed to prevent timing attacks: a regular ``==`` or ``===`` comparison short-circuits as soon as it finds a differing byte, leaking information about the compared value through the response time. ``hash_equals()`` always takes the same amount of time, making it safe for security-sensitive comparisons such as comparing password hashes, HMAC signatures, CSRF tokens, or API keys.

The function returns ``true`` if both strings are equal, ``false`` otherwise. If the two arguments are not strings, a ``TypeError`` is raised.

A common mistake is to compare hashes with ``===``, which is semantically correct but vulnerable to timing attacks. ``hash_equals()`` should be used whenever the compared value could be guessed by an attacker through repeated requests.


.. code-block:: php
   
   <?php
   
       $expected = hash_hmac('sha256', $message, $secret);
       $received = $_POST['signature'];
   
       // Vulnerable: === leaks timing information
       if ($expected === $received) {
           // ...
       }
   
       // Safe: constant-time comparison
       if (hash_equals($expected, $received)) {
           // ...
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/function.hash-equals.php>`__

See also `Timing attacks explained <https://codahale.com/a-lesson-in-timing-attacks/>`_.

Related : :ref:`Timing Attack <timing-attack>`, :ref:`Hash Comparisons <hash-comparison>`, :ref:`Cryptographic Hash <hash-crypto>`, :ref:`Authentication <authentication>`, :ref:`Cross Site Request Forgery (CSRF) <csrf>`, :ref:`Security <security>`, :ref:`HMAC <hmac>`

Added in PHP 5.6
