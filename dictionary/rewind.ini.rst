.. _rewind:
.. meta::
	:description:
		rewind(): ``rewind()`` is a native PHP function that sets the file position indicator for a file pointer to the beginning of the file.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: rewind()
	:twitter:description: rewind(): ``rewind()`` is a native PHP function that sets the file position indicator for a file pointer to the beginning of the file
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: rewind()
	:og:type: article
	:og:description: ``rewind()`` is a native PHP function that sets the file position indicator for a file pointer to the beginning of the file
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/rewind.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/rewind.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/rewind.ini.html","name":"rewind()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:17:17 +0000","dateModified":"Mon, 13 Jul 2026 09:17:17 +0000","description":"``rewind()`` is a native PHP function that sets the file position indicator for a file pointer to the beginning of the file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/rewind().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


rewind()
--------

``rewind()`` is a native PHP function that sets the file position indicator for a file pointer to the beginning of the file.

It is equivalent to ``fseek($fp, 0)`` and is useful when re-reading a file from the start without closing and reopening it. The ``rewind()`` function returns ``true`` on success, or ``false`` on failure. A ``E_WARNING`` error is emitted if the file pointer is not valid.

.. code-block:: php
   
   <?php
   
       $fp = fopen('/tmp/test.txt', 'r');
       
       // Read some content
       $content = fread($fp, 100);
       
       // Rewind to the beginning to re-read
       rewind($fp);
       $contentAgain = fread($fp, 100);
       
       fclose($fp);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.rewind.php>`__

See also `rewind() function <https://www.w3docs.com/learn-php/rewind-in-php>`_.

Related : :ref:`fseek() <fseek>`, :ref:`ftell() <ftell>`, :ref:`fopen() <fopen>`, :ref:`fread() <fread>`, :ref:`File <file>`
