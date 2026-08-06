# SplObserver
``SplObserver`` is an SPL interface that represents the observer role in the Observer design pattern. Classes implementing ``SplObserver`` must define the ``update(SplSubject $subject)`` method, which is called whenever the observed subject notifies its observers of a state change.

``SplObserver`` is used together with ``SplSubject``: the subject maintains a list of observers and calls their ``update()`` method when its internal state changes.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/splobserver.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/splobserver.html","name":"SplObserver","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``SplObserver`` is an SPL interface that represents the observer role in the Observer design pattern","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/SplObserver.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Standard PHP Library (SPL)](spl.ini.html)
+ [SplSubject](splsubject.ini.html)
+ [Observer Design Pattern](observer.ini.html)
+ [Interface](interface.ini.html)
+ [Observer Pattern](observer-pattern.ini.html)
+ [PHP Native Interfaces](php-interface.ini.html)
