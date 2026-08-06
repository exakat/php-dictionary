# Observer Pattern
The Observer pattern defines a one-to-many dependency between objects: when one object changes state, all registered dependents are notified automatically.

PHP provides built-in interfaces ``SplSubject`` and ``SplObserver`` to implement this pattern natively. It is also the basis for event-driven systems, message buses, and reactive frameworks.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/observer-pattern.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/observer-pattern.html","name":"Observer Pattern","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:50:35 +0000","dateModified":"Wed, 15 Jul 2026 13:50:35 +0000","description":"The Observer pattern defines a one-to-many dependency between objects: when one object changes state, all registered dependents are notified automatically","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Observer Pattern.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class EventSource implements SplSubject {
        private SplObjectStorage $observers;
        private string $state = '';
    
        public function __construct() {
            $this->observers = new SplObjectStorage();
        }
    
        public function attach(SplObserver $observer): void {
            $this->observers->attach($observer);
        }
    
        public function detach(SplObserver $observer): void {
            $this->observers->detach($observer);
        }
    
        public function notify(): void {
            foreach ($this->observers as $observer) {
                $observer->update($this);
            }
        }
    
        public function setState(string $state): void {
            $this->state = $state;
            $this->notify();
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.splsubject.php)**
## See Also

+ [SplObserver](https://www.php.net/manual/en/class.splobserver.php)
+ [Observer pattern](https://en.wikipedia.org/wiki/Observer_pattern)

## Related

+ [Design Pattern](design-pattern.ini.html)
+ [Observer Design Pattern](observer.ini.html)
+ [SplObserver](splobserver.ini.html)
+ [SplSubject](splsubject.ini.html)
