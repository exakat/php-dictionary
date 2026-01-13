.. _file:
.. meta::
	:description:
		File: A file is a named collection of data or information that is stored and organized on a computer's storage system.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: File
	:twitter:description: File: A file is a named collection of data or information that is stored and organized on a computer's storage system
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: File
	:og:type: article
	:og:description: A file is a named collection of data or information that is stored and organized on a computer's storage system
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/file.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"File","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"A file is a named collection of data or information that is stored and organized on a computer's storage system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/File.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


File
----

A file is a named collection of data or information that is stored and organized on a computer's storage system. In computing, files are used to store various types of data, such as text, images, audio, video, programs, and more. Files can be created, accessed, modified, and deleted by computer programs and users.

Files are typically organized into a hierarchical structure called a file system, which helps to manage and organize them. Each file is identified by a unique name, which allows it to be located and accessed within the file system. Files can be stored on different types of storage media, including hard drives, solid-state drives, network storage, and removable storage devices such as USB drives.

A file consists of two main components: the file name and the file content. The file name is used to identify and refer to the file, while the file content contains the actual data stored within the file. The content can vary depending on the type of file, such as plain text, binary data, or specific file formats.

A file is a resource for recording data on a computer storage device, such as a hard drive or memory.

``file://`` is also the name of a wrapper, for stream.


.. code-block:: php
   
   <?php
   
   file_put_contents('file.txt', 'some text.');
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Computer_file>`__

See also `File system <https://www.php.net/manual/en/book.filesystem.php>`_

Related : :ref:`file:// <wrapper-file>`, :ref:`File System <filesystem>`, :ref:`Universal Resource Locator (URL) <url>`
