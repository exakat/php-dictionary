# OpenID Connect (OIDC)
OpenID Connect, aka OIDC, is an identity layer built on top of OAuth 2.0. Where OAuth 2.0 only grants delegated access to resources, OpenID Connect adds a standardized way for a client to verify who the user is, by requesting an ID Token, a signed JWT containing the user's identity claims, alongside the usual access token.

OpenID Connect is commonly used to implement 'Login with...' buttons, single sign-on, SSO, across web and mobile applications, relying on identity providers such as Google, Microsoft, or Keycloak.

PHP libraries such as ``jumbojett/openid-connect-php`` implement the client side of the protocol: discovery of the provider's configuration, redirection to the authorization endpoint, and validation of the returned ID Token.
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

## See Also

+ [OpenID Connect Core 1.0](https://openid.net/specs/openid-connect-core-1_0.html)

Related : [OAuth](OAuth), [Single Sign On (SSO)](Single Sign On (SSO)), [Security Assertion Markup Language (SAML)](Security Assertion Markup Language (SAML)), [JSON Web Token (JWT)](JSON Web Token (JWT)), [Authentication](Authentication), [Token](Token)
