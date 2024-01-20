.. _mbstring:
.. _multibyte-string:

Multibyte String
----------------

``mbstring`` provides function to process multibyte strings functions. Moreover, ``mbstring`` converts from and to various character encodings.


.. code-block:: php
   
   
   <?php
   /* Convert EUC-JP to UTF-7 */
   $str = mb_convert_encoding($str, "UTF-7", "EUC-JP");
   ?>
   


`Documentation <https://www.php.net/manual/en/book.mbstring.php>`__

Related : :ref:`Iconv <iconv>`, :ref:`Encoding <encoding>`
