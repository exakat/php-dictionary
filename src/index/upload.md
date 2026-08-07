# File Upload
PHP is able to receive files as part of a form submission. 

PHP is capable of receiving file uploads from any RFC-1867, RFC-2854 compliant browser. It also supports ``multipart/form-data`` format, from the RFC-2388.

File upload code is based on the $_FILES superglobal, and ``move_uploaded_file()`` function. It also relies on several PHP directives: ``file_uploads``, ``upload_max_filesize``, ``upload_tmp_dir``, ``post_max_size`` and ``max_input_time``. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/upload.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/upload.html","name":"File Upload","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:18:07 +0000","dateModified":"Thu, 06 Aug 2026 05:18:07 +0000","description":"PHP is able to receive files as part of a form submission","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/File Upload.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"File Upload"}]}]}</script>
```php
<?php

    $uploaddir = '/var/www/uploads/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    
    echo '<pre>';
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo 'File is valid, and was successfully uploaded.';
    } else {
        echo 'Possible file upload attack!';
    }

?>
```

**[Documentation](https://www.php.net/manual/en/features.file-upload.post-method.php)**
## See Also

+ [Learn Everything About File Upload in PHP With Examples](https://www.simplilearn.com/tutorials/php-tutorial/file-upload-in-php)
+ [Secure File Uploads in PHP](https://slicker.me/php/secure_uploads.html)
+ [How to Upload Files in PHP (Step-by-Step Guide for Beginners)](https://medium.com/@waiyan.toshima12/how-to-upload-files-in-php-step-by-step-guide-for-beginners-0015ce787763)
+ [RFC-1867](https://www.rfc-editor.org/info/rfc1867/)
+ [RFC-2854](https://www.rfc-editor.org/info/rfc2854/)
+ [RFC-2388](https://www.rfc-editor.org/info/rfc2388/)
+ [How Does File Upload in PHP Really Work?](https://blog.newtum.com/file-upload-in-php-with-forms/)
+ [Exploiting a file upload vulnerability by bypassing a PHP extension filter using .php5,](https://infosecwriteups.com/author-krish-gupta-f5b8bf96f1ba)

## Related

+ [$\_FILES]($_FILES.html)
