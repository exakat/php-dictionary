# SessionUpdateTimestampHandlerInterface
``SessionUpdateTimestampHandlerInterface`` allows session handlers to validate session IDs and control whether the session timestamp is updated on read.

It adds two methods: ``validateId(string $id): bool`` to check whether a session ID exists, and ``updateTimestamp(string $id, string $data): bool`` to refresh the session's last-accessed time without rewriting all its data.
```php
<?php

    class OptimisedSessionHandler implements SessionHandlerInterface, SessionUpdateTimestampHandlerInterface {
        public function validateId(string $id): bool {
            return (bool) $this->redis->exists('sess:' . $id);
        }
    
        public function updateTimestamp(string $id, string $data): bool {
            return (bool) $this->redis->expire('sess:' . $id, 1440);
        }
        // ... implement remaining SessionHandlerInterface methods
    }

?>
```

Related : [Session](Session), [Interface](Interface), [PHP Native Interfaces](PHP Native Interfaces), [SessionHandlerInterface](SessionHandlerInterface), [SplSubject](SplSubject)
