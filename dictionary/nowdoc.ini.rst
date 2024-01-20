.. _nowdoc:

Nowdocs
-------

Nowdocs is a string syntax, similar to heredoc, and without internal parsing. They are similar to single quoted strings, compared to double quoted ones.

The Nowdocs syntax uses an arbitrary delimiter, which has to be enclosed in single quotes. The same delimiter will mark the end of the string.

Nowdocs are convenient for large amount of text, that has to be hardcoded. Smaller string will be better suited with single-quotes, while even longer text should be stored in an external storage, such as a file.

It is possible to indent the text in a nowdocs string: to avoid this indentation to be passed at execution time, the final delimiter may be indented too. Its indentation will be removed from the parsed text.
 

.. code-block:: php
   
   <?php
   
   $nowdoc = <<<'DELIM'
   This is a long text.
   
   $variable will not be replaced, and the text stays intact.
   
   DELIM;
   
   $nowdoc = <<<'DELIM'
           This still will start at the first word, not at the beginning of the string.
           DELIM;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.nowdoc>`__

Related : :ref:`Heredocs <heredoc>`, :ref:`String <string>`

Added in PHP 5.5
