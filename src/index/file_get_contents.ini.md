# file\_get\_contents()
``file_get_contents()`` is a PHP native function, which reads all data from a file, in one call. The function requires the file name, or a valid URI, with its path of storage in the file system.

The function also includes options to handle concurrency with locks; to append data rather than overwrite them with ``FILE_APPEND``, and a restriction to use file in the ``include_path`` configuration.

``file_get_contents()`` returns a string, or ``false`` in case of error. The maximum size of the returned string may be limited by configuration.

``file_get_contents()`` works with streams to reach network files. It also supports wrappers, to use various predefined and custom protocols, such as ``https``, ``file``, ``zip``, etc.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/file_get_contents.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/file_get_contents.ini.html","name":"file_get_contents()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``file_get_contents()`` is a PHP native function, which reads all data from a file, in one call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/file_get_contents().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $json = file_get_contents('/path/to/config.json');

?>
```

**[Documentation](https://www.php.net/manual/en/function.file-get-contents.php)**
## See Also

+ [How to post data using file_get_contents in PHP ?](https://www.geeksforgeeks.org/php/how-to-post-data-using-file_get_contents-in-php/)

## Related

+ [Universal Resource Identifier (URI)](uri.ini.html)
+ [False](false.ini.html)
+ [String](string.ini.html)
+ [Stream](stream.ini.html)
+ [Wrapper](wrapper.ini.html)
+ [$http\_response\_header]($http_response_header.ini.html)
+ [file\_put\_contents()](file_put_contents.ini.html)
+ [php://input](php-input.ini.html)
+ [php://memory](php-memory.ini.html)
+ [File Mode](file-mode.ini.html)
+ [php://tmp](php-tmp.ini.html)
+ [Universal Resource Locator (URL)](url.ini.html)
