# SplSubject
``SplSubject`` is an SPL interface that represents the subject, also known as the observable, role in the Observer design pattern. Classes implementing ``SplSubject`` must define three methods: ``attach(SplObserver $observer)``, ``detach(SplObserver $observer)``, and ``notify()``.

When the subject's state changes, it calls ``notify()``, which in turn calls ``update()`` on each attached ``SplObserver``.

``SplSubject`` is the counterpart of ``SplObserver``: together they provide a built-in, standardised contract for the Observer pattern.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splsubject.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splsubject.html","name":"SplSubject","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 18 Jun 2026 13:55:25 +0000","dateModified":"Thu, 18 Jun 2026 13:55:25 +0000","description":"SplSubject is an SPL interface that represents the subject, also known as the observable, role in the Observer design pattern","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splsubject.html"]}],"keywords":["spl","design pattern"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splobserver.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/observer-pattern.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splobjectstorage.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/domain.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/domain-name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/domchildnode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/domparentnode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error-suppression.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/oauth.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/option.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random_cryptosafeengine.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random_engine.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursivearrayiterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursivedirectoryiterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/redirect.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reflector.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/seekableiterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sequence.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serialize_precision.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serverless.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sessionhandlerinterface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sessionidinterface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sessionupdatetimestamphandlerinterface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/set.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shell-exec.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splfileinfo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-interface.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.splsubject.php"},{"@type":"CreativeWork","name":"Observer pattern","url":"https:\/\/en.wikipedia.org\/wiki\/Observer_pattern"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"splsubject"}]}]}</script>
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
