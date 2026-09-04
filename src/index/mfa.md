# Multi-Factor Authentication (MFA)
Multi-Factor Authentication, MFA, also called two-factor authentication when exactly two factors are used, is a security mechanism that requires a user to provide two or more independent verification factors before access is granted. The three classical factors are:

+ Something known: a password or PIN.
+ Something possessed: a hardware token, authenticator app, ``TOTP``/``HOTP``, or ``SMS`` code.
+ Something being: a biometric such as a fingerprint or face recognition.

Requiring at least two factors dramatically reduces the risk of account compromise: stealing a password alone is no longer enough.

In the PHP ecosystem, MFA is relevant both at the application level, protecting user accounts, and at the infrastructure level. Packagist, for example, has introduced mandatory MFA for package publishers to harden the supply chain against account takeover.

PHP itself does not ship MFA libraries, but the ecosystem offers several: ``scheb/2fa-bundle`` with Symfony, ``pragmarx/google2fa`` with Laravel, and generic ``TOTP``/``HOTP`` packages.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mfa.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mfa.html","name":"Multi-Factor Authentication (MFA)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Sep 2026 10:21:24 +0000","dateModified":"Fri, 04 Sep 2026 10:21:24 +0000","description":"Multi-Factor Authentication, MFA, also called two-factor authentication when exactly two factors are used, is a security mechanism that requires a user to provide two or more independent verification factors before access is granted","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mfa.html"]}],"alternateName":["two-factor-authentication","2fa","multi-factor"],"keywords":["security","authentication","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/authentication.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/otp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sso.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/oauth.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/password.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/supply-chain-attack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/packagist.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Multi-factor_authentication"},{"@type":"CreativeWork","name":"The Quiet Shift Reshaping PHP Security","url":"https:\/\/www.linkedin.com\/pulse\/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc\/"},{"@type":"CreativeWork","name":"NIST SP 800-63B: MFA guidelines","url":"https:\/\/pages.nist.gov\/800-63-3\/sp800-63b.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"mfa"}]}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Multi-factor_authentication)**
## See Also

+ [The Quiet Shift Reshaping PHP Security](https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/)
+ [NIST SP 800-63B: MFA guidelines](https://pages.nist.gov/800-63-3/sp800-63b.html)

## Related

+ [Authentication](authentication.html)
+ [One-Time Password (OTP)](otp.html)
+ [Single Sign On (SSO)](sso.html)
+ [OAuth](oauth.html)
+ [Password](password.html)
+ [Security](security.html)
+ [Supply Chain Attack](supply-chain-attack.html)
+ [Packagist](packagist.html)

## Related packages

+ [scheb/2fa-bundle](https://packagist.org/packages/scheb/2fa-bundle)
+ [pragmarx/google2fa](https://packagist.org/packages/pragmarx/google2fa)
+ [spomky-labs/otphp](https://packagist.org/packages/spomky-labs/otphp)
