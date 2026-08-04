# SplSubject
``SplSubject`` is an SPL interface that represents the subject, also known as the observable, role in the Observer design pattern. Classes implementing ``SplSubject`` must define three methods: ``attach(SplObserver $observer)``, ``detach(SplObserver $observer)``, and ``notify()``.

When the subject's state changes, it calls ``notify()``, which in turn calls ``update()`` on each attached ``SplObserver``.

``SplSubject`` is the counterpart of ``SplObserver``: together they provide a built-in, standardised contract for the Observer pattern.
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

        public function getState(): string {
            return $this->state;
        }
    }

?>
```

## See Also

+ [Observer pattern](https://en.wikipedia.org/wiki/Observer_pattern)

Related : [Standard PHP Library (SPL)](Standard PHP Library (SPL)), [SplObserver](SplObserver), [Observer Pattern](Observer Pattern), [Interface](Interface), [SplObjectStorage](SplObjectStorage), [Domain](Domain), [Domain Name](Domain Name), [DOMChildNode](DOMChildNode), [DOMParentNode](DOMParentNode), [Error Suppression](Error Suppression), [OAuth](OAuth), [Option](Option), [Random\CryptoSafeEngine](Random\CryptoSafeEngine), [Random\Engine](Random\Engine), [RecursiveArrayIterator](RecursiveArrayIterator), [RecursiveDirectoryIterator](RecursiveDirectoryIterator), [Redirect](Redirect), [Reflector](Reflector), [SeekableIterator](SeekableIterator), [Sequence](Sequence), [serialize_precision](serialize_precision), [Serverless](Serverless), [SessionHandlerInterface](SessionHandlerInterface), [SessionIdInterface](SessionIdInterface), [SessionUpdateTimestampHandlerInterface](SessionUpdateTimestampHandlerInterface), [Set](Set), [Shell Exec](Shell Exec), [SplFileInfo](SplFileInfo), [PHP Native Interfaces](PHP Native Interfaces)
