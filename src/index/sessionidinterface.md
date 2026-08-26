# SessionIdInterface
``SessionIdInterface`` is an optional interface a session handler can implement to generate its own session IDs. It defines a single method ``create_sid(): string`` returning a new unique session identifier.

When PHP needs a new session ID and the handler implements this interface, ``create_sid()`` is called instead of the built-in ID generation.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sessionidinterface.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sessionidinterface.html","name":"SessionIdInterface","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:01:43 +0000","dateModified":"Sat, 08 Aug 2026 08:01:43 +0000","description":"SessionIdInterface is an optional interface a session handler can implement to generate its own session IDs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sessionidinterface.html"]}],"keywords":["session","interface"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/session.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sessionhandlerinterface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splsubject.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.sessionidinterface.php"},{"@type":"CreativeWork","name":"A complete overview of PHP session handler life cycle","url":"https:\/\/gist.github.com\/franksacco\/d6e943c41189f8ee306c182bf8f07654"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sessionidinterface"}]}]}</script>
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
## See Also

+ [A complete overview of PHP session handler life cycle](https://gist.github.com/franksacco/d6e943c41189f8ee306c182bf8f07654)

## Related

+ [Session](session.html)
+ [Interface](interface.html)
+ [PHP Native Interfaces](php-interface.html)
+ [SessionHandlerInterface](sessionhandlerinterface.html)
+ [SplSubject](splsubject.html)
