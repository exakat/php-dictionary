.. _close-tag:

Close Tag
---------

PHP commands are placed between the PHP tags : ``<?php`` and ``?>``.  The second tag is called the closing tag. 

Closing tag allow to finish a PHP tag, and switch back to non-interpreted code. The text following the closing tag is then display raw, until the next PHP tag. 

When a file online contains PHP code, the closing tag is not necessary. Its absence even prevents the accidental adding of white space, which create output errors.


.. code-block:: php
   
   <?php
   // here, PHP code
   
   // the closing tag
   ?>Here, raw text, always displayed
   <?php
   // more PHP code
   
   // No final closing tag
   


`Documentation <https://www.php.net/manual/en/language.basic-syntax.phptags.php>`__

See also `You shouldn't use PHP Closing Tags <https://www.youtube.com/watch?v=mXzUwcDBtkA>`_, `Should You Close PHP Tags? The Debate Continues… <https://www.sitepoint.com/closing-php-tags-debate/>`_

Related : :ref:`Open Tag <open-tag>`, :ref:`Short Tags <short-tag>`
