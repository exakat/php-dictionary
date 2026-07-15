.. _plain-text:
.. meta::
	:description:
		Plain Text: Plain Text refers to data that is human-readable, and not protected by any cryptography transformation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Plain Text
	:twitter:description: Plain Text: Plain Text refers to data that is human-readable, and not protected by any cryptography transformation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Plain Text
	:og:type: article
	:og:description: Plain Text refers to data that is human-readable, and not protected by any cryptography transformation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/plain-text.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/plain-text.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/plain-text.ini.html","name":"Plain Text","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Plain Text refers to data that is human-readable, and not protected by any cryptography transformation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Plain Text.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Plain Text
----------

Plain Text refers to data that is human-readable, and not protected by any cryptography transformation. It may be read and understood as is.

Plain text is the result of a cracking process, or deciphering, where the original data is crypted, and that transformation was lifted.

.. code-block:: php
   
   <?php
   
       $plainText = 'PHP Rocks!';
       
       $cryptedData = str_rot13($plainText); // cannot be read anymore
       
       $plainTextAgain = str_rot13($cryptedData);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Plain_text>`__

Related : :ref:`To Crypt <crypt>`, :ref:`Rich Text <rich-text>`, :ref:`Markdown <markdown>`, :ref:`PDF <pdf>`, :ref:`Text <text>`
