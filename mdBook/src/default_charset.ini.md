# default_charset
``default_charset`` is the default value for the character encoding with ``htmlentities()``, ``html_entity_decode()`` and ``htmlspecialchars()``, when the encoding parameter is omitted. 

It also defines the default character set for ``iconv`` and ``mbstring`` extensions, and for the ``Content-Type`` HTTP headers, when custom versions are not defined.

The value of ``default_charset`` must be a valid IANA character set name. Possible values include ``UTF-8``, by default, ``ISO-8859-1`` also known as ``Latin1``, ``Windows-1252``, ``ISO-8859-15``, ``Shift_JIS``, ``EUC-JP``, ``GB2312``, ``Big5``. The charset is case-insensitive, so ``big5`` and ``BIG5`` and ``Big5`` are all valid. Invalid charset default, again, to ``UTF-8``.
## See Also

+ [About default_charset](https://php.watch/codex/default_charset)
+ [IANA Character Sets](https://www.iana.org/assignments/character-sets/character-sets.xhtml)

Related : [UTF-8](UTF-8), [Encoding](Encoding), [htmlentities()](htmlentities()), [htmlspecialchars](htmlspecialchars), [html_entity_decode](html_entity_decode), [Incoming Data](Incoming Data), [Outgoing Data](Outgoing Data)
