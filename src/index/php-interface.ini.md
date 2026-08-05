# PHP Native Interfaces
PHP defines its own native interfaces. They are used with the native classes, and are usually available with custom code. 

For example, ``Countable`` is a PHP native interface, which design objects that can be passed to ``count()`` function. On the other hand, ``Throwable`` is a native interface, which is characteristic of ``Exception`` and ``Error``. It may be used for typing, with ``catch`` clauses, or with ``instanceof`` but must be implemented by extending the two former classes.

Native interfaces depend on the compiled extensions. Native interfaces are introduced in major or minor versions, so their number evolve with time.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/php-interface.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/php-interface.ini.html","name":"PHP Native Interfaces","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"PHP defines its own native interfaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/PHP Native Interfaces.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    print_r(get_declared_interfaces());

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.interfaces.php)**
## Related

+ [Traversable](traversable.ini.html)
+ [IteratorAggregate](iteratoraggregate.ini.html)
+ [Iterator](iterator.ini.html)
+ [Serializable](serializable.ini.html)
+ [ArrayAccess](arrayaccess.ini.html)
+ [Countable Interface](countable.ini.html)
+ [Stringable](stringable.ini.html)
+ [Throwable](throwable.ini.html)
+ [UnitEnum](unitenum.ini.html)
+ [BackedEnum](backedenum.ini.html)
+ [DateTimeInterface](datetimeinterface.ini.html)
+ [DOMParentNode](domparentnode.ini.html)
+ [DOMChildNode](domchildnode.ini.html)
+ [JsonSerializable](jsonserializable.ini.html)
+ [RecursiveIterator](recursiveiterator.ini.html)
+ [OuterIterator](outeriterator.ini.html)
+ [SeekableIterator](seekableiterator.ini.html)
+ [SplObserver](splobserver.ini.html)
+ [SplSubject](splsubject.ini.html)
+ [SessionHandlerInterface](sessionhandlerinterface.ini.html)
+ [SessionIdInterface](sessionidinterface.ini.html)
+ [SessionUpdateTimestampHandlerInterface](sessionupdatetimestamphandlerinterface.ini.html)
+ [Reflector](reflector.ini.html)
+ [Random\\CryptoSafeEngine](random_cryptosafeengine.ini.html)
+ [Random\\Engine](random_engine.ini.html)
