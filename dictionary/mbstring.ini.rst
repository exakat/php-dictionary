.. _mbstring:
.. _multibyte-string:
.. meta::
	:description:
		Multibyte String: ``mbstring`` provides function to process multibyte strings functions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Multibyte String
	:twitter:description: Multibyte String: ``mbstring`` provides function to process multibyte strings functions
	:twitter:creator: @exakat
	:og:title: Multibyte String
	:og:type: article
	:og:description: ``mbstring`` provides function to process multibyte strings functions
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/mbstring.ini.html
	:og:locale: en


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
