# Stream Filter
A stream filter is a piece of code attached to a stream, which transforms the data as it is read from or written to that stream. Filters are applied on-the-fly, so the whole content never needs to be loaded in memory at once.

PHP offers functions to manage filters on a stream: ``stream_filter_append()`` and ``stream_filter_prepend()`` attach a filter to a stream, ``stream_filter_remove()`` detaches it, and ``stream_get_filters()`` lists the available filters. Built-in filters include ``string.toupper``, ``string.rot13``, ``convert.base64-encode``, ``convert.base64-decode`` and ``zlib.deflate``.

Custom filters are written by extending the ``php_user_filter`` class, implementing its ``filter()`` method, and registering the class with ``stream_filter_register()``.

Stream filters are different from the ``php://filter`` wrapper, which exposes filter chains through a URL. The data is only transformed on the fly, and a filter does not know about the origin of the stream.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream-filter.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream-filter.html","name":"Stream Filter","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 09 Oct 2026 14:24:04 +0000","dateModified":"Fri, 09 Oct 2026 14:24:04 +0000","description":"A stream filter is a piece of code attached to a stream, which transforms the data as it is read from or written to that stream","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream-filter.html"]}],"alternateName":["stream-filters"],"keywords":["feature","filesystem","filter"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-stream.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-filter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/filter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fopen.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fread.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fwrite.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.stream.php"},{"@type":"CreativeWork","name":"Stream Filters","url":"https:\/\/www.php.net\/manual\/en\/filters.php"},{"@type":"CreativeWork","name":"stream_filter_append()","url":"https:\/\/www.php.net\/manual\/en\/function.stream-filter-append.php"},{"@type":"CreativeWork","name":"php_user_filter","url":"https:\/\/www.php.net\/manual\/en\/class.php-user-filter.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"stream-filter"}]}]}</script>
```php
<?php

    // append a built-in filter to a stream, uppercasing data while reading
    $fp = fopen('data.txt', 'r');
    stream_filter_append($fp, 'string.toupper', STREAM_FILTER_READ);
    echo fread($fp, 1024);
    fclose($fp);

    // register and use a custom filter
    class strtoupper_filter extends php_user_filter {
        public function filter($in, $out, &$consumed, bool $closing): int {
            while ($bucket = stream_bucket_make_writeable($in)) {
                $bucket->data = strtoupper($bucket->data);
                $consumed += $bucket->datalen;
                stream_bucket_append($out, $bucket);
            }
            return PSFS_PASS_ON;
        }
    }

    stream_filter_register('custom.toupper', 'strtoupper_filter');

    $fp = fopen('data.txt', 'w');
    stream_filter_append($fp, 'custom.toupper', STREAM_FILTER_WRITE);
    fwrite($fp, 'hello world');
    fclose($fp);

?>
```

**[Documentation](https://www.php.net/manual/en/book.stream.php)**
## See Also

+ [Stream Filters](https://www.php.net/manual/en/filters.php)
+ [stream_filter_append()](https://www.php.net/manual/en/function.stream-filter-append.php)
+ [php_user_filter](https://www.php.net/manual/en/class.php-user-filter.php)

## Related

+ [Stream](stream.html)
+ [Stream Wrapper](wrapper-stream.html)
+ [php://filter](php-filter.html)
+ [filter](filter.html)
+ [fopen()](fopen.html)
+ [fread()](fread.html)
+ [fwrite()](fwrite.html)
