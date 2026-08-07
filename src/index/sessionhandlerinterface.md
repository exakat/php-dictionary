# SessionHandlerInterface
``SessionHandlerInterface`` defines the contract for custom PHP session save handlers. Implementing it allows storing sessions in any backend, may it be a Redis server, a database, an encrypted file, etc.

The six methods to implement are ``open()``, ``close()``, ``read()``, ``write()``, ``destroy()``, and ``gc()``. Register the handler with ``session_set_save_handler()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sessionhandlerinterface.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sessionhandlerinterface.html","name":"SessionHandlerInterface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:23:00 +0000","dateModified":"Mon, 06 Jul 2026 10:23:00 +0000","description":"``SessionHandlerInterface`` defines the contract for custom PHP session save handlers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/SessionHandlerInterface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"SessionHandlerInterface"}]}]}</script>
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

**[Documentation](https://www.php.net/manual/en/class.sessionhandlerinterface.php)**
## See Also

+ [session_set_save_handler()](https://www.php.net/manual/en/function.session-set-save-handler.php)

## Related

+ [Session](session.html)
+ [Interface](interface.html)
+ [PHP Native Interfaces](php-interface.html)
+ [SessionIdInterface](sessionidinterface.html)
+ [SessionUpdateTimestampHandlerInterface](sessionupdatetimestamphandlerinterface.html)
+ [SplSubject](splsubject.html)
