.. _escape-sequence:
.. _string-sequence:
.. meta::
	:description:
		Escape Sequences: Escape sequences are sequences of characters with a special meaning.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Escape Sequences
	:twitter:description: Escape Sequences: Escape sequences are sequences of characters with a special meaning
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Escape Sequences
	:og:type: article
	:og:description: Escape sequences are sequences of characters with a special meaning
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/escape-sequence.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Escape Sequences","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 12:54:20 +0000","dateModified":"Mon, 26 Jan 2026 12:54:20 +0000","description":"Escape sequences are sequences of characters with a special meaning","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Escape Sequences.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Escape Sequences
----------------

Escape sequences are sequences of characters with a special meaning. Most of the time, the literal value of the character displayed is its meaning, while, sometimes, there are other hidden meaning.

An escape sequence is dedicated to a technology, and they are rare the same between two technologies, or even, between two engines dedicated to that technology.

Here are some examples of escape sequences.

PHP, in strings: 
  + \n (new line)
  + \t (horizontal tabulation)
  + ""  (double quote, inside a double quoted-string)
  + \  This is not an escape sequence : single quoted string do not recognize this
  + \u{01f418} : a unicode codepoint, representing an elephpant
  + \200 : a character in octal notation
  + \x69 : a character in hexadecimal notation

HTML : 
 + &acute; (a acute accent)
 + &quote; (double quote)

Escape sequences should not be confused with escape characters, though they are related : some escape sequences are introduced by an escape character. Others rely on a format.

.. code-block:: php
   
   <?php
   
   // \1 is an escape sequence that represents the first capturing parenthsis. 
   // It is a special meaning for REGEX.
   preg_match('/(.)\1/', $string);
   
   // Displays AA
   echo "A\101";
   
   ?>


`Documentation <https://www.php.net/manual/en/regexp.reference.escape.php>`__

See also https://dev.mysql.com/doc/refman/8.0/en/string-literals.html, https://www.postgresql.org/docs/current/sql-syntax-lexical.html#:~:text=PostgreSQL%20also%20accepts%20%E2%80%9Cescape%E2%80%9D%20string,e.g.%2C%20E'foo'%20., https://en.wikipedia.org/wiki/INI_file.
