# finfo
``finfo`` is a native PHP class, part of the Fileinfo extension, that detects the MIME type and encoding of a file or a string buffer by inspecting its content, using the ``libmagic`` library, rather than trusting its filename or extension.

``finfo`` is instantiated with a mode constant, such as ``FILEINFO_MIME_TYPE``, and then queried with ``$finfo->file($path)`` or ``$finfo->buffer($content)``.

Since the value provided by ``$_FILES[...]['type']`` is supplied by the client and cannot be trusted, ``finfo`` is the recommended way to validate the real type of an uploaded file before storing or processing it. It replaces the deprecated ``mime_content_type()`` function.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/finfo.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/finfo.html","name":"finfo","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:22:16 +0000","dateModified":"Mon, 17 Aug 2026 09:22:16 +0000","description":"finfo is a native PHP class, part of the Fileinfo extension, that detects the MIME type and encoding of a file or a string buffer by inspecting its content, using the libmagic library, rather than trusting its filename or extension","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/finfo.html"]}],"alternateName":["fileinfo"],"keywords":["native class","file"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/upload.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_FILES.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-byte.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/filesystem.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.finfo.php"},{"@type":"CreativeWork","name":"PHP - FileInfo finfo class","url":"https:\/\/www.tutorialspoint.com\/php\/php_fileinfo_class_function.htm"},{"@type":"CreativeWork","name":"MIME type detection for PHP file uploads","url":"https:\/\/www.web-development-blog.com\/php-mime-type-detection\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"finfo"}]}]}</script>
```php
<?php

    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mimeType = $finfo->file($_FILES['userfile']['tmp_name']);

    if ($mimeType !== 'image/png') {
        throw new RuntimeException('Only PNG files are allowed.');
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.finfo.php)**
## See Also

+ [PHP - FileInfo finfo class](https://www.tutorialspoint.com/php/php_fileinfo_class_function.htm)
+ [MIME type detection for PHP file uploads](https://www.web-development-blog.com/php-mime-type-detection/)

## Related

+ [File Upload](upload.html)
+ [$\_FILES]($_FILES.html)
+ [Magic Bytes](magic-byte.html)
+ [File System](filesystem.html)
