# Observer Pattern
The Observer pattern defines a one-to-many dependency between objects: when one object changes state, all registered dependents are notified automatically.

PHP provides built-in interfaces ``SplSubject`` and ``SplObserver`` to implement this pattern natively. It is also the basis for event-driven systems, message buses, and reactive frameworks.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/observer-pattern.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/observer-pattern.html","name":"Observer Pattern","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:50:35 +0000","dateModified":"Wed, 15 Jul 2026 13:50:35 +0000","description":"The Observer pattern defines a one-to-many dependency between objects: when one object changes state, all registered dependents are notified automatically","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Observer Pattern.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Observer Pattern"}]}]}</script>
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

+ [Design Pattern](design-pattern.html)
+ [Observer Design Pattern](observer.html)
+ [SplObserver](splobserver.html)
+ [SplSubject](splsubject.html)
