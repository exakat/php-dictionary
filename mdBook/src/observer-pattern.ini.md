# Observer Pattern
The Observer pattern defines a one-to-many dependency between objects: when one object changes state, all registered dependents are notified automatically.

PHP provides built-in interfaces ``SplSubject`` and ``SplObserver`` to implement this pattern natively. It is also the basis for event-driven systems, message buses, and reactive frameworks.
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

## See Also

+ [SplObserver](https://www.php.net/manual/en/class.splobserver.php)
+ [Observer pattern](https://en.wikipedia.org/wiki/Observer_pattern)

Related : [Design Pattern](Design Pattern), [Observer Design Pattern](Observer Design Pattern), [SplObserver](SplObserver), [SplSubject](SplSubject)
