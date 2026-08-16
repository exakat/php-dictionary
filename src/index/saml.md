# Security Assertion Markup Language (SAML)
SAML, the Security Assertion Markup Language, is an open XML-based standard for exchanging authentication and authorization data between an identity provider, and a service provider. It is one of the main protocols behind enterprise Single Sign-On, SSO.

A typical SAML flow: the user tries to access a service provider, gets redirected to the identity provider to authenticate, and the identity provider sends back a signed XML assertion confirming the user's identity, which the service provider validates and trusts.

SAML is older than OpenID Connect and OAuth 2.0, and remains widely used in corporate and government single sign-on deployments, often alongside directories such as LDAP or Active Directory.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/saml.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/saml.html","name":"Security Assertion Markup Language (SAML)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:47:01 +0000","dateModified":"Sun, 02 Aug 2026 06:47:01 +0000","description":"SAML, the Security Assertion Markup Language, is an open XML-based standard for exchanging authentication and authorization data between an identity provider, and a service provider","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Security Assertion Markup Language (SAML).html"]}],"alternateName":["security-assertion-markup-language"],"keywords":["security","protocol","authentication","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sso.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/openid.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/oauth.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/authentication.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ldap.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xml.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/token.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Security_Assertion_Markup_Language"},{"@type":"CreativeWork","name":"SAML V2.0 Technical Overview","url":"https:\/\/docs.oasis-open.org\/security\/saml\/Post2.0\/sstc-saml-tech-overview-2.0.html"},{"@type":"CreativeWork","name":"OneLogin PHP SAML Toolkit","url":"https:\/\/github.com\/SAML-Toolkits\/php-saml"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"saml"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Security_Assertion_Markup_Language)**
## See Also

+ [SAML V2.0 Technical Overview](https://docs.oasis-open.org/security/saml/Post2.0/sstc-saml-tech-overview-2.0.html)
+ [OneLogin PHP SAML Toolkit](https://github.com/SAML-Toolkits/php-saml)

## Related

+ [Single Sign On (SSO)](sso.html)
+ [OpenID Connect (OIDC)](openid.html)
+ [OAuth](oauth.html)
+ [Authentication](authentication.html)
+ [Lightweight Directory Access Protocol (LDAP)](ldap.html)
+ [Extensible Markup Language (XML)](xml.html)
+ [Token](token.html)

## Related packages

+ [onelogin/php-saml](https://packagist.org/packages/onelogin/php-saml)
