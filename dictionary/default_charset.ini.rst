.. _default_charset:
.. meta::
	:description:
		default_charset: ``default_charset`` is the default value for the character encoding with ``htmlentities()``, ``html_entity_decode()`` and ``htmlspecialchars()``, when the encoding parameter is omitted.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: default_charset
	:twitter:description: default_charset: ``default_charset`` is the default value for the character encoding with ``htmlentities()``, ``html_entity_decode()`` and ``htmlspecialchars()``, when the encoding parameter is omitted
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: default_charset
	:og:type: article
	:og:description: ``default_charset`` is the default value for the character encoding with ``htmlentities()``, ``html_entity_decode()`` and ``htmlspecialchars()``, when the encoding parameter is omitted
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/default_charset.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"default_charset","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 30 Mar 2026 19:07:17 +0000","dateModified":"Mon, 30 Mar 2026 19:07:17 +0000","description":"``default_charset`` is the default value for the character encoding with ``htmlentities()``, ``html_entity_decode()`` and ``htmlspecialchars()``, when the encoding parameter is omitted","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/default_charset.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


default_charset
---------------

``default_charset`` is the default value for the character encoding with ``htmlentities()``, ``html_entity_decode()`` and ``htmlspecialchars()``, when the encoding parameter is omitted. 

It also defines the default character set for ``iconv`` and ``mbstring`` extensions, and for the ``Content-Type`` HTTP headers, when custom versions are not defined.

The value of ``default_charset`` must be a valid IANA character set name. Possible values include ``UTF-8``, by default, ``ISO-8859-1`` also known as ``Latin1``, ``Windows-1252``, ``ISO-8859-15``, ``Shift_JIS``, ``EUC-JP``, ``GB2312``, ``Big5``. The charset is case-insensitive, so ``big5`` and ``BIG5`` and ``Big5`` are all valid. Invalid charset default, again, to ``UTF-8``.

`Documentation <https://www.php.net/manual/en/ini.core.php#ini.default-charset>`__

See also https://php.watch/codex/default_charset, https://www.iana.org/assignments/character-sets/character-sets.xhtml

Related : :ref:`UTF-8 <utf-8>`, :ref:`Encoding <encoding>`, , , 
