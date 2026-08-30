---
type: "acronym"
title: "JSON Web Token (JWT)"
description: "A JSON Web Token, JWT, is a compact, URL-safe token format defined in RFC 7519, used to securely transmit claims between parties as a JSON object."
resource: "https://datatracker.ietf.org/doc/html/rfc7519"
tags: ["authentication", "security", "acronym", "rfc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# JSON Web Token (JWT)

A JSON Web Token, JWT, is a compact, URL-safe token format defined in RFC 7519, used to securely transmit claims between parties as a JSON object. JWTs are widely used for stateless authentication and authorisation in web APIs.

A JWT consists of three Base64URL-encoded parts separated by dots:

+ Header: the token type and signing algorithm, e.g. ``HS256``, ``RS256``, ...
+ Payload: the data. It is often an arbitrary JSON structure with fields, plus registered properties such as ``iss`` for issuer, ``exp`` for expiration date, ``sub`` for subject
+ Signature: computed over header + payload using a secret or private key

Because the signature is verified on receipt, the payload can be trusted without a database lookup, making JWTs ideal for stateless, horizontally-scaled services. However, JWTs carry risks: they cannot be revoked before expiry without extra infrastructure, ``alg: none`` attacks disable signature verification, and storing them in ``localStorage`` exposes them to XSS.

JWTs are typically handled via libraries such as ``firebase/php-jwt`` or ``lcobucci/jwt``.

```php
<?php

    use Firebase\JWT\JWT;
    use Firebase\JWT\Key;
    
    $secret = 'my-secret';
    $payload = ['sub' => 42, 'exp' => time() + 3600];
    
    $token = JWT::encode($payload, $secret, 'HS256');
    $decoded = JWT::decode($token, new Key($secret, 'HS256'));
    
    echo $decoded->sub; // 42

?>
```

## Documentation
- [https://datatracker.ietf.org/doc/html/rfc7519](https://datatracker.ietf.org/doc/html/rfc7519)

## See Also
- [JWT.io — Debugger and documentation](https://jwt.io/)
- [Common JWT vulnerabilities](https://portswigger.net/web-security/jwt)

## Related
- [Authentication](/features/authentication.md)
- [Token](/features/token.md)
- [Single Sign On (SSO)](/features/sso.md)
- [Session](/features/session.md)
- [JavaScript Object Notation (JSON)](/features/json.md)
- [Identity](/features/identity.md)
- [OAuth](/features/oauth.md)
- [HMAC](/features/hmac.md)

## Details
- Packagist: [firebase/php-jwt](https://packagist.org/packages/firebase/php-jwt)
- Packagist: [lcobucci/jwt](https://packagist.org/packages/lcobucci/jwt)

