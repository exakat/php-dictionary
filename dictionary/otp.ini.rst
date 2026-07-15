.. _otp:
.. _one-time-password:
.. _totp:
.. _hotp:
.. meta::
	:description:
		One-Time Password (OTP): A One-Time Password, the OTP, is a password that is valid for only one authentication session or transaction.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: One-Time Password (OTP)
	:twitter:description: One-Time Password (OTP): A One-Time Password, the OTP, is a password that is valid for only one authentication session or transaction
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: One-Time Password (OTP)
	:og:type: article
	:og:description: A One-Time Password, the OTP, is a password that is valid for only one authentication session or transaction
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/otp.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/otp.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/otp.ini.html","name":"One-Time Password (OTP)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:21:15 +0000","dateModified":"Fri, 10 Jul 2026 09:21:15 +0000","description":"A One-Time Password, the OTP, is a password that is valid for only one authentication session or transaction","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/One-Time Password (OTP).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


One-Time Password (OTP)
-----------------------

A One-Time Password, the OTP, is a password that is valid for only one authentication session or transaction. Unlike static passwords, OTPs are generated dynamically and expire quickly, making them much more resistant to replay attacks.

There are two main OTP algorithms: ``TOTP``, Time-based One-Time Password RFC 6238, which generates a code based on the current time, and ``HOTP``, HMAC-based One-Time Password RFC 4226, which generates a code based on a counter.

TOTP is the standard used by authenticator apps such as Google Authenticator, Authy, and hardware tokens. Each code is typically 6 digits long and valid for 30 seconds.

OTP generation is commonly handled by libraries such as ``spomky-labs/otphp``, ``OTPHP`` in the Symfony ecosystem, or ``pragmarx/google2fa`` for Laravel applications.

.. code-block:: php
   
   <?php
   
       use OTPHP\TOTP;
       
       $totp = TOTP::generate();
       echo 'Secret: ' . $totp->getSecret();
       echo 'Current OTP: ' . $totp->now();
       
       // Verify a code provided by the user
       $userCode = '123456';
       if ($totp->verify($userCode)) {
           echo 'Valid OTP';
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/book.hash.php>`__

See also `RFC 6238 – TOTP <https://datatracker.ietf.org/doc/html/rfc6238>`_ and `RFC 4226 – HOTP <https://datatracker.ietf.org/doc/html/rfc4226>`_.

Related : :ref:`Authentication <authentication>`, :ref:`Multi-Factor Authentication (MFA) <mfa>`, :ref:`Cryptography <cryptography>`, :ref:`Cryptographic Hash <hash-crypto>`, :ref:`HMAC <hmac>`, :ref:`Nonce <nonce>`, :ref:`Secret <secret>`, :ref:`Password <password>`, :ref:`Single Sign On (SSO) <sso>`

Related packages : `spomky-labs/otphp <https://packagist.org/packages/spomky-labs/otphp>`_, `pragmarx/google2fa <https://packagist.org/packages/pragmarx/google2fa>`_
