# One-Time Password (OTP)
A One-Time Password, the OTP, is a password that is valid for only one authentication session or transaction. Unlike static passwords, OTPs are generated dynamically and expire quickly, making them much more resistant to replay attacks.

There are two main OTP algorithms: ``TOTP``, Time-based One-Time Password RFC 6238, which generates a code based on the current time, and ``HOTP``, HMAC-based One-Time Password RFC 4226, which generates a code based on a counter.

TOTP is the standard used by authenticator apps such as Google Authenticator, Authy, and hardware tokens. Each code is typically 6 digits long and valid for 30 seconds.

OTP generation is commonly handled by libraries such as ``spomky-labs/otphp``, ``OTPHP`` in the Symfony ecosystem, or ``pragmarx/google2fa`` for Laravel applications.
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

## See Also

+ [RFC 6238 – TOTP](https://datatracker.ietf.org/doc/html/rfc6238)
+ [RFC 4226 – HOTP](https://datatracker.ietf.org/doc/html/rfc4226)

Related : [Authentication](Authentication), [Multi-Factor Authentication (MFA)](Multi-Factor Authentication (MFA)), [Cryptography](Cryptography), [Cryptographic Hash](Cryptographic Hash), [HMAC](HMAC), [Nonce](Nonce), [Secret](Secret), [Password](Password), [Single Sign On (SSO)](Single Sign On (SSO))
