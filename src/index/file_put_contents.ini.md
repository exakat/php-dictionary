# file\_put\_contents()
``file_put_contents()`` is a PHP native function, which stores data in a file, in one call. The function requires only the file name, with its path of storage in the file system, and the actual data to store.

The function also include options to handle concurrency with locks; to append data rather than overwrite them with ``FILE_APPEND``, and a restriction to use file in the ``include_path`` configuration.

``file_put_contents()`` accepts about any type of data, to store them on a file, yet strings are the best fitted for that. Scalar types are converted to a string; arrays are imploded, with the empty string as separator, and no recursive processing, and objects are converted to string, when the magic method ``__toString()`` is available, otherwise, they are ignored.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/file_put_contents.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/file_put_contents.ini.html","name":"file_put_contents()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``file_put_contents()`` is a PHP native function, which stores data in a file, in one call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/file_put_contents().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    file_put_contents('/tmp/path/to/file.txt', 'Hello file');

?>
```

**[Documentation](https://www.php.net/manual/en/function.file-put-contents.php)**
## See Also

+ [A Practical Guide to PHP's `file_put_contents()` Function](https://reintech.io/blog/practical-guide-php-file-put-contents-function)
+ [file_put_contents() With Array Argument](https://php-tips.readthedocs.io/en/latest/tips/file_put_array.html)

## Related

+ [include\_path](include_path.ini.html)
+ [Lock](lock.ini.html)
+ [Concurrency](concurency.ini.html)
+ [file\_get\_contents()](file_get_contents.ini.html)
+ [Empty String](empty-string.ini.html)
+ [Array, []](array.ini.html)
+ [File Mode](file-mode.ini.html)
+ [php://memory](php-memory.ini.html)
+ [php://output](php-output.ini.html)
+ [php://tmp](php-tmp.ini.html)
