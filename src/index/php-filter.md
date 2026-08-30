# php://filter
``php://filter`` is a meta-wrapper that allows applying one or more filter chains to a stream before the data is read or written. It is part of the ``php://`` family of built-in stream wrappers.

A filter chain is specified in the URL itself: ``php://filter/read=<filters>/resource=<target>``. Built-in filters include string conversions ``string.toupper``, encoding transforms ``convert.base64-encode``, ``convert.iconv.*``, and compression ``zlib.deflate``.

While legitimately used to read or transform stream data on-the-fly, ``php://filter`` is widely exploited in Local File Inclusion vulnerabilities. By using ``convert.base64-encode``, an attacker can read the raw PHP source of any included file instead of executing it, leaking credentials and logic. Advanced exploit chains using ``iconv`` filters can even achieve remote code execution from an LFI alone.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-filter.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-filter.html","name":"php:\/\/filter","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:49:40 +0000","dateModified":"Mon, 13 Jul 2026 18:49:40 +0000","description":"php:\/\/filter is a meta-wrapper that allows applying one or more filter chains to a stream before the data is read or written","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-filter.html"]}],"alternateName":["php-filter-wrapper"],"keywords":["wrapper","security","vulnerability"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-php.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/local-file-inclusion.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rce.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/filter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/base64.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/wrappers.php.php"},{"@type":"CreativeWork","name":"LFI to RCE via php:\/\/filter","url":"https:\/\/www.synacktiv.com\/publications\/php-filters-chain-what-is-it-and-how-to-use-it.html"},{"@type":"CreativeWork","name":"PHP filter chains: file read from error-based oracle","url":"https:\/\/github.com\/synacktiv\/php_filter_chain_generator"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"php-filter"}]}]}</script>
```php
<?php

    // Legitimate use: read a file and base64-encode its contents on the fly
    $encoded = file_get_contents('php://filter/read=convert.base64-encode/resource=config.php');
    
    // Attacker use (LFI context): exfiltrate PHP source code via include
    // include($_GET['page']);
    // => ?page=php://filter/read=convert.base64-encode/resource=index.php
    // Returns base64 of index.php source instead of executing it

?>
```

**[Documentation](https://www.php.net/manual/en/wrappers.php.php)**
## See Also

+ [LFI to RCE via php://filter](https://www.synacktiv.com/publications/php-filters-chain-what-is-it-and-how-to-use-it.html)
+ [PHP filter chains: file read from error-based oracle](https://github.com/synacktiv/php_filter_chain_generator)

## Related

+ [php://](wrapper-php.html)
+ [Wrapper](wrapper.html)
+ [Stream](stream.html)
+ [Local File Inclusion](local-file-inclusion.html)
+ [Remote Code Execution (RCE)](rce.html)
+ [filter](filter.html)
+ [Security](security.html)
+ [Base 64 Encoding](base64.html)
