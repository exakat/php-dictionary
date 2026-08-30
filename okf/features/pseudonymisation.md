---
type: "concept"
title: "Pseudonymisation"
description: "Pseudonymisation is the processing of personal data so that it can no longer be attributed to a specific individual without additional information, which is kept separately and protected."
resource: "https://en.wikipedia.org/wiki/Pseudonymization"
tags: ["security", "compliance", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Pseudonymisation

Pseudonymisation is the processing of personal data so that it can no longer be attributed to a specific individual without additional information, which is kept separately and protected.

Unlike anonymisation, pseudonymisation is reversible: the original identity can be recovered by combining the pseudonymised data with the separately-held mapping. Under the GDPR, pseudonymised data is still considered personal data, whereas properly anonymised data is not.

A common implementation replaces a direct identifier, such as an email address, with a token, hash, or surrogate key, while keeping the correspondence table isolated from the rest of the system.

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

## Documentation
- [https://en.wikipedia.org/wiki/Pseudonymization](https://en.wikipedia.org/wiki/Pseudonymization)

## See Also
- [GDPR Article 4(5): Definitions](https://gdpr-info.eu/art-4-gdpr/)
- [GDPR Article 32: Security of Processing](https://gdpr-info.eu/art-32-gdpr/)

## Related
- [Anonymize](/features/anonymize.md)
- [Privacy](/features/privacy.md)
- [Cryptography](/features/cryptography.md)
- [Secret](/features/secret.md)
- [Hash](/features/hash.md)

