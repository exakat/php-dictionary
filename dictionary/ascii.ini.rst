.. _ascii:
.. meta::
	:description:
		American Standard Code for Information Interchange (ASCII): ASCII is a character encoding standard used to represent text in computers and electronic devices.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: American Standard Code for Information Interchange (ASCII)
	:twitter:description: American Standard Code for Information Interchange (ASCII): ASCII is a character encoding standard used to represent text in computers and electronic devices
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: American Standard Code for Information Interchange (ASCII)
	:og:type: article
	:og:description: ASCII is a character encoding standard used to represent text in computers and electronic devices
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/ascii.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"American Standard Code for Information Interchange (ASCII)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"ASCII is a character encoding standard used to represent text in computers and electronic devices","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/American Standard Code for Information Interchange (ASCII).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


American Standard Code for Information Interchange (ASCII)
----------------------------------------------------------

ASCII is a character encoding standard used to represent text in computers and electronic devices. It assigns a unique number (or code) to each character, allowing text to be stored and processed digitally.

PHP handles ASCII characters with the functions ``ord()`` and ``chr()``. 


.. code-block:: php
   
   <?php
   
   $string = 'abdc';
   
   echo ord($string[1]); // b = 98
   
   echo chr(100); // d
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/ASCII>`__

See also http://www.hackingwithphp.com/4/7/3/converting-to-and-from-ascii

Related : :ref:`Byte <byte>`, :ref:`Character <character>`
