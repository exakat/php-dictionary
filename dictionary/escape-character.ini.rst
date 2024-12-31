.. _escape-character:
.. meta::
	:description:
		Escape Character: Escape characters are special characters, that introduce a special meaning, for example when redacting an escape sequence.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Escape Character
	:twitter:description: Escape Character: Escape characters are special characters, that introduce a special meaning, for example when redacting an escape sequence
	:twitter:creator: @exakat
	:og:title: Escape Character
	:og:type: article
	:og:description: Escape characters are special characters, that introduce a special meaning, for example when redacting an escape sequence
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/escape-character.ini.html
	:og:locale: en


Escape Character
----------------

Escape characters are special characters, that introduce a special meaning, for example when redacting an escape sequence.

Escape characters are often generating a special sequence to escape themselves and allow their literal meaning to be expressed.

In PHP's strings and HEREDOC, the escape character is the backslash : "\".



.. code-block:: php
   
   <?php
   
   echo "<a href="https://www.exakat.io/" />";
   
   ?>


`Documentation <https://www.php.net/manual/en/regexp.reference.escape.php>`__

See also `String literals (MySQL) <https://dev.mysql.com/doc/refman/8.0/en/string-literals.html>`_
