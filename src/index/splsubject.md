# SplSubject
``SplSubject`` is an SPL interface that represents the subject, also known as the observable, role in the Observer design pattern. Classes implementing ``SplSubject`` must define three methods: ``attach(SplObserver $observer)``, ``detach(SplObserver $observer)``, and ``notify()``.

When the subject's state changes, it calls ``notify()``, which in turn calls ``update()`` on each attached ``SplObserver``.

``SplSubject`` is the counterpart of ``SplObserver``: together they provide a built-in, standardised contract for the Observer pattern.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splsubject.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splsubject.html","name":"SplSubject","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 18 Jun 2026 13:55:25 +0000","dateModified":"Thu, 18 Jun 2026 13:55:25 +0000","description":"``SplSubject`` is an SPL interface that represents the subject, also known as the observable, role in the Observer design pattern","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/SplSubject.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"SplSubject"}]}]}</script>
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

**[Documentation](https://www.php.net/manual/en/class.splsubject.php)**
## See Also

+ [Observer pattern](https://en.wikipedia.org/wiki/Observer_pattern)

## Related

+ [Standard PHP Library (SPL)](spl.html)
+ [SplObserver](splobserver.html)
+ [Observer Pattern](observer-pattern.html)
+ [Interface](interface.html)
+ [SplObjectStorage](splobjectstorage.html)
+ [Domain](domain.html)
+ [Domain Name](domain-name.html)
+ [DOMChildNode](domchildnode.html)
+ [DOMParentNode](domparentnode.html)
+ [Error Suppression](error-suppression.html)
+ [OAuth](oauth.html)
+ [Option](option.html)
+ [Random\\CryptoSafeEngine](random_cryptosafeengine.html)
+ [Random\\Engine](random_engine.html)
+ [RecursiveArrayIterator](recursivearrayiterator.html)
+ [RecursiveDirectoryIterator](recursivedirectoryiterator.html)
+ [Redirect](redirect.html)
+ [Reflector](reflector.html)
+ [SeekableIterator](seekableiterator.html)
+ [Sequence](sequence.html)
+ [serialize\_precision](serialize_precision.html)
+ [Serverless](serverless.html)
+ [SessionHandlerInterface](sessionhandlerinterface.html)
+ [SessionIdInterface](sessionidinterface.html)
+ [SessionUpdateTimestampHandlerInterface](sessionupdatetimestamphandlerinterface.html)
+ [Set](set.html)
+ [Shell Exec](shell-exec.html)
+ [SplFileInfo](splfileinfo.html)
+ [PHP Native Interfaces](php-interface.html)
