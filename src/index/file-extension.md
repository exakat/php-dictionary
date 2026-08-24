# File Extension
File extensions are the suffixes at the end of file names that indicate the type or format of the file. They typically come after a period ``.`` in the file name. 

File extensions help PHP recognize the file type and determine which program should be used to open it. They should not be used as a security feature, but rather as a hint of the content.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file-extension.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file-extension.html","name":"File Extension","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:48:14 +0000","dateModified":"Wed, 19 Aug 2026 06:48:14 +0000","description":"File extensions are the suffixes at the end of file names that indicate the type or format of the file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file-extension.html"]}],"keywords":["file"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Filename_extension"},{"@type":"CreativeWork","name":"pathinfo","url":"https:\/\/www.php.net\/manual\/en\/function.pathinfo.php"},{"@type":"CreativeWork","name":"basename","url":"https:\/\/www.php.net\/manual\/en\/function.basename.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"file-extension"}]}]}</script>
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
## See Also

+ [pathinfo](https://www.php.net/manual/en/function.pathinfo.php)
+ [basename](https://www.php.net/manual/en/function.basename.php)

## Related

+ [File](file.html)
