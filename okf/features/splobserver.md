---
type: "PHP Feature"
title: "SplObserver"
description: "``SplObserver`` is an SPL interface that represents the observer role in the Observer design pattern."
resource: "https://www.php.net/manual/en/class.splobserver.php"
tags: ["spl", "design pattern"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/class.splobserver.php](https://www.php.net/manual/en/class.splobserver.php)

## See Also
- [Observer pattern](https://en.wikipedia.org/wiki/Observer_pattern)

## Related
- [Standard PHP Library (SPL)](/features/spl.md)
- [SplSubject](/features/splsubject.md)
- [Observer Design Pattern](/features/observer.md)
- [Interface](/features/interface.md)
- [Observer Pattern](/features/observer-pattern.md)
- [PHP Native Interfaces](/features/php-interface.md)

## Details
- PHP since: 5.1
- Extension: ext-spl

