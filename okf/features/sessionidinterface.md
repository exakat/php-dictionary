---
type: "PHP Feature"
title: "SessionIdInterface"
description: "``SessionIdInterface`` is an optional interface a session handler can implement to generate its own session IDs."
resource: "https://www.php.net/manual/en/class.sessionidinterface.php"
tags: ["session", "interface"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/class.sessionidinterface.php](https://www.php.net/manual/en/class.sessionidinterface.php)

## See Also
- [A complete overview of PHP session handler life cycle](https://gist.github.com/franksacco/d6e943c41189f8ee306c182bf8f07654)

## Related
- [Session](/features/session.md)
- [Interface](/features/interface.md)
- [PHP Native Interfaces](/features/php-interface.md)
- [SessionHandlerInterface](/features/sessionhandlerinterface.md)
- [SplSubject](/features/splsubject.md)

## Details
- PHP since: 5.5.1

