.. _sanitation:
.. _sanitization:

Sanitation
----------

Sanitation is the process to clean data and remove any unwanted parts. The data may end up modified by this process, sometimes quite a lot. There are native and extension functions in PHP to perform sanitation, as long as components.

.. code-block:: php
   
   <?php
   
   echo 'TRANSLIT : ', iconv("UTF-8", "ISO-8859-1//TRANSLIT", $text), PHP_EOL;
   
   ?>


`Documentation <https://www.php.net/manual/en/filter.examples.validation.php>`__

See also `Data sanitization <https://en.wikipedia.org/wiki/Data_sanitization>`_

Related : :ref:`Validation <validation>`

Related packages : `waavi/sanitizer <https://packagist.org/packages/waavi/sanitizer>`_, `waavi/sanitizer <https://packagist.org/packages/waavi/sanitizer>`_
