---
type: "PHP Feature"
title: "Random"
description: "Random generators generate numbers or strings."
resource: "https://www.php.net/manual/en/function.random-bytes.php"
tags: ["cryptography", "number"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Random

Random generators generate numbers or strings.

``random_bytes()``, ``random_int()`` and ``openssl_random_pseudo_bytes()`` produce pseudo-random data, suitable for cryptography.

Traditional native functions, such as ``rand()`` and ``mt_rand()``, are not recommended for cryptography.

```php
<?php

  $bytes = random_bytes(5);
  var_dump(bin2hex($bytes));

?>
```

## Documentation
- [https://www.php.net/manual/en/function.random-bytes.php](https://www.php.net/manual/en/function.random-bytes.php)

## See Also
- [How to Use the rand() Function in PHP](https://pimylifeup.com/php-rand/)

## Related
- [Cryptography](/features/cryptography.md)
- [Deterministic](/features/deterministic.md)
- [Dataset](/features/dataset.md)
- [Determinism](/features/determinism.md)
- [Random\CryptoSafeEngine](/features/random_cryptosafeengine.md)
- [Random\Engine](/features/random_engine.md)

