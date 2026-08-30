---
type: "PHP Feature"
title: "SplSubject"
description: "``SplSubject`` is an SPL interface that represents the subject, also known as the observable, role in the Observer design pattern."
resource: "https://www.php.net/manual/en/class.splsubject.php"
tags: ["spl", "design pattern"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/class.splsubject.php](https://www.php.net/manual/en/class.splsubject.php)

## See Also
- [Observer pattern](https://en.wikipedia.org/wiki/Observer_pattern)

## Related
- [Standard PHP Library (SPL)](/features/spl.md)
- [SplObserver](/features/splobserver.md)
- [Observer Pattern](/features/observer-pattern.md)
- [Interface](/features/interface.md)
- [SplObjectStorage](/features/splobjectstorage.md)
- [Domain](/features/domain.md)
- [Domain Name](/features/domain-name.md)
- [DOMChildNode](/features/domchildnode.md)
- [DOMParentNode](/features/domparentnode.md)
- [Error Suppression](/features/error-suppression.md)
- [OAuth](/features/oauth.md)
- [Option](/features/option.md)
- [Random\CryptoSafeEngine](/features/random_cryptosafeengine.md)
- [Random\Engine](/features/random_engine.md)
- [RecursiveArrayIterator](/features/recursivearrayiterator.md)
- [RecursiveDirectoryIterator](/features/recursivedirectoryiterator.md)
- [Redirect](/features/redirect.md)
- [Reflector](/features/reflector.md)
- [SeekableIterator](/features/seekableiterator.md)
- [Sequence](/features/sequence.md)
- [serialize_precision](/features/serialize_precision.md)
- [Serverless](/features/serverless.md)
- [SessionHandlerInterface](/features/sessionhandlerinterface.md)
- [SessionIdInterface](/features/sessionidinterface.md)
- [SessionUpdateTimestampHandlerInterface](/features/sessionupdatetimestamphandlerinterface.md)
- [Set](/features/set.md)
- [Shell Exec](/features/shell-exec.md)
- [SplFileInfo](/features/splfileinfo.md)
- [PHP Native Interfaces](/features/php-interface.md)

## Details
- PHP since: 5.1
- Extension: ext-spl

