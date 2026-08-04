# File Upload
PHP is able to receive files as part of a form submission. 

PHP is capable of receiving file uploads from any RFC-1867, RFC-2854 compliant browser. It also supports ``multipart/form-data`` format, from the RFC-2388.

File upload code is based on the $_FILES superglobal, and ``move_uploaded_file()`` function. It also relies on several PHP directives: ``file_uploads``, ``upload_max_filesize``, ``upload_tmp_dir``, ``post_max_size`` and ``max_input_time``. 

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

## See Also

+ [Learn Everything About File Upload in PHP With Examples](https://www.simplilearn.com/tutorials/php-tutorial/file-upload-in-php)
+ [Secure File Uploads in PHP](https://slicker.me/php/secure_uploads.html)
+ [How to Upload Files in PHP (Step-by-Step Guide for Beginners)](https://medium.com/@waiyan.toshima12/how-to-upload-files-in-php-step-by-step-guide-for-beginners-0015ce787763)
+ [RFC-1867](https://www.rfc-editor.org/info/rfc1867/)
+ [RFC-2854](https://www.rfc-editor.org/info/rfc2854/)
+ [RFC-2388](https://www.rfc-editor.org/info/rfc2388/)
+ [How Does File Upload in PHP Really Work?](https://blog.newtum.com/file-upload-in-php-with-forms/)

Related : [$_FILES]($_FILES)
