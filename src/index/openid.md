# OpenID Connect (OIDC)
OpenID Connect, aka OIDC, is an identity layer built on top of OAuth 2.0. Where OAuth 2.0 only grants delegated access to resources, OpenID Connect adds a standardized way for a client to verify who the user is, by requesting an ID Token, a signed JWT containing the user's identity claims, alongside the usual access token.

OpenID Connect is commonly used to implement 'Login with...' buttons, single sign-on, SSO, across web and mobile applications, relying on identity providers such as Google, Microsoft, or Keycloak.

PHP libraries such as ``jumbojett/openid-connect-php`` implement the client side of the protocol: discovery of the provider's configuration, redirection to the authorization endpoint, and validation of the returned ID Token.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/openid.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/openid.html","name":"OpenID Connect (OIDC)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:45:17 +0000","dateModified":"Sun, 02 Aug 2026 06:45:17 +0000","description":"OpenID Connect, aka OIDC, is an identity layer built on top of OAuth 2","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/OpenID Connect (OIDC).html"]}],"alternateName":["oidc","openid-connect"],"keywords":["security","protocol","authentication","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/oauth.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sso.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/saml.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jwt.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/authentication.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/token.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/openid.net\/developers\/how-connect-works\/"},{"@type":"CreativeWork","name":"OpenID Connect Core 1.0","url":"https:\/\/openid.net\/specs\/openid-connect-core-1_0.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"openid"}]}]}</script>
```php
<?php

    use Jumbojett\OpenIDConnectClient;

    $oidc = new OpenIDConnectClient(
        'https://accounts.example.com',
        'client-id',
        'client-secret'
    );
    $oidc->authenticate();
    $name = $oidc->requestUserInfo('name');

?>
```

**[Documentation](https://openid.net/developers/how-connect-works/)**
## See Also

+ [OpenID Connect Core 1.0](https://openid.net/specs/openid-connect-core-1_0.html)

## Related

+ [OAuth](oauth.html)
+ [Single Sign On (SSO)](sso.html)
+ [Security Assertion Markup Language (SAML)](saml.html)
+ [JSON Web Token (JWT)](jwt.html)
+ [Authentication](authentication.html)
+ [Token](token.html)

## Related packages

+ [jumbojett/openid-connect-php](https://packagist.org/packages/jumbojett/openid-connect-php)
