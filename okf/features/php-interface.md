---
type: "PHP Feature"
title: "PHP Native Interfaces"
description: "PHP defines its own native interfaces."
resource: "https://www.php.net/manual/en/language.oop5.interfaces.php"
tags: ["structure"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PHP Native Interfaces

PHP defines its own native interfaces. They are used with the native classes, and are usually available with custom code. 

For example, ``Countable`` is a PHP native interface, which designates objects that can be passed to the ``count()`` function. On the other hand, ``Throwable`` is a native interface, which is characteristic of ``Exception`` and ``Error``. It may be used for typing, with ``catch`` clauses, or with ``instanceof`` but must be implemented by extending the two former classes.

Native interfaces depend on the compiled extensions. Native interfaces are introduced in major or minor versions, so their number evolves with time.

```php
<?php

    print_r(get_declared_interfaces());

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.interfaces.php](https://www.php.net/manual/en/language.oop5.interfaces.php)

## See Also
- [Predefined Interfaces and Classes](https://www.php.net/manual/en/reserved.interfaces.php)

## Related
- [Traversable](/features/traversable.md)
- [IteratorAggregate](/features/iteratoraggregate.md)
- [Iterator](/features/iterator.md)
- [Serializable](/features/serializable.md)
- [ArrayAccess](/features/arrayaccess.md)
- [Countable Interface](/features/countable.md)
- [Stringable](/features/stringable.md)
- [Throwable](/features/throwable.md)
- [UnitEnum](/features/unitenum.md)
- [BackedEnum](/features/backedenum.md)
- [DateTimeInterface](/features/datetimeinterface.md)
- [DOMParentNode](/features/domparentnode.md)
- [DOMChildNode](/features/domchildnode.md)
- [JsonSerializable](/features/jsonserializable.md)
- [RecursiveIterator](/features/recursiveiterator.md)
- [OuterIterator](/features/outeriterator.md)
- [SeekableIterator](/features/seekableiterator.md)
- [SplObserver](/features/splobserver.md)
- [SplSubject](/features/splsubject.md)
- [SessionHandlerInterface](/features/sessionhandlerinterface.md)
- [SessionIdInterface](/features/sessionidinterface.md)
- [SessionUpdateTimestampHandlerInterface](/features/sessionupdatetimestamphandlerinterface.md)
- [Reflector](/features/reflector.md)
- [Random\CryptoSafeEngine](/features/random_cryptosafeengine.md)
- [Random\Engine](/features/random_engine.md)

