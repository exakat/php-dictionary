.. _pack:
.. meta::
	:description:
		pack: Pack() is a native PHP function which converts given arguments into a binary string according to format.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: pack
	:twitter:description: pack: Pack() is a native PHP function which converts given arguments into a binary string according to format
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: pack
	:og:type: article
	:og:description: Pack() is a native PHP function which converts given arguments into a binary string according to format
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pack.ini.html
	:og:locale: en


pack
----

Pack() is a native PHP function which converts given arguments into a binary string according to format. By extension, pack is the string that defines that format. 

.. code-block:: php
   
   <?php
     
     print pack("nvc*", 0x1234, 0x5678, 65, 66);
     // displays 4xVAB
   
   ?>


`Documentation <https://www.php.net/manual/en/function.pack.php>`__

Related : :ref:`Unpacking <unpack>`
