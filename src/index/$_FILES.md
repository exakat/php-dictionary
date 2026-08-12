# $\_FILES
The ``$_FILES`` variable is a special superglobal variable that is used to retrieve information about files uploaded to the server via HTML forms with the ``enctype="multipart/form-data"`` attribute. It provides access to the uploaded file's properties such as name, size, type, and temporary location on the server.

When a file upload form is submitted, PHP populates the ``$_FILES`` variable with an array structure that contains information about the uploaded files. The array is organized based on the input field names used in the form.

+ ``$_FILES['userfile']['name']``: the original name of the file on the client machine
+ ``$_FILES['userfile']['type']``: the mime type of the file, if the browser provided this information. An example would be ``"image/gif"``. This mime type is however not checked on the PHP side and therefore don't take its value for granted
+ ``$_FILES['userfile']['size']``: the size, in bytes, of the uploaded file
+ ``$_FILES['userfile']['tmp_name']``: the temporary filename of the file in which the uploaded file was stored on the server
+ ``$_FILES['userfile']['error']``: the error code associated with this file upload
+ ``$_FILES['userfile']['full_path']``: the full path as submitted by the browser. This value does not always contain a real directory structure, and cannot be trusted. Available as of PHP 8.1.0

``$_FILES`` is associated to the functions ``move_uploaded_file()`` and ``is_uploaded_file()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_FILES.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_FILES.html","name":"$_FILES","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The $_FILES variable is a special superglobal variable that is used to retrieve information about files uploaded to the server via HTML forms with the enctype=\"multipart\/form-data\" attribute","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/$_FILES.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"$_FILES"}]}]}</script>
```php
<?php

    // $a->file was filled with $_FILES at some point
    move_uploaded_file($a->file['tmp_name'], $target);

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.files.php)**
## See Also

+ [POST method uploads](https://www.php.net/manual/en/features.file-upload.post-method.php)

## Related

+ [File Upload](upload.html)
+ [Incoming Data](incoming-data.html)
+ [File Upload](file-upload.html)
+ [$\_COOKIE]($_cookie.html)
+ [$\_ENV]($_env.html)
+ [$\_GET]($_get.html)
+ [$\_SERVER]($_server.html)
