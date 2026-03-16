.. _file_get_contents:
.. meta::
	:description:
		file_get_contents(): ``file_get_contents()`` is a PHP native function, which reads all data from a file, in one call.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: file_get_contents()
	:twitter:description: file_get_contents(): ``file_get_contents()`` is a PHP native function, which reads all data from a file, in one call
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: file_get_contents()
	:og:type: article
	:og:description: ``file_get_contents()`` is a PHP native function, which reads all data from a file, in one call
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/file_get_contents.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"file_get_contents()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Mar 2026 06:41:52 +0000","dateModified":"Tue, 10 Mar 2026 06:41:52 +0000","description":"``file_get_contents()`` is a PHP native function, which reads all data from a file, in one call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/file_get_contents().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


file_get_contents()
-------------------

``file_get_contents()`` is a PHP native function, which reads all data from a file, in one call. The function requires the file name, or a valid URI, with its path of storage in the file system.

The function also include options to handle concurrency with locks; to append data rather than overwrite them with ``FILE_APPEND``, and a restriction to use file in the ``include_path`` configuration.

``file_get_contents()`` returns a string, or ``false`` in case of error. The maximum size of the returned string may be limited by configuration.

``file_get_contents()`` works with streams to reach network files. It also supports wrappers, to use various predefined and custom protocols, such as ``https``, ``file``, ``zip``, etc.


.. code-block:: php
   
   <?php
   
       $json = file_get_contents('/path/to/config.json');
   
   ?>


`Documentation <https://www.php.net/manual/en/function.file-get-contents.php>`__

Related : :ref:`Universal Resource Identifier (URI) <uri>`, :ref:`False <false>`, :ref:`String <string>`, :ref:`Stream <stream>`, :ref:`Wrapper <wrapper>`
