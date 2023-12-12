.. _heredoc:

Heredocs
--------

Heredoc is a string syntax, similar to nowdoc, with internal variable interpolation. They behave like double quoted strings.

The Heredocs syntax uses an arbitrary delimiter. The same delimiter will mark the end of the string.

Heredocs are convenient for large amount of text, that has to be hardcoded. Smaller string will be better suited with double quotes, while even longer text should be processed with a templating system.

It is possible to indent the text in a nowdocs string: to avoid this indentation to be passed at execution time, the final delimiter may be indented too. Its indentation will be removed from the parsed text.


.. code-block:: php
   
   <?php
   
   $heredoc = <<<DELIM
   This is a long text.
   
   $variable will not be replaced, and the text stays intact.
   
   DELIM;
   
   $heredoc = <<<DELIM
       This is an indented text.
       DELIM;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc>`__

Related : :ref:`Nowdocs <nowdoc>`, :ref:`String <string>`

Added in PHP 5.5
