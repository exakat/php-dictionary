# Pseudonymisation
Pseudonymisation is the processing of personal data so that it can no longer be attributed to a specific individual without additional information, which is kept separately and protected.

Unlike anonymisation, pseudonymisation is reversible: the original identity can be recovered by combining the pseudonymised data with the separately-held mapping. Under the GDPR, pseudonymised data is still considered personal data, whereas properly anonymised data is not.

A common implementation replaces a direct identifier, such as an email address, with a token, hash, or surrogate key, while keeping the correspondence table isolated from the rest of the system.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pseudonymisation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pseudonymisation.html","name":"Pseudonymisation","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 07:54:29 +0000","dateModified":"Sun, 16 Aug 2026 07:54:29 +0000","description":"Pseudonymisation is the processing of personal data so that it can no longer be attributed to a specific individual without additional information, which is kept separately and protected","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Pseudonymisation.html"]}],"alternateName":["pseudonymization"],"keywords":["security","compliance","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymize.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/privacy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cryptography.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/secret.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Pseudonymization"},{"@type":"CreativeWork","name":"GDPR Article 4(5): Definitions","url":"https:\/\/gdpr-info.eu\/art-4-gdpr\/"},{"@type":"CreativeWork","name":"GDPR Article 32: Security of Processing","url":"https:\/\/gdpr-info.eu\/art-32-gdpr\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pseudonymisation"}]}]}</script>
```php
<?php

    function pseudonymize(string $userId, string $secret): string
    {
        // reversible only by whoever holds the mapping / secret
        return hash_hmac('sha256', $userId, $secret);
    }

    $token = pseudonymize('user-1234', $secretKey);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Pseudonymization)**
## See Also

+ [GDPR Article 4(5): Definitions](https://gdpr-info.eu/art-4-gdpr/)
+ [GDPR Article 32: Security of Processing](https://gdpr-info.eu/art-32-gdpr/)

## Related

+ [Anonymize](anonymize.html)
+ [Privacy](privacy.html)
+ [Cryptography](cryptography.html)
+ [Secret](secret.html)
+ [Hash](hash.html)
