# PHP\_EOL
``PHP_EOL`` is a native PHP constant that holds the end-of-line sequence used by the operating system PHP is running on.

``PHP_EOL`` is ``\n`` on Unix-like systems, macOS included, and ``\r\n`` on Windows. Using ``PHP_EOL`` instead of a hardcoded ``\n`` makes scripts that write plain text files, such as logs or CLI output, produce line endings that match the host platform, which matters for tools that expect the native convention.

``PHP_EOL`` is only useful for output meant to be read on the local machine or by local tools. Text destined for the web, such as HTML output or HTTP headers, should keep using ``\n``, since browsers and network protocols are not affected by the server's own line ending convention.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php_eol.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php_eol.html","name":"PHP_EOL","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 30 Aug 2026 07:38:15 +0000","dateModified":"Sun, 30 Aug 2026 07:38:15 +0000","description":"PHP_EOL is a native PHP constant that holds the end-of-line sequence used by the operating system PHP is running on","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php_eol.html"]}],"keywords":["native constant"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php_int_max.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/reserved.constants.php"},{"@type":"CreativeWork","name":"How to Set End of Line in PHP With PHP_EOL","url":"https:\/\/www.delftstack.com\/howto\/php\/php_eol\/"},{"@type":"CreativeWork","name":"When do I use the PHP constant PHP_EOL?","url":"https:\/\/stackoverflow.com\/questions\/128560\/when-do-i-use-the-php-constant-php-eol"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"php_eol"}]}]}</script>
```php
<?php

echo 'First line' . PHP_EOL . 'Second line';

// Writing a log file with platform-native line endings
file_put_contents('app.log', 'Started' . PHP_EOL, FILE_APPEND);

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.constants.php)**
## See Also

+ [How to Set End of Line in PHP With PHP_EOL](https://www.delftstack.com/howto/php/php_eol/)
+ [When do I use the PHP constant PHP_EOL?](https://stackoverflow.com/questions/128560/when-do-i-use-the-php-constant-php-eol)

## Related

+ [Constants](constant.html)
+ [PHP\_INT\_MAX](php_int_max.html)
+ [String](string.html)
