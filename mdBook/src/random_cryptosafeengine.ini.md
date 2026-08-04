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

## See Also

+ [Random\Engine\Secure](https://www.php.net/manual/en/class.random-engine-secure.php)

Related : [Random](Random), [Cryptography](Cryptography), [Interface](Interface), [Random\Engine](Random\Engine), [PHP Native Interfaces](PHP Native Interfaces)
