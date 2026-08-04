# SplObserver
``SplObserver`` is an SPL interface that represents the observer role in the Observer design pattern. Classes implementing ``SplObserver`` must define the ``update(SplSubject $subject)`` method, which is called whenever the observed subject notifies its observers of a state change.

``SplObserver`` is used together with ``SplSubject``: the subject maintains a list of observers and calls their ``update()`` method when its internal state changes.
```php
<?php

    class Logger implements SplObserver {
        public function update(SplSubject $subject): void {
            echo 'State changed: ' . $subject->getState() . PHP_EOL;
        }
    }

?>
```

## See Also

+ [Observer pattern](https://en.wikipedia.org/wiki/Observer_pattern)

Related : [Standard PHP Library (SPL)](Standard PHP Library (SPL)), [SplSubject](SplSubject), [Observer Design Pattern](Observer Design Pattern), [Interface](Interface), [Observer Pattern](Observer Pattern), [PHP Native Interfaces](PHP Native Interfaces)
