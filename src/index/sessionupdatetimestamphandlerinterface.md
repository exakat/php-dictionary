# SessionUpdateTimestampHandlerInterface
``SessionUpdateTimestampHandlerInterface`` allows session handlers to validate session IDs and control whether the session timestamp is updated on read.

It adds two methods: ``validateId(string $id): bool`` to check whether a session ID exists, and ``updateTimestamp(string $id, string $data): bool`` to refresh the session's last-accessed time without rewriting all its data.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sessionupdatetimestamphandlerinterface.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sessionupdatetimestamphandlerinterface.html","name":"SessionUpdateTimestampHandlerInterface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:01:43 +0000","dateModified":"Sat, 08 Aug 2026 08:01:43 +0000","description":"SessionUpdateTimestampHandlerInterface allows session handlers to validate session IDs and control whether the session timestamp is updated on read","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/SessionUpdateTimestampHandlerInterface.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sessionupdatetimestamphandlerinterface"}]}]}</script>
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
## See Also

+ [SessionUpdateTimestampHandlerInterface (Interface) - PHP - W3cubDocs](https://docs.w3cub.com/php/class.sessionupdatetimestamphandlerinterface.html)

## Related

+ [Session](session.html)
+ [Interface](interface.html)
+ [PHP Native Interfaces](php-interface.html)
+ [SessionHandlerInterface](sessionhandlerinterface.html)
+ [SplSubject](splsubject.html)
