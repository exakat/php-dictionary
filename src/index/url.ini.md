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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/url.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/url.ini.html","name":"Universal Resource Locator (URL)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Universal Resource Locator is a string that represents a resource, where to find it, how to access it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Universal Resource Locator (URL).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Secure Sockets Layer (SSL)](ssl.ini.html)
+ [File](file.ini.html)
+ [Query String](query-string.ini.html)
+ [Scheme](scheme.ini.html)
+ [URI Extension](uri-extension.ini.html)
+ [Universal Resource Identifier (URI)](uri.ini.html)
+ [Canonical](canonical.ini.html)
+ [Pound #](pound.ini.html)
+ [Search Engine Optimization (SEO)](seo.ini.html)
+ [parse\_url()](parse_url.ini.html)
+ [file\_get\_contents()](file_get_contents.ini.html)
+ [fopen()](fopen.ini.html)
+ [http\_build\_query()](http_build_query.ini.html)
+ [URI Class](uri-class.ini.html)
+ [Anchor](anchor.ini.html)
+ [Link](link.ini.html)
+ [Slug](slug.ini.html)
+ [Web Hypertext Application Technology Working Group (WHATWG)](whatwg.ini.html)
+ [Asset](asset.ini.html)
+ [Domain Name](domain-name.ini.html)
+ [Redirect](redirect.ini.html)
