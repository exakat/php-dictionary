.. _jwt:
.. _json-web-token:
.. meta::
	:description:
		JSON Web Token (JWT): A JSON Web Token, JWT, is a compact, URL-safe token format defined in RFC 7519, used to securely transmit claims between parties as a JSON object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: JSON Web Token (JWT)
	:twitter:description: JSON Web Token (JWT): A JSON Web Token, JWT, is a compact, URL-safe token format defined in RFC 7519, used to securely transmit claims between parties as a JSON object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: JSON Web Token (JWT)
	:og:type: article
	:og:description: A JSON Web Token, JWT, is a compact, URL-safe token format defined in RFC 7519, used to securely transmit claims between parties as a JSON object
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/jwt.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"JSON Web Token (JWT)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 13:49:45 +0000","dateModified":"Fri, 05 Jun 2026 13:49:45 +0000","description":"A JSON Web Token, JWT, is a compact, URL-safe token format defined in RFC 7519, used to securely transmit claims between parties as a JSON object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/JSON Web Token (JWT).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


JSON Web Token (JWT)
--------------------

A JSON Web Token, JWT, is a compact, URL-safe token format defined in RFC 7519, used to securely transmit claims between parties as a JSON object. JWTs are widely used for stateless authentication and authorisation in web APIs.

A JWT consists of three Base64URL-encoded parts separated by dots:
+ Header: the token type and signing algorithm, e.g. ``HS256``, ``RS256``, ...
+ Payload: the data. It is often an arbitrary JSON structure with fields, plus registered properties such as ``iss`` for issuer, ``exp`` for expiration date, ``sub`` for subject
+ Signature: computed over header + payload using a secret or private key

Because the signature is verified on receipt, the payload can be trusted without a database lookup, making JWTs ideal for stateless, horizontally-scaled services. However, JWTs carry risks: they cannot be revoked before expiry without extra infrastructure, ``alg: none`` attacks disable signature verification, and storing them in ``localStorage`` exposes them to XSS.

JWTs are typically handled via libraries such as ``firebase/php-jwt`` or ``lcobucci/jwt``.

.. code-block:: php
   
   <?php
   
       use Firebase\JWT\JWT;
       use Firebase\JWT\Key;
       
       $secret = 'my-secret';
       $payload = ['sub' => 42, 'exp' => time() + 3600];
       
       $token = JWT::encode($payload, $secret, 'HS256');
       $decoded = JWT::decode($token, new Key($secret, 'HS256'));
       
       echo $decoded->sub; // 42
   
   ?>


`Documentation <https://datatracker.ietf.org/doc/html/rfc7519>`__

See also `RFC 7519 — JSON Web Token <https://datatracker.ietf.org/doc/html/rfc7519>`_, `JWT.io — Debugger and documentation <https://jwt.io/>`_ and `Common JWT vulnerabilities <https://portswigger.net/web-security/jwt>`_.

Related : :ref:`Authentication <authentication>`, :ref:`Token <token>`, :ref:`Single Sign On (SSO) <sso>`, :ref:`Session <session>`, :ref:`JavaScript Object Notation (JSON) <json>`, :ref:`Identity <identity>`, :ref:`OAuth <oauth>`, :ref:`HMAC <hmac>`

Related packages : `firebase/php-jwt <https://packagist.org/packages/firebase/php-jwt>`_, `lcobucci/jwt <https://packagist.org/packages/lcobucci/jwt>`_
