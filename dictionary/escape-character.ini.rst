.. _escape-character:

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
