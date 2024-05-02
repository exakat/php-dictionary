.. _php-extension:

PHP Extensions
--------------

Extensions are PHP module system. They are compiled into PHP, and offer extra features, such as functions, classes, traits and directive.

Extensions are published in the PECL repository. Some are available by default, in the PHP standard configuration. 


.. code-block:: php
   
   <?php
   
   // Example with the ext/pspell extensions, for orthographic checks
   $pspell = pspell_new("en");
   
   if (pspell_check($pspell, "testt")) {
       echo "This is a valid spelling";
   } else {
       echo "Sorry, wrong spelling";
   }
   ?>
   


`Documentation <https://www.php.net/manual/en/install.pecl.php>`__
