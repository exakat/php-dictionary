.. _password-ext:
.. meta::
	:description:
		Password API: The Password API, or extension, is a part of the Core of PHP, which provides an easy to use wrapper around crypt() and some other password hashing algorithms, to make it easy to create and manage passwords in a secure manner.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Password API
	:twitter:description: Password API: The Password API, or extension, is a part of the Core of PHP, which provides an easy to use wrapper around crypt() and some other password hashing algorithms, to make it easy to create and manage passwords in a secure manner
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Password API
	:og:type: article
	:og:description: The Password API, or extension, is a part of the Core of PHP, which provides an easy to use wrapper around crypt() and some other password hashing algorithms, to make it easy to create and manage passwords in a secure manner
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/password-ext.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Password API","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 18 Feb 2026 20:35:46 +0000","dateModified":"Wed, 18 Feb 2026 20:35:46 +0000","description":"The Password API, or extension, is a part of the Core of PHP, which provides an easy to use wrapper around crypt() and some other password hashing algorithms, to make it easy to create and manage passwords in a secure manner","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Password API.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Password API
------------

The Password API, or extension, is a part of the Core of PHP, which provides an easy to use wrapper around crypt() and some other password hashing algorithms, to make it easy to create and manage passwords in a secure manner.

.. code-block:: php
   
   <?php
   
       echo password_hash('PHP is alive', PASSWORD_DEFAULT);
   
   ?>


`Documentation <https://www.php.net/manual/en/ref.password.php>`__

See also https://alexwebdevelop.com/php-password-hashing/
