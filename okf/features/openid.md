---
type: "acronym"
title: "OpenID Connect (OIDC)"
description: "OpenID Connect, aka OIDC, is an identity layer built on top of OAuth 2.0."
resource: "https://openid.net/developers/how-connect-works/"
tags: ["security", "protocol", "authentication", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://openid.net/developers/how-connect-works/](https://openid.net/developers/how-connect-works/)

## See Also
- [OpenID Connect Core 1.0](https://openid.net/specs/openid-connect-core-1_0.html)

## Related
- [OAuth](/features/oauth.md)
- [Single Sign On (SSO)](/features/sso.md)
- [Security Assertion Markup Language (SAML)](/features/saml.md)
- [JSON Web Token (JWT)](/features/jwt.md)
- [Authentication](/features/authentication.md)
- [Token](/features/token.md)

## Details
- Packagist: [jumbojett/openid-connect-php](https://packagist.org/packages/jumbojett/openid-connect-php)

