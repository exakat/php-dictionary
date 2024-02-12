.. _open-tag:

Open Tag
--------

PHP commands are placed between the PHP tags : ``<?php`` and ``?>``.  The first tag is called the open tag. 

The open tag is mandatory for PHP to execute the code. Anything before the open tag is output as is, without modification.

There is another open tag, called `echo tag`. ``<?=`` starts PHP execution, and outputs the first command. 


.. code-block:: php
   
   <?php
   // here, PHP code
   
   // the closing tag
   ?>Here, raw text, always displayed
   <?php
   // more PHP code
   
   // No final closing tag
   


`Documentation <https://www.php.net/manual/en/language.basic-syntax.phptags.php>`__

Related : :ref:`Echo Tag <echo-tag>`, :ref:`Short Tags <short-tag>`
