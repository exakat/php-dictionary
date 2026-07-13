.. _oauth:
.. meta::
	:description:
		OAuth: OAuth is an open standard for access delegation, commonly used to grant applications access to user information on other services without exposing passwords.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: OAuth
	:twitter:description: OAuth: OAuth is an open standard for access delegation, commonly used to grant applications access to user information on other services without exposing passwords
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: OAuth
	:og:type: article
	:og:description: OAuth is an open standard for access delegation, commonly used to grant applications access to user information on other services without exposing passwords
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/oauth.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"OAuth","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 09:11:07 +0000","dateModified":"Sat, 11 Jul 2026 09:11:07 +0000","description":"OAuth is an open standard for access delegation, commonly used to grant applications access to user information on other services without exposing passwords","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/OAuth.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


OAuth
-----

OAuth is an open standard for access delegation, commonly used to grant applications access to user information on other services without exposing passwords. OAuth 2.0 is the current version, defined in RFC 6749.

OAuth is typically implemented via libraries such as ``league/oauth2-server`` for building an authorisation server, or ``league/oauth2-client`` for consuming third-party OAuth 2.0 providers such as Google, GitHub, or Facebook.

`Documentation <https://oauth.net/2/>`__

See also `OAuth 2.0 <https://oauth.net/2/>`_ and `RFC 6749 <https://datatracker.ietf.org/doc/html/rfc6749>`_.

Related : :ref:`Authentication <authentication>`, :ref:`Security <security>`, :ref:`JSON Web Token (JWT) <jwt>`, :ref:`Application Programming Interface (API) <api>`, :ref:`Protocol <protocol>`, :ref:`Token <token>`, :ref:`SplSubject <splsubject>`

Related packages : `league/oauth2-server <https://packagist.org/packages/league/oauth2-server>`_, `league/oauth2-client <https://packagist.org/packages/league/oauth2-client>`_
