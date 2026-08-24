# SplObserver
``SplObserver`` is an SPL interface that represents the observer role in the Observer design pattern. Classes implementing ``SplObserver`` must define the ``update(SplSubject $subject)`` method, which is called whenever the observed subject notifies its observers of a state change.

``SplObserver`` is used together with ``SplSubject``: the subject maintains a list of observers and calls their ``update()`` method when its internal state changes.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splobserver.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splobserver.html","name":"SplObserver","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"SplObserver is an SPL interface that represents the observer role in the Observer design pattern","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splobserver.html"]}],"keywords":["spl","design pattern"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splsubject.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/observer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/observer-pattern.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-interface.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.splobserver.php"},{"@type":"CreativeWork","name":"Observer pattern","url":"https:\/\/en.wikipedia.org\/wiki\/Observer_pattern"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"splobserver"}]}]}</script>
```php
<?php

    class Logger implements SplObserver {
        public function update(SplSubject $subject): void {
            echo 'State changed: ' . $subject->getState() . PHP_EOL;
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.splobserver.php)**
## See Also

+ [Observer pattern](https://en.wikipedia.org/wiki/Observer_pattern)

## Related

+ [Standard PHP Library (SPL)](spl.html)
+ [SplSubject](splsubject.html)
+ [Observer Design Pattern](observer.html)
+ [Interface](interface.html)
+ [Observer Pattern](observer-pattern.html)
+ [PHP Native Interfaces](php-interface.html)
