---
type: "acronym"
title: "Multi-Factor Authentication (MFA)"
description: "Multi-Factor Authentication, MFA, is a security mechanism that requires a user to provide two or more independent verification factors before access is granted."
resource: "https://en.wikipedia.org/wiki/Multi-factor_authentication"
tags: ["security", "authentication", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Multi-Factor Authentication (MFA)

Multi-Factor Authentication, MFA, is a security mechanism that requires a user to provide two or more independent verification factors before access is granted. The three classical factors are:

+ Something known: a password or PIN.
+ Something possessed: a hardware token, authenticator app, TOTP/HOTP, or SMS code.
+ Something being: a biometric such as a fingerprint or face recognition.

Requiring at least two factors dramatically reduces the risk of account compromise: stealing a password alone is no longer enough.

In the PHP ecosystem, MFA is relevant both at the application level, protecting user accounts, and at the infrastructure level. Packagist, for example, has introduced mandatory MFA for package publishers to harden the supply chain against account takeover.

PHP itself does not ship MFA libraries, but the ecosystem offers several: ``scheb/2fa-bundle`` with Symfony, ``pragmarx/google2fa`` with Laravel, and generic TOTP/HOTP packages.

```php
<?php

    use OTPHP\TOTP;
    
    // Generate a TOTP secret for a user at enrolment time
    $totp   = TOTP::generate();
    $secret = $totp->getSecret(); // store this in the user record
    
    // At login time, verify the code the user typed
    $userCode = $_POST['totp_code'];
    if (!$totp->verify($userCode)) {
        throw new RuntimeException('Invalid MFA code');
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Multi-factor_authentication](https://en.wikipedia.org/wiki/Multi-factor_authentication)

## See Also
- [The Quiet Shift Reshaping PHP Security](https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/)
- [NIST SP 800-63B: MFA guidelines](https://pages.nist.gov/800-63-3/sp800-63b.html)

## Related
- [Authentication](/features/authentication.md)
- [One-Time Password (OTP)](/features/otp.md)
- [Single Sign On (SSO)](/features/sso.md)
- [OAuth](/features/oauth.md)
- [Password](/features/password.md)
- [Security](/features/security.md)
- [Supply Chain Attack](/features/supply-chain-attack.md)
- [Packagist](/features/packagist.md)

## Details
- Packagist: [scheb/2fa-bundle](https://packagist.org/packages/scheb/2fa-bundle)
- Packagist: [pragmarx/google2fa](https://packagist.org/packages/pragmarx/google2fa)
- Packagist: [spomky-labs/otphp](https://packagist.org/packages/spomky-labs/otphp)

