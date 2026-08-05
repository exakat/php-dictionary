# Security Assertion Markup Language (SAML)
SAML, the Security Assertion Markup Language, is an open XML-based standard for exchanging authentication and authorization data between an identity provider, and a service provider. It is one of the main protocols behind enterprise Single Sign-On, SSO.

A typical SAML flow: the user tries to access a service provider, gets redirected to the identity provider to authenticate, and the identity provider sends back a signed XML assertion confirming the user's identity, which the service provider validates and trusts.

SAML is older than OpenID Connect and OAuth 2.0, and remains widely used in corporate and government single sign-on deployments, often alongside directories such as LDAP or Active Directory.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/saml.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/saml.ini.html","name":"Security Assertion Markup Language (SAML)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:47:01 +0000","dateModified":"Sun, 02 Aug 2026 06:47:01 +0000","description":"SAML, the Security Assertion Markup Language, is an open XML-based standard for exchanging authentication and authorization data between an identity provider, and a service provider","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Security Assertion Markup Language (SAML).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Security_Assertion_Markup_Language)**
## See Also

+ [SAML V2.0 Technical Overview](https://docs.oasis-open.org/security/saml/Post2.0/sstc-saml-tech-overview-2.0.html)
+ [OneLogin PHP SAML Toolkit](https://github.com/SAML-Toolkits/php-saml)

## Related

+ [Single Sign On (SSO)](sso.ini.html)
+ [OpenID Connect (OIDC)](openid.ini.html)
+ [OAuth](oauth.ini.html)
+ [Authentication](authentication.ini.html)
+ [Lightweight Directory Access Protocol (LDAP)](ldap.ini.html)
+ [Extensible Markup Language (XML)](xml.ini.html)
+ [Token](token.ini.html)

## Related packages

+ [onelogin/php-saml](https://packagist.org/packages/onelogin/php-saml)
