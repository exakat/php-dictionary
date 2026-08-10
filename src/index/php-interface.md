# PHP Native Interfaces
PHP defines its own native interfaces. They are used with the native classes, and are usually available with custom code. 

For example, ``Countable`` is a PHP native interface, which design objects that can be passed to ``count()`` function. On the other hand, ``Throwable`` is a native interface, which is characteristic of ``Exception`` and ``Error``. It may be used for typing, with ``catch`` clauses, or with ``instanceof`` but must be implemented by extending the two former classes.

Native interfaces depend on the compiled extensions. Native interfaces are introduced in major or minor versions, so their number evolve with time.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-interface.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-interface.html","name":"PHP Native Interfaces","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"PHP defines its own native interfaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/PHP Native Interfaces.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"PHP Native Interfaces"}]}]}</script>
```php
<?php

    print_r(get_declared_interfaces());

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.interfaces.php)**
## Related

+ [Traversable](traversable.html)
+ [IteratorAggregate](iteratoraggregate.html)
+ [Iterator](iterator.html)
+ [Serializable](serializable.html)
+ [ArrayAccess](arrayaccess.html)
+ [Countable Interface](countable.html)
+ [Stringable](stringable.html)
+ [Throwable](throwable.html)
+ [UnitEnum](unitenum.html)
+ [BackedEnum](backedenum.html)
+ [DateTimeInterface](datetimeinterface.html)
+ [DOMParentNode](domparentnode.html)
+ [DOMChildNode](domchildnode.html)
+ [JsonSerializable](jsonserializable.html)
+ [RecursiveIterator](recursiveiterator.html)
+ [OuterIterator](outeriterator.html)
+ [SeekableIterator](seekableiterator.html)
+ [SplObserver](splobserver.html)
+ [SplSubject](splsubject.html)
+ [SessionHandlerInterface](sessionhandlerinterface.html)
+ [SessionIdInterface](sessionidinterface.html)
+ [SessionUpdateTimestampHandlerInterface](sessionupdatetimestamphandlerinterface.html)
+ [Reflector](reflector.html)
+ [Random\\CryptoSafeEngine](random_cryptosafeengine.html)
+ [Random\\Engine](random_engine.html)
