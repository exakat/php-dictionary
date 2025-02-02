.. _gettext:
.. meta::
	:description:
		gettext extension: gettext is a library that provides features to translate messages for the users.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: gettext extension
	:twitter:description: gettext extension: gettext is a library that provides features to translate messages for the users
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: gettext extension
	:og:type: article
	:og:description: gettext is a library that provides features to translate messages for the users
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/gettext.ini.html
	:og:locale: en


gettext extension
-----------------

gettext is a library that provides features to translate messages for the users. It includes the famous gettext() function, and its alias ``_()`` (underscore).

It is based on the locale system, and the .mo files.

.. code-block:: php
   
   <?php
   
   // example from the PHP manual: https://www.php.net/manual/en/function.gettext.php
   // Set language to German
   putenv('LC_ALL=de_DE');
   setlocale(LC_ALL, 'de_DE');
   
   // Specify location of translation tables
   bindtextdomain(myPHPApp, ./locale);
   
   // Choose domain
   textdomain(myPHPApp);
   
   // Translation is looking for in ./locale/de_DE/LC_MESSAGES/myPHPApp.mo now
   
   // Print a test message
   echo gettext(Welcome to My PHP Application);
   
   // Or use the alias _() for gettext()
   echo _(Have a nice day);
   ?>


`Documentation <https://www.php.net/manual/en/ref.gettext.php>`__

See also https://www.php.net/manual/en/function.gettext.php
