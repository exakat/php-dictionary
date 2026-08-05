# File Extension
File extensions are the suffixes at the end of file names that indicate the type or format of the file. They typically come after a period ``.`` in the file name. 

File extensions help PHP recognize the file type and determine which program should be used to open it. They should not be used as security feature, but rather has a hint of the content.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/file-extension.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/file-extension.ini.html","name":"File Extension","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:24 +0000","dateModified":"Fri, 19 Jun 2026 21:25:24 +0000","description":"File extensions are the suffixes at the end of file names that indicate the type or format of the file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/File Extension.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$files = glob("directory/*.ini");

foreach($files as $file) {
    // displays the file name, without the file extension
    print basename($file, '.ini').PHP_EOL;
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Filename_extension)**
## Related

+ [File](file.ini.html)
