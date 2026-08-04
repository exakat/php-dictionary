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

## See Also

+ [Random\Randomizer](https://www.php.net/manual/en/class.random-randomizer.php)

Related : [Random](Random), [Interface](Interface), [PHP Native Interfaces](PHP Native Interfaces), [Random\CryptoSafeEngine](Random\CryptoSafeEngine), [Deterministic](Deterministic)
