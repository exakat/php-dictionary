# Privacy
Privacy in software refers to the protection of personal and sensitive user data. It encompasses both legal obligations, such as GDPR in the EU, CCPA in California, LGPD in Brazil, and technical measures that prevent unauthorised collection, storage, processing, or disclosure of personal information.

In applications, privacy considerations include:

+ Minimising data collection: only collecting data that is strictly necessary
+ Encryption: storing sensitive data, such as passwords, secrets, personal information, in encrypted or hashed form
+ Anonymisation and pseudonymisation: replacing identifying information with tokens or hashes
+ Consent management: obtaining and recording user consent before collecting data
+ Data retention policies: deleting data after its retention period expires
+ Access controls: restricting which parts of the application can read personal data
+ Audit trails: logging access to sensitive data
+ Secure transmission: using HTTPS and TLS for all data in transit

PHP's ``SensitiveParameter`` attribute prevents sensitive argument values from appearing in stack traces.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/privacy.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/privacy.html","name":"Privacy","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:32:29 +0000","dateModified":"Sat, 08 Aug 2026 14:32:29 +0000","description":"Privacy in software refers to the protection of personal and sensitive user data","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Privacy.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"privacy"}]}]}</script>
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

+ [Security](security.html)
+ [Compliance](compliance.html)
+ [Anonymize](anonymize.html)
+ [Sensitive Parameter](sensitiveparameter.html)
+ [Cryptography](cryptography.html)
+ [Audit Trail](audit-trail.html)
+ [Authentication](authentication.html)
+ [Data Leak](data-leak.html)
+ [Password API](password-ext.html)
+ [Password](password.html)
+ [Secret](secret.html)
