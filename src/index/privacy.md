# Privacy
Privacy in software refers to the protection of personal and sensitive user data. It encompasses both legal obligations, such as GDPR in the EU, CCPA in California, LGPD in Brazil, and technical measures that prevent unauthorised collection, storage, processing, or disclosure of personal information.

In applications, privacy considerations include:

+ Minimising data collection: only collecting data that is strictly necessary
+ Encryption: storing sensitive data, such as passwords, secrets, personal informatin, in encrypted or hashed form
+ Anonymisation and pseudonymisation: replacing identifying information with tokens or hashes
+ Consent management: obtaining and recording user consent before collecting data
+ Data retention policies: deleting data after its retention period expires
+ Access controls: restricting which parts of the application can read personal data
+ Audit trails: logging access to sensitive data
+ Secure transmission: using HTTPS and TLS for all data in transit

PHP's ``SensitiveParameter`` attribute prevents sensitive argument values from appearing in stack traces.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/privacy.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/privacy.html","name":"Privacy","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:31:08 +0000","dateModified":"Tue, 14 Jul 2026 05:31:08 +0000","description":"Privacy in software refers to the protection of personal and sensitive user data","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Privacy.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // PHP 8.2+: SensitiveParameter prevents the value from appearing in stack traces
    function authenticate(
        string $username,
        #[\SensitiveParameter] string $password
    ): bool {
        // ...
        return password_verify($password, getStoredHash($username));
    }
    
    // Anonymising an email address for logging
    function anonymizeEmail(string $email): string
    {
        [$local, $domain] = explode('@', $email);
        return substr($local, 0, 2) . '***@' . $domain;
    }

?>
```

**[Documentation](https://gdpr-info.eu/)**
## See Also

+ [PHP SensitiveParameter attribute](https://www.php.net/manual/en/class.sensitiveparameter.php)
+ [OWASP Privacy Risks](https://owasp.org/www-project-top-10-privacy-risks/)

## Related

+ [Security](security.ini.html)
+ [Compliance](compliance.ini.html)
+ [Anonymize](anonymize.ini.html)
+ [Sensitive Parameter](sensitiveparameter.ini.html)
+ [Cryptography](cryptography.ini.html)
+ [Audit Trail](audit-trail.ini.html)
+ [Authentication](authentication.ini.html)
+ [Data Leak](data-leak.ini.html)
+ [Password API](password-ext.ini.html)
+ [Password](password.ini.html)
+ [Secret](secret.ini.html)
