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

## See Also

+ [PHP SensitiveParameter attribute](https://www.php.net/manual/en/class.sensitiveparameter.php)
+ [OWASP Privacy Risks](https://owasp.org/www-project-top-10-privacy-risks/)

Related : [Security](Security), [Compliance](Compliance), [Anonymize](Anonymize), [Sensitive Parameter](Sensitive Parameter), [Cryptography](Cryptography), [Audit Trail](Audit Trail), [Authentication](Authentication), [Data Leak](Data Leak), [Password API](Password API), [Password](Password), [Secret](Secret)
