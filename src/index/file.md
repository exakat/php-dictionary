# File
A file is a named collection of data or information that is stored and organized on a computer's storage system. In computing, files are used to store various types of data, such as text, images, audio, video, programs, and more. Files can be created, accessed, modified, and deleted by computer programs and users.

Files are typically organized into a hierarchical structure called a file system, which helps to manage and organize them. Each file is identified by a unique name, which allows it to be located and accessed within the file system. Files can be stored on different types of storage media, including hard drives, solid-state drives, network storage, and removable storage devices such as USB drives.

A file consists of two main components: the file name and the file content. The file name is used to identify and refer to the file, while the file content contains the actual data stored within the file. The content can vary depending on the type of file, such as plain text, binary data, or specific file formats.

A file is a resource for recording data on a computer storage device, such as a hard drive or memory.

``file://`` is also the name of a wrapper, for stream.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file.html","name":"File","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A file is a named collection of data or information that is stored and organized on a computer's storage system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file.html"]}],"keywords":["system","filesystem"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-file.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/filesystem.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/url.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uri.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dir.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file-extension.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-byte.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/path.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zlib.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/configuration.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/existence.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fopen.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/permission.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/include.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splfileinfo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splfileobject.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exif.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fread.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fseek.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ftell.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rewind.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fclose.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fgetc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fgets.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fwrite.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Computer_file"},{"@type":"CreativeWork","name":"File system","url":"https:\/\/www.php.net\/manual\/en\/book.filesystem.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"file"}]}]}</script>
```php
<?php

    file_put_contents('file.txt', 'some text.');

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Computer_file)**
## See Also

+ [File system](https://www.php.net/manual/en/book.filesystem.php)

## Related

+ [file://](wrapper-file.html)
+ [File System](filesystem.html)
+ [Universal Resource Locator (URL)](url.html)
+ [Universal Resource Identifier (URI)](uri.html)
+ [Stream](stream.html)
+ [Dir](dir.html)
+ [File Extension](file-extension.html)
+ [Magic Bytes](magic-byte.html)
+ [Path](path.html)
+ [zlib extension](zlib.html)
+ [Configuration](configuration.html)
+ [Existence](existence.html)
+ [fopen()](fopen.html)
+ [Permission](permission.html)
+ [include](include.html)
+ [SplFileInfo](splfileinfo.html)
+ [SplFileObject](splfileobject.html)
+ [EXIF (Exchangeable Image File Format)](exif.html)
+ [fread()](fread.html)
+ [fseek()](fseek.html)
+ [ftell()](ftell.html)
+ [rewind()](rewind.html)
+ [fclose()](fclose.html)
+ [fgetc()](fgetc.html)
+ [fgets()](fgets.html)
+ [fwrite()](fwrite.html)
