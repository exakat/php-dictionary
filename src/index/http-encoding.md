# HTTP Encoding
URL encoding, also known as percent-encoding, is a mechanism used to convert characters into a format that can be transmitted over the Internet. URLs can only contain a limited set of characters, consisting mainly of alphanumeric characters along with a few special characters such as hyphens, underscores, periods, and tilde ``~``.

When a URL contains characters outside this set, such as spaces or non-alphanumeric characters like ampersands, question marks, or slashes, URL encoding is used to represent those characters in a safe and compatible format.

URL encoding works by replacing each non-alphanumeric character with a percent sign ``%`` followed by two hexadecimal digits that represent the ASCII or Unicode code of the character. For example:

+ Space ``' '`` is encoded as %20.
+ Ampersand ``&`` is encoded as %26.
+ Question mark ``?`` is encoded as %3F.
+ Slash ``/`` is encoded as %2F.

URL encoding ensures that URLs remain valid and functional across different systems and protocols. It is commonly used in web browsers, HTTP requests, and other internet-related technologies to transmit data safely and reliably. Most programming languages provide built-in functions or libraries to perform URL encoding and decoding operations.

PHP provides ``urlencode()`` and ``urldecode()`` to handle coding and decoding this format.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-encoding.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-encoding.html","name":"HTTP Encoding","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"URL encoding, also known as percent-encoding, is a mechanism used to convert characters into a format that can be transmitted over the Internet","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/HTTP Encoding.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"http-encoding"}]}]}</script>
```php
<?php

    $text = "This is the Euro symbol €.";
    
    // builds a valid URL 
    $url = 'https://www.example.com/'.urlencode($text);
    
    // https://www.example.com/This+is+the+Euro+symbol+%27%E2%82%AC%27.

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Percent-encoding)**
## See Also

+ [urlencode()](https://www.php.net/urlencode)
+ [urldecode()](https://www.php.net/urldecode)

## Related

+ [Text Encoding](text-encoding.html)
+ [Encoding](encoding.html)
