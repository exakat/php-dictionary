---
type: "PHP Feature"
title: "SessionUpdateTimestampHandlerInterface"
description: "``SessionUpdateTimestampHandlerInterface`` allows session handlers to validate session IDs and control whether the session timestamp is updated on read."
resource: "https://www.php.net/manual/en/class.sessionupdatetimestamphandlerinterface.php"
tags: ["session", "interface"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/class.sessionupdatetimestamphandlerinterface.php](https://www.php.net/manual/en/class.sessionupdatetimestamphandlerinterface.php)

## See Also
- [SessionUpdateTimestampHandlerInterface (Interface) - PHP - W3cubDocs](https://docs.w3cub.com/php/class.sessionupdatetimestamphandlerinterface.html)

## Related
- [Session](/features/session.md)
- [Interface](/features/interface.md)
- [PHP Native Interfaces](/features/php-interface.md)
- [SessionHandlerInterface](/features/sessionhandlerinterface.md)
- [SplSubject](/features/splsubject.md)

## Details
- PHP since: 7.0

