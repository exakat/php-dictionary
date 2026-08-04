# File Extension
File extensions are the suffixes at the end of file names that indicate the type or format of the file. They typically come after a period ``.`` in the file name. 

File extensions help PHP recognize the file type and determine which program should be used to open it. They should not be used as security feature, but rather has a hint of the content.
```php
<?php

$files = glob("directory/*.ini");

foreach($files as $file) {
    // displays the file name, without the file extension
    print basename($file, '.ini').PHP_EOL;
}

?>
```

Related : [File](File)
