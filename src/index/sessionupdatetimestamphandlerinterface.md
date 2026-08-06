# SessionUpdateTimestampHandlerInterface
``SessionUpdateTimestampHandlerInterface`` allows session handlers to validate session IDs and control whether the session timestamp is updated on read.

It adds two methods: ``validateId(string $id): bool`` to check whether a session ID exists, and ``updateTimestamp(string $id, string $data): bool`` to refresh the session's last-accessed time without rewriting all its data.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sessionupdatetimestamphandlerinterface.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sessionupdatetimestamphandlerinterface.html","name":"SessionUpdateTimestampHandlerInterface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 19:37:25 +0000","dateModified":"Mon, 06 Jul 2026 19:37:25 +0000","description":"``SessionUpdateTimestampHandlerInterface`` allows session handlers to validate session IDs and control whether the session timestamp is updated on read","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/SessionUpdateTimestampHandlerInterface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/class.sessionupdatetimestamphandlerinterface.php)**
## Related

+ [Session](session.ini.html)
+ [Interface](interface.ini.html)
+ [PHP Native Interfaces](php-interface.ini.html)
+ [SessionHandlerInterface](sessionhandlerinterface.ini.html)
+ [SplSubject](splsubject.ini.html)
