.. _iconv:
.. meta::
	:description:
		Iconv: ``iconv`` is a PHP extension that stands for "Internationalized CONVersion".
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Iconv
	:twitter:description: Iconv: ``iconv`` is a PHP extension that stands for "Internationalized CONVersion"
	:twitter:creator: @exakat
	:og:title: Iconv
	:og:type: article
	:og:description: ``iconv`` is a PHP extension that stands for "Internationalized CONVersion"
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/iconv.ini.html
	:og:locale: en


Iconv
-----

``iconv`` is a PHP extension that stands for "Internationalized CONVersion". It provides functionality to convert strings between different character encodings, making it useful for dealing with multilingual and internationalized applications.

The ``iconv`` extension allows you to convert strings from one character encoding to another, and it also supports transliteration and character set detection. This is particularly important when dealing with data that may come from different sources with various character encodings.

``iconv`` is both a PHP function, a PHP extension and an independent library for character encoding conversion. 

.. code-block:: php
   
   <?php
     echo 'TRANSLIT : ', iconv("UTF-8", "ISO-8859-1//TRANSLIT", $text), PHP_EOL;
     // TRANSLIT : This is the Euro symbol 'EUR'.
   ?>


`Documentation <https://www.php.net/manual/en/language.control-structures.php>`__

See also `libiconv <http://www.gnu.org/software/libiconv/>`_, `How to use Iconv function in PHP <https://topic.alibabacloud.com/a/how-to-use-font-colorrediconvfont-function-in-php_4_86_30934271.html>`_

Related packages : `zbateson/mb-wrapper <https://packagist.org/packages/zbateson/mb-wrapper>`_
