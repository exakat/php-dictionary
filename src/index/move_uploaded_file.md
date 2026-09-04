# move\_uploaded\_file()
``move_uploaded_file()`` is a native PHP function that moves a file that was uploaded via an HTTP POST request to a new destination.

Unlike a generic filesystem move, ``move_uploaded_file()`` first checks, using the same mechanism as ``is_uploaded_file()``, that the source file was genuinely uploaded through PHP's upload mechanism during the current request. This prevents an attacker from tricking a script into moving or overwriting an arbitrary file on the server by forging the ``tmp_name`` value.

``move_uploaded_file()`` doesn't validate the file's content, type, or size: it must be combined with checks such as ``finfo``, an extension allowlist, and a destination outside the web root to build a secure upload feature.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/move_uploaded_file.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/move_uploaded_file.html","name":"move_uploaded_file()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:22:22 +0000","dateModified":"Mon, 17 Aug 2026 09:22:22 +0000","description":"move_uploaded_file() is a native PHP function that moves a file that was uploaded via an HTTP POST request to a new destination","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/move_uploaded_file.html"]}],"keywords":["native function","file","security"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/upload.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_FILES.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/finfo.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.move-uploaded-file.php"},{"@type":"CreativeWork","name":"PHP move_uploaded_file - Handling File Uploads in PHP","url":"https:\/\/zetcode.com\/php-filesystem\/move-uploaded-file\/"},{"@type":"CreativeWork","name":"How to securely upload files with PHP?","url":"https:\/\/docs.php.earth\/security\/uploading\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"move_uploaded_file"}]}]}</script>
```php
<?php

    $uploaddir = '/var/www/uploads/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo 'File is valid, and was successfully uploaded.';
    } else {
        echo 'Possible file upload attack!';
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.move-uploaded-file.php)**
## See Also

+ [PHP move_uploaded_file - Handling File Uploads in PHP](https://zetcode.com/php-filesystem/move-uploaded-file/)
+ [How to securely upload files with PHP?](https://docs.php.earth/security/uploading/)

## Related

+ [File Upload](upload.html)
+ [$\_FILES]($_FILES.html)
+ [finfo](finfo.html)
