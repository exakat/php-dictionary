# default\_charset
``default_charset`` is the default value for the character encoding with ``htmlentities()``, ``html_entity_decode()`` and ``htmlspecialchars()``, when the encoding parameter is omitted. 

It also defines the default character set for ``iconv`` and ``mbstring`` extensions, and for the ``Content-Type`` HTTP headers, when custom versions are not defined.

The value of ``default_charset`` must be a valid IANA character set name. Possible values include ``UTF-8``, by default, ``ISO-8859-1``, also known as ``Latin1``, ``Windows-1252``, ``ISO-8859-15``, ``Shift_JIS``, ``EUC-JP``, ``GB2312``, ``Big5``. The charset is case-insensitive, so ``big5`` and ``BIG5`` and ``Big5`` are all valid. An invalid charset defaults, again, to ``UTF-8``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/default_charset.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/default_charset.html","name":"default_charset","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:41:14 +0000","dateModified":"Tue, 11 Aug 2026 14:41:14 +0000","description":"default_charset is the default value for the character encoding with htmlentities(), html_entity_decode() and htmlspecialchars(), when the encoding parameter is omitted","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/default_charset.html"]}],"keywords":["directive"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/utf-8.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/encoding.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/htmlentities.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/htmlspecialchars.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/html_entity_decode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/incoming-data.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/outgoing-data.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/ini.core.php#ini.default-charset"},{"@type":"CreativeWork","name":"About default_charset","url":"https:\/\/php.watch\/codex\/default_charset"},{"@type":"CreativeWork","name":"IANA Character Sets","url":"https:\/\/www.iana.org\/assignments\/character-sets\/character-sets.xhtml"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"default_charset"}]}]}</script>
**[Documentation](https://www.php.net/manual/en/ini.core.php#ini.default-charset)**
## See Also

+ [About default_charset](https://php.watch/codex/default_charset)
+ [IANA Character Sets](https://www.iana.org/assignments/character-sets/character-sets.xhtml)

## Related

+ [UTF-8](utf-8.html)
+ [Encoding](encoding.html)
+ [htmlentities()](htmlentities.html)
+ [htmlspecialchars](htmlspecialchars.html)
+ [html\_entity\_decode](html_entity_decode.html)
+ [Incoming Data](incoming-data.html)
+ [Outgoing Data](outgoing-data.html)
