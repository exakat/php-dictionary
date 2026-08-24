# UTF-8
UTF-8 is a character encoding standard. It is defined by the Unicode Standard. The acronym stands for ``Unicode Transformation Format – 8-bit``. 

PHP handles the UTF-8 encoding natively: at input time, with the ``input_encoding`` directive; at output time, with the ``output_encoding`` and internally with the ``internal_encoding``. All of them can use independent values, yet they all default to ``default_charset``, which uses ``UTF-8`` as default value.

For other manipulations, such as converting sources such as file or databases content to and from UTF-8, PHP relies on ``mbstring`` and ``iconv`` libraries.

Special functions, such as ``utf8_encode()`` and ``utf8_decode()`` are deprecated since PHP 8.2, and should be be used.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/utf-8.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/utf-8.html","name":"UTF-8","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"UTF-8 is a character encoding standard","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/utf-8.html"]}],"alternateName":["utf8"],"keywords":["encoding"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/encoding.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/latin1.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/character.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/default_charset.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/UTF-8"},{"@type":"CreativeWork","name":"The Fun that is UTF-8 Support in PHP","url":"https:\/\/blog.martinfjordvald.com\/the-fun-that-is-utf-8-support-in-php\/"},{"@type":"CreativeWork","name":"UTF-8, PHP and MySQL","url":"https:\/\/akrabat.com\/utf8-php-and-mysql\/\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"utf-8"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/UTF-8)**
## See Also

+ [The Fun that is UTF-8 Support in PHP](https://blog.martinfjordvald.com/the-fun-that-is-utf-8-support-in-php/)
+ [UTF-8, PHP and MySQL](https://akrabat.com/utf8-php-and-mysql//)

## Related

+ [Encoding](encoding.html)
+ [Latin1](latin1.html)
+ [Character](character.html)
+ [default\_charset](default_charset.html)
