# SplSubject
``SplSubject`` is an SPL interface that represents the subject, also known as the observable, role in the Observer design pattern. Classes implementing ``SplSubject`` must define three methods: ``attach(SplObserver $observer)``, ``detach(SplObserver $observer)``, and ``notify()``.

When the subject's state changes, it calls ``notify()``, which in turn calls ``update()`` on each attached ``SplObserver``.

``SplSubject`` is the counterpart of ``SplObserver``: together they provide a built-in, standardised contract for the Observer pattern.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/splsubject.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/splsubject.html","name":"SplSubject","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 18 Jun 2026 13:55:25 +0000","dateModified":"Thu, 18 Jun 2026 13:55:25 +0000","description":"``SplSubject`` is an SPL interface that represents the subject, also known as the observable, role in the Observer design pattern","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/SplSubject.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Standard PHP Library (SPL)](spl.ini.html)
+ [SplObserver](splobserver.ini.html)
+ [Observer Pattern](observer-pattern.ini.html)
+ [Interface](interface.ini.html)
+ [SplObjectStorage](splobjectstorage.ini.html)
+ [Domain](domain.ini.html)
+ [Domain Name](domain-name.ini.html)
+ [DOMChildNode](domchildnode.ini.html)
+ [DOMParentNode](domparentnode.ini.html)
+ [Error Suppression](error-suppression.ini.html)
+ [OAuth](oauth.ini.html)
+ [Option](option.ini.html)
+ [Random\\CryptoSafeEngine](random_cryptosafeengine.ini.html)
+ [Random\\Engine](random_engine.ini.html)
+ [RecursiveArrayIterator](recursivearrayiterator.ini.html)
+ [RecursiveDirectoryIterator](recursivedirectoryiterator.ini.html)
+ [Redirect](redirect.ini.html)
+ [Reflector](reflector.ini.html)
+ [SeekableIterator](seekableiterator.ini.html)
+ [Sequence](sequence.ini.html)
+ [serialize\_precision](serialize_precision.ini.html)
+ [Serverless](serverless.ini.html)
+ [SessionHandlerInterface](sessionhandlerinterface.ini.html)
+ [SessionIdInterface](sessionidinterface.ini.html)
+ [SessionUpdateTimestampHandlerInterface](sessionupdatetimestamphandlerinterface.ini.html)
+ [Set](set.ini.html)
+ [Shell Exec](shell-exec.ini.html)
+ [SplFileInfo](splfileinfo.ini.html)
+ [PHP Native Interfaces](php-interface.ini.html)
