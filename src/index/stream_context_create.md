# stream\_context\_create()
``stream_context_create()`` is a native PHP function that creates a stream context: a set of options and parameters that can be passed to file and network functions such as ``fopen()``, ``file_get_contents()`` or ``stream_socket_client()``.

The first argument is an array of options, indexed by wrapper name, such as ``['http' => ['method' => 'POST']]``. The second argument is an array of parameters, such as a notification callback, that apply to the stream as a whole.

The function returns the context, which is then passed as the last argument of the stream function. Functions called without a context use the default context, which can be changed with ``stream_context_set_default()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream_context_create.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream_context_create.html","name":"stream_context_create()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 09 Oct 2026 17:10:07 +0000","dateModified":"Fri, 09 Oct 2026 17:10:07 +0000","description":"stream_context_create() is a native PHP function that creates a stream context: a set of options and parameters that can be passed to file and network functions such as fopen(), file_get_contents() or stream_socket_client()","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream_context_create.html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file_get_contents.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fopen.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/max_filter_count.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.stream-context-create.php"},{"@type":"CreativeWork","name":"stream_context_create","url":"https:\/\/www.php.net\/manual\/en\/function.stream-context-create.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.38","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"stream_context_create"}]}]}</script>
```php
<?php

    $context = stream_context_create([
        'http' => [
            'method' => 'POST',
            'header' => 'Content-Type: application/json',
            'content' => '{"name":"Ada"}',
        ],
    ]);

    echo file_get_contents('https://example.com/api', false, $context);

?>
```

**[Documentation](https://www.php.net/manual/en/function.stream-context-create.php)**
## See Also

+ [stream_context_create](https://www.php.net/manual/en/function.stream-context-create.php)

## Related

+ [file\_get\_contents()](file_get_contents.html)
+ [fopen()](fopen.html)
+ [max\_filter\_count](max_filter_count.html)
