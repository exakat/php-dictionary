# Universal Resource Locator (URL)
Universal Resource Locator is a string that represents a resource, where to find it, how to access it. 

The full URL include the following information: 

+ ``protocol``: for example, http, https, mongodb, zip
+ ``user``: the username for authentication purposes
+ ``pass``: the password associated with the username
+ ``server``: the name or the address of the server where the resource reside
+ ``path``: the location of the resource on the server
+ ``query``: extra parameters to reach the resource
+ ``fragment``: the location of the resource inside the previous address, server and path

PHP has several functions dedicated to processing URL, such as ``parse_url()`` and ``http_build_query()``. 

PHP also makes use of URL as a generalisation for file path. For example, ``file_get_contents()`` and ``fopen()`` both work on local and remote files, via URL.

PHP is able to process different protocols with its internal Protocols and Wrappers, using the file system functions.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/url.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/url.html","name":"Universal Resource Locator (URL)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Universal Resource Locator is a string that represents a resource, where to find it, how to access it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Universal Resource Locator (URL).html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"url"}]}]}</script>
```php

<?php

    print_r(parse_url('https://www.php.net/'));

/*
Array
(
    [scheme] => https
    [host] => www.php.net
    [path] => /
)
*/

    // fetch the PHP home page
    $html = file_get_contents('https://www.php.net/'); 
?>
```

**[Documentation](https://en.wikipedia.org/wiki/URL)**
## See Also

+ [URL Functions](https://www.php.net/manual/en/ref.url.php)
+ [Supported Protocols and Wrappers](https://www.php.net/manual/en/wrappers.php)

## Related

+ [Secure Sockets Layer (SSL)](ssl.html)
+ [File](file.html)
+ [Query String](query-string.html)
+ [Scheme](scheme.html)
+ [URI Extension](uri-extension.html)
+ [Universal Resource Identifier (URI)](uri.html)
+ [Canonical](canonical.html)
+ [Pound #](pound.html)
+ [Search Engine Optimization (SEO)](seo.html)
+ [parse\_url()](parse_url.html)
+ [file\_get\_contents()](file_get_contents.html)
+ [fopen()](fopen.html)
+ [http\_build\_query()](http_build_query.html)
+ [URI Class](uri-class.html)
+ [Anchor](anchor.html)
+ [Link](link.html)
+ [Slug](slug.html)
+ [Web Hypertext Application Technology Working Group (WHATWG)](whatwg.html)
+ [Asset](asset.html)
+ [Domain Name](domain-name.html)
+ [Redirect](redirect.html)
