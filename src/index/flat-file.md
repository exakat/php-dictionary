# Flat File
A flat file is a plain, unstructured file that stores data as text or binary, with no indexes, relations or query engine of its own. A flat-file system uses a directory of such files in place of a database: each record, page or setting is one file, and the application reads and writes it directly.

A flat-file CMS is the typical case. It has no database to install or configure: content is stored as Markdown, YAML or JSON files on disk, the admin panel writes those files, and the page renderer reads them. Deployment is copying a folder, and backups are a version-control commit or a file copy. Because there is no server to run, the setup suits small sites, personal blogs and documentation.

The trade-off is that the application does the work a database would do. Looking up one item means reading and parsing files, searching means scanning them, and concurrent writes need file locking, so a flat-file system slows down as the number of records grows. It also needs care with file permissions, since the content directory is usually web-readable and the files are only as safe as the server is set up to keep them.

Flat files are not the same as a flat database. A flat-file database is a single table in one file, such as a CSV file, while a flat-file CMS is a folder tree of content files.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/flat-file.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/flat-file.html","name":"Flat File","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Nov 2026 11:37:54 +0000","dateModified":"Tue, 10 Nov 2026 11:37:54 +0000","description":"A flat file is a plain, unstructured file that stores data as text or binary, with no indexes, relations or query engine of its own","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/flat-file.html"]}],"alternateName":["flat-file-database","flat-file-cms"],"keywords":["concept","architecture","storage"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cms.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/markdown.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yaml.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file_get_contents.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file_put_contents.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/document-database.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.file-get-contents.php"},{"@type":"CreativeWork","name":"Flat-file database - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Flat-file_database"},{"@type":"CreativeWork","name":"Flat-file CMS - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Flat-file_database#Flat-file_content_management_systems"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.41","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"flat-file"}]}]}</script>
```php
<?php

    // A flat-file CMS: each page is one Markdown file with YAML front matter
    $path = __DIR__ . '/content/blog/' . $slug . '.md';

    if (!is_file($path)) {
        http_response_code(404);
        exit;
    }

    [$meta, $body] = explode(\n---\n, file_get_contents($path), 2);
    $page = ['title' => $meta, 'body' => $body];

    // Saving a page is writing the file back
    file_put_contents($path, $newMeta . \n---\n . $newBody, LOCK_EX);

?>
```

**[Documentation](https://www.php.net/manual/en/function.file-get-contents.php)**
## See Also

+ [Flat-file database - Wikipedia](https://en.wikipedia.org/wiki/Flat-file_database)
+ [Flat-file CMS - Wikipedia](https://en.wikipedia.org/wiki/Flat-file_database#Flat-file_content_management_systems)

## Related

+ [Content Management System (CMS)](cms.html)
+ [Markdown](markdown.html)
+ [YAML Ain't Markup Language (YAML)](yaml.html)
+ [JavaScript Object Notation (JSON)](json.html)
+ [Database](database.html)
+ [file\_get\_contents()](file_get_contents.html)
+ [file\_put\_contents()](file_put_contents.html)
+ [Document Database](document-database.html)
