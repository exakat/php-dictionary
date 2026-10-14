# max\_filter\_count
``max_filter_count`` is a stream context option that limits how many filters can be chained in a single ``php://filter`` URL, such as ``php://filter/read=string.toupper|string.rot13/resource=file.txt``. It is a hardening measure against filter chain attacks, where a long chain of filters is used to generate arbitrary content from a file inclusion.

The default limit is 16 filters. Exceeding it first triggers a deprecation warning, then an error in later versions. The option is set through the ``filter`` key of a stream context, and can be passed to file functions such as ``fopen()``, ``include`` or ``file_get_contents()``.

This is not a php.ini directive: it cannot be changed globally in the configuration file, although the default stream context can be set with ``stream_context_set_default()``. Filters added with ``stream_filter_append()`` or ``stream_filter_prepend()`` are not counted by this option.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/max_filter_count.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/max_filter_count.html","name":"max_filter_count","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 09 Oct 2026 17:05:50 +0000","dateModified":"Fri, 09 Oct 2026 17:05:50 +0000","description":"max_filter_count is a stream context option that limits how many filters can be chained in a single php:\/\/filter URL, such as php:\/\/filter\/read=string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/max_filter_count.html"]}],"keywords":["stream context option","security"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream-filter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream_context_create.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file_get_contents.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/include.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/wiki.php.net\/rfc\/limit-maximum-number-of-filter-chains"},{"@type":"CreativeWork","name":"RFC: limit maximum number of filter chains","url":"https:\/\/wiki.php.net\/rfc\/limit-maximum-number-of-filter-chains"},{"@type":"CreativeWork","name":"Hardening PHP against filter chain attacks","url":"https:\/\/externals.io\/message\/131539"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"max_filter_count"}]}]}</script>
```php
<?php

    // Allow at most 1 filter in php://filter URLs for this context
    $ctx = stream_context_create(['filter' => ['max_filter_count' => 1]]);

    // One filter: allowed
    echo file_get_contents('php://filter/read=string.toupper/resource=data.txt', false, $ctx);

    // Two filters: exceeds the limit
    echo file_get_contents('php://filter/read=string.toupper|string.rot13/resource=data.txt', false, $ctx);

?>
```

**[Documentation](https://wiki.php.net/rfc/limit-maximum-number-of-filter-chains)**
## See Also

+ [RFC: limit maximum number of filter chains](https://wiki.php.net/rfc/limit-maximum-number-of-filter-chains)
+ [Hardening PHP against filter chain attacks](https://externals.io/message/131539)

## Related

+ [Stream Filter](stream-filter.html)
+ [stream\_context\_create()](stream_context_create.html)
+ [file\_get\_contents()](file_get_contents.html)
+ [include](include.html)
