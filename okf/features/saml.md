---
type: "acronym"
title: "Security Assertion Markup Language (SAML)"
description: "SAML, the Security Assertion Markup Language, is an open XML-based standard for exchanging authentication and authorization data between an identity provider, and a service provider."
resource: "https://en.wikipedia.org/wiki/Security_Assertion_Markup_Language"
tags: ["security", "protocol", "authentication", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Security Assertion Markup Language (SAML)

SAML, the Security Assertion Markup Language, is an open XML-based standard for exchanging authentication and authorization data between an identity provider, and a service provider. It is one of the main protocols behind enterprise Single Sign-On, SSO.

A typical SAML flow: the user tries to access a service provider, gets redirected to the identity provider to authenticate, and the identity provider sends back a signed XML assertion confirming the user's identity, which the service provider validates and trusts.

SAML is older than OpenID Connect and OAuth 2.0, and remains widely used in corporate and government single sign-on deployments, often alongside directories such as LDAP or Active Directory.

## Documentation
- [https://en.wikipedia.org/wiki/Security_Assertion_Markup_Language](https://en.wikipedia.org/wiki/Security_Assertion_Markup_Language)

## See Also
- [SAML V2.0 Technical Overview](https://docs.oasis-open.org/security/saml/Post2.0/sstc-saml-tech-overview-2.0.html)
- [OneLogin PHP SAML Toolkit](https://github.com/SAML-Toolkits/php-saml)

## Related
- [Single Sign On (SSO)](/features/sso.md)
- [OpenID Connect (OIDC)](/features/openid.md)
- [OAuth](/features/oauth.md)
- [Authentication](/features/authentication.md)
- [Lightweight Directory Access Protocol (LDAP)](/features/ldap.md)
- [Extensible Markup Language (XML)](/features/xml.md)
- [Token](/features/token.md)

## Details
- Packagist: [onelogin/php-saml](https://packagist.org/packages/onelogin/php-saml)

