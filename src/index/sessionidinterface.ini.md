# SessionIdInterface
``SessionIdInterface`` is an optional interface a session handler can implement to generate its own session IDs. It defines a single method ``create_sid(): string`` returning a new unique session identifier.

When PHP needs a new session ID and the handler implements this interface, ``create_sid()`` is called instead of the built-in ID generation.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sessionidinterface.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sessionidinterface.ini.html","name":"SessionIdInterface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 19:32:48 +0000","dateModified":"Mon, 06 Jul 2026 19:32:48 +0000","description":"``SessionIdInterface`` is an optional interface a session handler can implement to generate its own session IDs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/SessionIdInterface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/class.sessionidinterface.php)**
## Related

+ [Session](session.ini.html)
+ [Interface](interface.ini.html)
+ [PHP Native Interfaces](php-interface.ini.html)
+ [SessionHandlerInterface](sessionhandlerinterface.ini.html)
+ [SplSubject](splsubject.ini.html)
