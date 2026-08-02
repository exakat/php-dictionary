.. _saml:
.. _security-assertion-markup-language:
.. meta::
	:description:
		Security Assertion Markup Language (SAML): SAML, the Security Assertion Markup Language, is an open XML-based standard for exchanging authentication and authorization data between an identity provider, and a service provider.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Security Assertion Markup Language (SAML)
	:twitter:description: Security Assertion Markup Language (SAML): SAML, the Security Assertion Markup Language, is an open XML-based standard for exchanging authentication and authorization data between an identity provider, and a service provider
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Security Assertion Markup Language (SAML)
	:og:type: article
	:og:description: SAML, the Security Assertion Markup Language, is an open XML-based standard for exchanging authentication and authorization data between an identity provider, and a service provider
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/saml.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/saml.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/saml.ini.html","name":"Security Assertion Markup Language (SAML)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:47:01 +0000","dateModified":"Sun, 02 Aug 2026 06:47:01 +0000","description":"SAML, the Security Assertion Markup Language, is an open XML-based standard for exchanging authentication and authorization data between an identity provider, and a service provider","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Security Assertion Markup Language (SAML).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Security Assertion Markup Language (SAML)
-----------------------------------------

SAML, the Security Assertion Markup Language, is an open XML-based standard for exchanging authentication and authorization data between an identity provider, and a service provider. It is one of the main protocols behind enterprise Single Sign-On, SSO.

A typical SAML flow: the user tries to access a service provider, gets redirected to the identity provider to authenticate, and the identity provider sends back a signed XML assertion confirming the user's identity, which the service provider validates and trusts.

SAML is older than OpenID Connect and OAuth 2.0, and remains widely used in corporate and government single sign-on deployments, often alongside directories such as LDAP or Active Directory.

`Documentation <https://en.wikipedia.org/wiki/Security_Assertion_Markup_Language>`__

See also `SAML V2.0 Technical Overview <https://docs.oasis-open.org/security/saml/Post2.0/sstc-saml-tech-overview-2.0.html>`_ and `OneLogin PHP SAML Toolkit <https://github.com/SAML-Toolkits/php-saml>`_.

Related : :ref:`Single Sign On (SSO) <sso>`, :ref:`OpenID Connect (OIDC) <openid>`, :ref:`OAuth <oauth>`, :ref:`Authentication <authentication>`, :ref:`Lightweight Directory Access Protocol (LDAP) <ldap>`, :ref:`Extensible Markup Language (XML) <xml>`, :ref:`Token <token>`

Related packages : `onelogin/php-saml <https://packagist.org/packages/onelogin/php-saml>`_
