.. _short-tag:
.. _short-open-tag:

Short Tags
----------

PHP uses special tags to identify code that has to be executed. The short tags are a special set of PHP tag, shorter than the usual ``<?php``. It was simply ``<?``.

Short tags may be disabled in PHP configuration, with the ``short_open_tag`` directive. 

Short tags are different from echo tags : those tags immediately display data.

From the manual : As short tags can be disabled it is recommended to only use the normal tags (<?php ?> and <?= ?>) to maximise compatibility. 


.. code-block:: php
   
   <?php
   
   echo 1;
   ?>
   
   <? 
   // this is a short tag
   echo 2;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.basic-syntax.phptags.php>`__

See also `PHP RFC: Deprecate short open tags, again <https://wiki.php.net/rfc/deprecate_php_short_tags_v2>`_

Related : :ref:`PHP Tags <php-tag>`, :ref:`Echo Tag <echo-tag>`, :ref:`Open Tag <open-tag>`
