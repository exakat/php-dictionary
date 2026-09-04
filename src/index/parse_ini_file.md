# parse\_ini\_file()
``parse_ini_file()`` is a PHP native function that reads an INI configuration file and returns its content as an associative array.

By default, sections, i.e. lines like ``[section]``, are dropped and only the settings inside them are returned. Passing ``true`` as the second argument, ``process_sections``, keeps each section as its own nested array in the result.

A third argument, ``scanner_mode``, controls how values are read: ``INI_SCANNER_NORMAL``, the default, returns every value as a string; ``INI_SCANNER_RAW`` disables all value interpretation, including PHP constants; ``INI_SCANNER_TYPED`` converts recognizable values, such as ``true``, ``false``, ``null``, and numeric strings, to their native PHP type.

``parse_ini_file()`` reads and interprets PHP constants found in unquoted values, which makes it unsafe to run against a file supplied or editable by an untrusted party. ``parse_ini_string()`` performs the same parsing on a string already held in memory, rather than a file on disk.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parse_ini_file.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parse_ini_file.html","name":"parse_ini_file()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 28 Aug 2026 09:43:09 +0000","dateModified":"Fri, 28 Aug 2026 09:43:09 +0000","description":"parse_ini_file() is a PHP native function that reads an INI configuration file and returns its content as an associative array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parse_ini_file.html"]}],"keywords":["native function","configuration"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php.ini.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directive.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json_decode.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.parse-ini-file.php"},{"@type":"CreativeWork","name":"PHP: parse_ini_string()","url":"https:\/\/www.php.net\/manual\/en\/function.parse-ini-string.php"},{"@type":"CreativeWork","name":"INI file - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/INI_file"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"parse_ini_file"}]}]}</script>
```php
<?php

    // config.ini:
    // [database]
    // host = localhost
    // port = 5432
    // enabled = true

    $config = parse_ini_file('config.ini', true, INI_SCANNER_TYPED);

    // $config = [
    //     'database' => [
    //         'host' => 'localhost',
    //         'port' => 5432,     // int, thanks to INI_SCANNER_TYPED
    //         'enabled' => true,  // bool, thanks to INI_SCANNER_TYPED
    //     ],
    // ];

?>
```

**[Documentation](https://www.php.net/manual/en/function.parse-ini-file.php)**
## See Also

+ [PHP: parse_ini_string()](https://www.php.net/manual/en/function.parse-ini-string.php)
+ [INI file - Wikipedia](https://en.wikipedia.org/wiki/INI_file)

## Related

+ [php\\.ini](php.ini.html)
+ [Directives](directive.html)
+ [Array, []](array.html)
+ [json\_decode()](json_decode.html)
