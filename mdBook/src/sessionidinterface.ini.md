# SessionIdInterface
``SessionIdInterface`` is an optional interface a session handler can implement to generate its own session IDs. It defines a single method ``create_sid(): string`` returning a new unique session identifier.

When PHP needs a new session ID and the handler implements this interface, ``create_sid()`` is called instead of the built-in ID generation.
```php
<?php

    class CustomSessionHandler implements SessionHandlerInterface, SessionIdInterface {
        public function create_sid(): string {
            return bin2hex(random_bytes(16));
        }
        // ... implement remaining SessionHandlerInterface methods
    }

?>
```

Related : [Session](Session), [Interface](Interface), [PHP Native Interfaces](PHP Native Interfaces), [SessionHandlerInterface](SessionHandlerInterface), [SplSubject](SplSubject)
