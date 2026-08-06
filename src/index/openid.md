# OpenID Connect (OIDC)
OpenID Connect, aka OIDC, is an identity layer built on top of OAuth 2.0. Where OAuth 2.0 only grants delegated access to resources, OpenID Connect adds a standardized way for a client to verify who the user is, by requesting an ID Token, a signed JWT containing the user's identity claims, alongside the usual access token.

OpenID Connect is commonly used to implement 'Login with...' buttons, single sign-on, SSO, across web and mobile applications, relying on identity providers such as Google, Microsoft, or Keycloak.

PHP libraries such as ``jumbojett/openid-connect-php`` implement the client side of the protocol: discovery of the provider's configuration, redirection to the authorization endpoint, and validation of the returned ID Token.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/openid.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/openid.html","name":"OpenID Connect (OIDC)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:45:17 +0000","dateModified":"Sun, 02 Aug 2026 06:45:17 +0000","description":"OpenID Connect, aka OIDC, is an identity layer built on top of OAuth 2","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/OpenID Connect (OIDC).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [OAuth](oauth.ini.html)
+ [Single Sign On (SSO)](sso.ini.html)
+ [Security Assertion Markup Language (SAML)](saml.ini.html)
+ [JSON Web Token (JWT)](jwt.ini.html)
+ [Authentication](authentication.ini.html)
+ [Token](token.ini.html)

## Related packages

+ [jumbojett/openid-connect-php](https://packagist.org/packages/jumbojett/openid-connect-php)
