# Cybersecurity and Infrastructure Security Agency (CISA)
CISA, the Cybersecurity and Infrastructure Security Agency, is the US federal agency that works on the security and resilience of critical infrastructure. For PHP developers, its most useful output is the Known Exploited Vulnerabilities, aka KEV, catalog, a list of CVEs that attackers are known to use in real intrusions. A CVE on that list is a higher priority than one that is only theoretical, so it should be patched first.

CISA also publishes security advisories and secure-coding guidance. Some of that guidance names memory-safety and injection problems that PHP applications share with other languages, such as SQL injection, unsafe deserialisation and unrestricted file upload.

The agency is a government body. Its catalog is public and can be read without an account, and it is often used to decide which dependency or server upgrade is urgent.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cisa.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cisa.html","name":"Cybersecurity and Infrastructure Security Agency (CISA)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Nov 2026 10:15:39 +0000","dateModified":"Tue, 10 Nov 2026 10:15:39 +0000","description":"CISA, the Cybersecurity and Infrastructure Security Agency, is the US federal agency that works on the security and resilience of critical infrastructure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cisa.html"]}],"alternateName":["cybersecurity-and-infrastructure-security-agency"],"keywords":["security","organisation","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cve.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vulnerability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql-injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unserialize.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.cisa.gov\/known-exploited-vulnerabilities-catalog"},{"@type":"CreativeWork","name":"Cybersecurity and Infrastructure Security Agency - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Cybersecurity_and_Infrastructure_Security_Agency"},{"@type":"CreativeWork","name":"CISA Known Exploited Vulnerabilities Catalog","url":"https:\/\/www.cisa.gov\/known-exploited-vulnerabilities-catalog"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.41","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"cisa"}]}]}</script>
```php
<?php

    // Before deploying, check whether a known exploited CVE affects your PHP version or a dependency.
    // The KEV catalog is published by CISA as a JSON feed at:
    // https://www.cisa.gov/known-exploited-vulnerabilities-catalog

    $advisory = [
        'cve'        => 'CVE-XXXX-YYYY',   // placeholder identifier
        'product'    => 'PHP',
        'listedInKev' => true,
    ];

    if ($advisory['listedInKev']) {
        // treat as urgent: upgrade or apply the vendor patch now
    }

?>
```

**[Documentation](https://www.cisa.gov/known-exploited-vulnerabilities-catalog)**
## See Also

+ [Cybersecurity and Infrastructure Security Agency - Wikipedia](https://en.wikipedia.org/wiki/Cybersecurity_and_Infrastructure_Security_Agency)
+ [CISA Known Exploited Vulnerabilities Catalog](https://www.cisa.gov/known-exploited-vulnerabilities-catalog)

## Related

+ [Common Vulnerabilities And Exposures (CVE)](cve.html)
+ [Vulnerability](vulnerability.html)
+ [Security](security.html)
+ [SQL Injection](sql-injection.html)
+ [Unserialization](unserialize.html)
