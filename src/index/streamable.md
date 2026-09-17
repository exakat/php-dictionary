# Streamable
A streamable value is something that can be read, or written, incrementally, chunk by chunk, without ever needing to be fully loaded in memory, whether or not it is backed by a real, native PHP ``stream`` resource opened with ``fopen()``.

This is a distinction similar to ``stringable``: a ``Stringable`` object behaves like a string, via ``__toString()``, without being a native ``string`` scalar. A streamable object behaves like a stream, exposing something akin to ``read()``, ``write()`` or ``eof()``, without necessarily being a native stream resource under the hood: it may be backed by a database cursor, a generator, an API pagination loop, or a callback.

``PSR-7``'s ``Psr\Http\Message\StreamInterface`` is the canonical example. HTTP client and server libraries, such as Guzzle or Symfony's HttpClient, expose request and response bodies as streamable objects, so large payloads can be read progressively, even when the underlying transport is a socket, a file, or an in-memory buffer. Symfony's ``StreamedResponse`` is another example: its body is produced by a callback, and is streamable to the client, without the application ever holding a stream resource itself.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/streamable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/streamable.html","name":"Streamable","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 17 Sep 2026 07:48:29 +0000","dateModified":"Thu, 17 Sep 2026 07:48:29 +0000","description":"A streamable value is something that can be read, or written, incrementally, chunk by chunk, without ever needing to be fully loaded in memory, whether or not it is backed by a real, native PHP stream resource opened with fopen()","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/streamable.html"]}],"keywords":["concept","php interface","filesystem"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stringable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yield.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-stream.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/output-buffering.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/response.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/psr.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abstraction-layer.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php-fig.org\/psr\/psr-7\/#34-psrhttpmessagestreaminterface"},{"@type":"CreativeWork","name":"Symfony: Streaming a Response","url":"https:\/\/symfony.com\/doc\/current\/components\/http_foundation.html#streaming-a-response"},{"@type":"CreativeWork","name":"Guzzle: Streams","url":"https:\/\/docs.guzzlephp.org\/en\/stable\/psr7.html#streams"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.36","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"streamable"}]}]}</script>
```php
<?php

interface Streamable
{
    // Reads up to $length bytes; returns '' once exhausted.
    public function read(int $length): string;
    public function eof(): bool;
}

// A CSV export is streamable: it can be read chunk by chunk,
// even though it is backed by an array, not a real stream resource.
class CsvExport implements Streamable
{
    private int $position = 0;

    public function __construct(private array $rows) {}

    public function read(int $length): string
    {
        if ($this->eof()) {
            return '';
        }

        return implode(',', $this->rows[$this->position++]) . "\n";
    }

    public function eof(): bool
    {
        return $this->position >= count($this->rows);
    }
}

function sendToClient(Streamable $body): void
{
    while (!$body->eof()) {
        echo $body->read(1024); // flushed incrementally, never loaded fully in memory
    }
}

sendToClient(new CsvExport([['id', 'name'], [1, 'Alice'], [2, 'Bob']]));

?>
```

**[Documentation](https://www.php-fig.org/psr/psr-7/#34-psrhttpmessagestreaminterface)**
## See Also

+ [Symfony: Streaming a Response](https://symfony.com/doc/current/components/http_foundation.html#streaming-a-response)
+ [Guzzle: Streams](https://docs.guzzlephp.org/en/stable/psr7.html#streams)

## Related

+ [Stream](stream.html)
+ [Stringable](stringable.html)
+ [Generator](generator.html)
+ [Yield](yield.html)
+ [Stream Wrapper](wrapper-stream.html)
+ [Output Buffering](output-buffering.html)
+ [Response](response.html)
+ [PHP Standards Recommendations (PSR)](psr.html)
+ [Abstraction Layer](abstraction-layer.html)

## Related packages

+ [guzzlehttp/psr7](https://packagist.org/packages/guzzlehttp/psr7)
+ [symfony/http-foundation](https://packagist.org/packages/symfony/http-foundation)
