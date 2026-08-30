---
type: "extension"
title: "Random\\Engine"
description: "``Random\\Engine`` is the base interface for all random number generator engines introduced in version 8.2."
resource: "https://www.php.net/manual/en/class.random-engine.php"
tags: ["random", "interface", "extension"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Random\Engine

``Random\Engine`` is the base interface for all random number generator engines introduced in version 8.2. It defines a single method ``generate(): string`` that produces a string of random bytes.

Built-in engines include ``Random\Engine\Mt19937``, ``Random\Engine\PcgOneseq128XslRr64``, ``Random\Engine\Xoshiro256StarStar``, and the cryptographically secure ``Random\Engine\Secure``. Custom engines can be implemented by adding this interface.

```php
<?php

    $engine = new Random\Engine\Mt19937(seed: 42);
    $randomizer = new Random\Randomizer($engine);
    echo $randomizer->getInt(1, 100);

?>
```

## Documentation
- [https://www.php.net/manual/en/class.random-engine.php](https://www.php.net/manual/en/class.random-engine.php)

## See Also
- [Random\Randomizer](https://www.php.net/manual/en/class.random-randomizer.php)

## Related
- [Random](/features/random.md)
- [Interface](/features/interface.md)
- [PHP Native Interfaces](/features/php-interface.md)
- [Random\CryptoSafeEngine](/features/random_cryptosafeengine.md)
- [Deterministic](/features/deterministic.md)

## Details
- PHP since: 8.2
- Extension: ext-random

