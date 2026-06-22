.. _fopen:
.. meta::
	:description:
		fopen(): ``fopen()`` is a PHP native function which opens a file.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: fopen()
	:twitter:description: fopen(): ``fopen()`` is a PHP native function which opens a file
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: fopen()
	:og:type: article
	:og:description: ``fopen()`` is a PHP native function which opens a file
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fopen.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"fopen()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``fopen()`` is a PHP native function which opens a file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/fopen().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


fopen()
-------

``fopen()`` is a PHP native function which opens a file. It returns a file description, also called handle, that may be used with other PHP file functions to read and write data from and to the files.

``fopen()`` may also be replaced by the ``SplFileObject`` class, which provides a OOP syntax alternative to access files.


.. code-block:: php
   
   <?php
   
       $fp = fopen('/tmp/test.txt', 'r');
       fwrite($fp, 'PHP rocks!');
       fclose($fp);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.fopen.php>`__

See also `PHP Open File <https://www.phptutorial.net/php-tutorial/php-open-file/>`_.

Related : :ref:`File <file>`, :ref:`Writing <write>`, :ref:`Permission <permission>`, :ref:`Writeable <writeable>`, :ref:`Readable <readable>`, :ref:`SplFileObject <splfileobject>`, :ref:`$http_response_header <$http_response_header>`, :ref:`File Mode <file-mode>`, :ref:`Resource Leak <resource-leak>`, :ref:`Text <text>`, :ref:`Handle <handle>`, :ref:`Universal Resource Locator (URL) <url>`
