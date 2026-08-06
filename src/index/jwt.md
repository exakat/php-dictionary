# JSON Web Token (JWT)
A JSON Web Token, JWT, is a compact, URL-safe token format defined in RFC 7519, used to securely transmit claims between parties as a JSON object. JWTs are widely used for stateless authentication and authorisation in web APIs.

A JWT consists of three Base64URL-encoded parts separated by dots:

+ Header: the token type and signing algorithm, e.g. ``HS256``, ``RS256``, ...
+ Payload: the data. It is often an arbitrary JSON structure with fields, plus registered properties such as ``iss`` for issuer, ``exp`` for expiration date, ``sub`` for subject
+ Signature: computed over header + payload using a secret or private key

Because the signature is verified on receipt, the payload can be trusted without a database lookup, making JWTs ideal for stateless, horizontally-scaled services. However, JWTs carry risks: they cannot be revoked before expiry without extra infrastructure, ``alg: none`` attacks disable signature verification, and storing them in ``localStorage`` exposes them to XSS.

JWTs are typically handled via libraries such as ``firebase/php-jwt`` or ``lcobucci/jwt``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/jwt.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/jwt.html","name":"JSON Web Token (JWT)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 05:09:45 +0000","dateModified":"Tue, 07 Jul 2026 05:09:45 +0000","description":"A JSON Web Token, JWT, is a compact, URL-safe token format defined in RFC 7519, used to securely transmit claims between parties as a JSON object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/JSON Web Token (JWT).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://datatracker.ietf.org/doc/html/rfc7519)**
## See Also

+ [JWT.io — Debugger and documentation](https://jwt.io/)
+ [Common JWT vulnerabilities](https://portswigger.net/web-security/jwt)

## Related

+ [Authentication](authentication.ini.html)
+ [Token](token.ini.html)
+ [Single Sign On (SSO)](sso.ini.html)
+ [Session](session.ini.html)
+ [JavaScript Object Notation (JSON)](json.ini.html)
+ [Identity](identity.ini.html)
+ [OAuth](oauth.ini.html)
+ [HMAC](hmac.ini.html)

## Related packages

+ [firebase/php-jwt](https://packagist.org/packages/firebase/php-jwt)
+ [lcobucci/jwt](https://packagist.org/packages/lcobucci/jwt)
