---
type: "PHP Feature"
title: "PRNG"
description: "A ``PRNG``, or pseudorandom number generator, is an algorithm that produces a sequence of numbers which appears random, but is entirely determined by its initial seed."
resource: "https://www.php.net/manual/en/function.mt-rand.php"
tags: ["random", "number"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PRNG

A ``PRNG``, or pseudorandom number generator, is an algorithm that produces a sequence of numbers which appears random, but is entirely determined by its initial seed. Given the same seed, a PRNG always produces the same sequence, which makes it deterministic and reproducible, unlike a true random source.

PHP's ``rand()`` and ``mt_rand()`` are classic PRNGs, and, since 8.2, the ``Random\Engine`` interface exposes several interchangeable PRNG algorithms, such as ``Mt19937``, ``PcgOneseq128XslRr64`` and ``Xoshiro256StarStar``.

PRNGs are generally not suitable for cryptography, since their output can sometimes be predicted from a partial sequence. ``random_bytes()``, ``random_int()`` and the ``Random\Engine\Secure`` engine rely instead on a cryptographically secure pseudorandom number generator, also known as CSPRNG.

```php
<?php

    mt_srand(42);
    echo mt_rand(1, 100); // always the same value for the same seed
    
    $engine = new Random\Engine\Mt19937(seed: 42);
    $randomizer = new Random\Randomizer($engine);
    echo $randomizer->getInt(1, 100); // reproducible sequence

?>
```

## Documentation
- [https://www.php.net/manual/en/function.mt-rand.php](https://www.php.net/manual/en/function.mt-rand.php)

## See Also
- [Pseudorandom number generator - Wikipedia](https://en.wikipedia.org/wiki/Pseudorandom_number_generator)
- [PHP RFC: Random Extension 5.x Improvement](https://wiki.php.net/rfc/rng_extension)

## Related
- [Random](/features/random.md)
- [Random\Engine](/features/random_engine.md)
- [Random\CryptoSafeEngine](/features/random_cryptosafeengine.md)
- [Deterministic](/features/deterministic.md)
- [Determinism](/features/determinism.md)
- [Cryptography](/features/cryptography.md)

