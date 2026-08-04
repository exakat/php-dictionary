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

## See Also

+ [URL Functions](https://www.php.net/manual/en/ref.url.php)
+ [Supported Protocols and Wrappers](https://www.php.net/manual/en/wrappers.php)

Related : [Secure Sockets Layer (SSL)](Secure Sockets Layer (SSL)), [File](File), [Query String](Query String), [Scheme](Scheme), [URI Extension](URI Extension), [Universal Resource Identifier (URI)](Universal Resource Identifier (URI)), [Canonical](Canonical), [Pound #](Pound #), [Search Engine Optimization (SEO)](Search Engine Optimization (SEO)), [parse_url()](parse_url()), [file_get_contents()](file_get_contents()), [fopen()](fopen()), [http_build_query()](http_build_query()), [URI Class](URI Class), [Anchor](Anchor), [Link](Link), [Slug](Slug), [Web Hypertext Application Technology Working Group (WHATWG)](Web Hypertext Application Technology Working Group (WHATWG)), [Asset](Asset), [Domain Name](Domain Name), [Redirect](Redirect)
