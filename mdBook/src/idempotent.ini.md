# Idempotent
Idempotent is said of an operation, which yields always the same result after the first call. In other words, repeating the operation does not produce a different result beyond the initial application.

This is the case of ``strtolower()`` and ``strtoupper()``: once the string has been made lower case, resp. upper case, calling the same function again on the string will not change the result.

In distributed systems and HTTP APIs, idempotency is enforced through an idempotency key: a unique identifier, typically a ``UUID``, supplied by the client with each request. The server stores the outcome of the first request under that key and returns the cached result for any subsequent request carrying the same key, preventing duplicate side-effects such as double payments or duplicate record creation.
```php
<?php

    $string = aBC;
    
    $string1 = strtolower($string); // abc
    $string2 = strtolower($string2); // abc
    $string3 = strtolower($string3); // abc
    $string4 = strtolower($string4); // abc
    // ... 

?>
```

## See Also

+ [Idempotence](https://en.wikipedia.org/wiki/Idempotence)
+ [Designing Idempotent PHP APIs for Distributed Systems](https://medium.com/tech-vibes/designing-idempotent-php-apis-for-distributed-systems-c1b52b1862b1)
+ [Idempotency: What, Why and How](https://wendelladriel.com/blog/idempotency-what-why-and-how)

Related : [strtolower()](strtolower()), [Determinism](Determinism), [Useless](Useless), [Deduplication](Deduplication), [Universally Unique IDentifier (UUID)](Universally Unique IDentifier (UUID)), [Unique Identifier](Unique Identifier), [Fingerprint](Fingerprint), [HTTP Method](HTTP Method), [Replay](Replay), [Retry](Retry), [Time To Live (TTL)](Time To Live (TTL)), [Webhook](Webhook)
