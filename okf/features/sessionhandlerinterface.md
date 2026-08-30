---
type: "PHP Feature"
title: "SessionHandlerInterface"
description: "``SessionHandlerInterface`` defines the contract for custom PHP session save handlers."
resource: "https://www.php.net/manual/en/class.sessionhandlerinterface.php"
tags: ["session", "interface"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/class.sessionhandlerinterface.php](https://www.php.net/manual/en/class.sessionhandlerinterface.php)

## See Also
- [session_set_save_handler()](https://www.php.net/manual/en/function.session-set-save-handler.php)

## Related
- [Session](/features/session.md)
- [Interface](/features/interface.md)
- [PHP Native Interfaces](/features/php-interface.md)
- [SessionIdInterface](/features/sessionidinterface.md)
- [SessionUpdateTimestampHandlerInterface](/features/sessionupdatetimestamphandlerinterface.md)
- [SplSubject](/features/splsubject.md)

## Details
- PHP since: 5.4

