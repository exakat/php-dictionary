---
type: "extension"
title: "Random\\CryptoSafeEngine"
description: "``Random\\CryptoSafeEngine`` is a marker interface ``Random`` extension."
resource: "https://www.php.net/manual/en/class.random-cryptosafeengine.php"
tags: ["random", "interface", "cryptography", "extension"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Random\CryptoSafeEngine

``Random\CryptoSafeEngine`` is a marker interface ``Random`` extension. Any ``Random\Engine`` that also implements this interface guarantees cryptographically secure output.

The only built-in engine implementing it is ``Random\Engine\Secure``. Type-hinting against ``CryptoSafeEngine`` enforces that callers provide a secure source of randomness.

``Random\CryptoSafeEngine`` was introduced in version 8.2.

```php
<?php

    function generateToken(Random\CryptoSafeEngine $engine): string {
        $randomizer = new Random\Randomizer($engine);
        return bin2hex($randomizer->getBytes(16));
    }
    
    $token = generateToken(new Random\Engine\Secure());

?>
```

## Documentation
- [https://www.php.net/manual/en/class.random-cryptosafeengine.php](https://www.php.net/manual/en/class.random-cryptosafeengine.php)

## See Also
- [Random\Engine\Secure](https://www.php.net/manual/en/class.random-engine-secure.php)

## Related
- [Random](/features/random.md)
- [Cryptography](/features/cryptography.md)
- [Interface](/features/interface.md)
- [Random\Engine](/features/random_engine.md)
- [PHP Native Interfaces](/features/php-interface.md)

## Details
- PHP since: 8.2
- Extension: ext-random

