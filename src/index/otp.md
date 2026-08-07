# One-Time Password (OTP)
A One-Time Password, the OTP, is a password that is valid for only one authentication session or transaction. Unlike static passwords, OTPs are generated dynamically and expire quickly, making them much more resistant to replay attacks.

There are two main OTP algorithms: ``TOTP``, Time-based One-Time Password RFC 6238, which generates a code based on the current time, and ``HOTP``, HMAC-based One-Time Password RFC 4226, which generates a code based on a counter.

TOTP is the standard used by authenticator apps such as Google Authenticator, Authy, and hardware tokens. Each code is typically 6 digits long and valid for 30 seconds.

OTP generation is commonly handled by libraries such as ``spomky-labs/otphp``, ``OTPHP`` in the Symfony ecosystem, or ``pragmarx/google2fa`` for Laravel applications.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/otp.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/otp.html","name":"One-Time Password (OTP)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:21:15 +0000","dateModified":"Fri, 10 Jul 2026 09:21:15 +0000","description":"A One-Time Password, the OTP, is a password that is valid for only one authentication session or transaction","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/One-Time Password (OTP).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"One-Time Password (OTP)"}]}]}</script>
```php
<?php

    use OTPHP\TOTP;
    
    $totp = TOTP::generate();
    echo 'Secret: ' . $totp->getSecret();
    echo 'Current OTP: ' . $totp->now();
    
    // Verify a code provided by the user
    $userCode = '123456';
    if ($totp->verify($userCode)) {
        echo 'Valid OTP';
    }

?>
```

**[Documentation](https://www.php.net/manual/en/book.hash.php)**
## See Also

+ [RFC 6238 – TOTP](https://datatracker.ietf.org/doc/html/rfc6238)
+ [RFC 4226 – HOTP](https://datatracker.ietf.org/doc/html/rfc4226)

## Related

+ [Authentication](authentication.html)
+ [Multi-Factor Authentication (MFA)](mfa.html)
+ [Cryptography](cryptography.html)
+ [Cryptographic Hash](hash-crypto.html)
+ [HMAC](hmac.html)
+ [Nonce](nonce.html)
+ [Secret](secret.html)
+ [Password](password.html)
+ [Single Sign On (SSO)](sso.html)

## Related packages

+ [spomky-labs/otphp](https://packagist.org/packages/spomky-labs/otphp)
+ [pragmarx/google2fa](https://packagist.org/packages/pragmarx/google2fa)
