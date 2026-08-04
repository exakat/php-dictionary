# SessionHandlerInterface
``SessionHandlerInterface`` defines the contract for custom PHP session save handlers. Implementing it allows storing sessions in any backend, may it be a Redis server, a database, an encrypted file, etc.

The six methods to implement are ``open()``, ``close()``, ``read()``, ``write()``, ``destroy()``, and ``gc()``. Register the handler with ``session_set_save_handler()``.
```php
<?php

class RedisSessionHandler implements SessionHandlerInterface {
    private Redis $redis;

    public function open(string $path, string $name): bool { return true; }
    public function close(): bool { return true; }

    public function read(string $id): string|false {
        return $this->redis->get('sess:' . $id) ?: '';
    }

    public function write(string $id, string $data): bool {
        return (bool) $this->redis->setex('sess:' . $id, 1440, $data);
    }

    public function destroy(string $id): bool {
        $this->redis->del('sess:' . $id);
        return true;
    }

    public function gc(int $max_lifetime): int|false { return 0; }
}

session_set_save_handler(new RedisSessionHandler());

?>
```

## See Also

+ [session_set_save_handler()](https://www.php.net/manual/en/function.session-set-save-handler.php)

Related : [Session](Session), [Interface](Interface), [PHP Native Interfaces](PHP Native Interfaces), [SessionIdInterface](SessionIdInterface), [SessionUpdateTimestampHandlerInterface](SessionUpdateTimestampHandlerInterface), [SplSubject](SplSubject)
