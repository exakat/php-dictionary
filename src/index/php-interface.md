# PHP Native Interfaces
PHP defines its own native interfaces. They are used with the native classes, and are usually available with custom code. 

For example, ``Countable`` is a PHP native interface, which designates objects that can be passed to the ``count()`` function. On the other hand, ``Throwable`` is a native interface, which is characteristic of ``Exception`` and ``Error``. It may be used for typing, with ``catch`` clauses, or with ``instanceof`` but must be implemented by extending the two former classes.

Native interfaces depend on the compiled extensions. Native interfaces are introduced in major or minor versions, so their number evolves with time.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-interface.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-interface.html","name":"PHP Native Interfaces","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 07:53:05 +0000","dateModified":"Wed, 19 Aug 2026 07:53:05 +0000","description":"PHP defines its own native interfaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-interface.html"]}],"keywords":["structure"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/traversable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iteratoraggregate.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serializable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arrayaccess.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/countable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stringable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throwable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unitenum.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backedenum.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetimeinterface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/domparentnode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/domchildnode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jsonserializable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursiveiterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/outeriterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/seekableiterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splobserver.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splsubject.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sessionhandlerinterface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sessionidinterface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sessionupdatetimestamphandlerinterface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reflector.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random_cryptosafeengine.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random_engine.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.interfaces.php"},{"@type":"CreativeWork","name":"Predefined Interfaces and Classes","url":"https:\/\/www.php.net\/manual\/en\/reserved.interfaces.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"php-interface"}]}]}</script>
```php
<?php

    print_r(get_declared_interfaces());

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.interfaces.php)**
## See Also

+ [Predefined Interfaces and Classes](https://www.php.net/manual/en/reserved.interfaces.php)

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
