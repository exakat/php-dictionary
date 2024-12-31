.. _file:
.. meta::
	:description:
		File: A file is a named collection of data or information that is stored and organized on a computer's storage system.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: File
	:twitter:description: File: A file is a named collection of data or information that is stored and organized on a computer's storage system
	:twitter:creator: @exakat
	:og:title: File
	:og:type: article
	:og:description: A file is a named collection of data or information that is stored and organized on a computer's storage system
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/file.ini.html
	:og:locale: en


File
----

A file is a named collection of data or information that is stored and organized on a computer's storage system. In computing, files are used to store various types of data, such as text, images, audio, video, programs, and more. Files can be created, accessed, modified, and deleted by computer programs and users.

Files are typically organized into a hierarchical structure called a file system, which helps to manage and organize them. Each file is identified by a unique name, which allows it to be located and accessed within the file system. Files can be stored on different types of storage media, including hard drives, solid-state drives, network storage, and removable storage devices such as USB drives.

A file consists of two main components: the file name and the file content. The file name is used to identify and refer to the file, while the file content contains the actual data stored within the file. The content can vary depending on the type of file, such as plain text, binary data, or specific file formats.

A file is a resource for recording data on a computer storage device, such as a hard drive or memory.

.. code-block:: php
   
   
   <?php
   
   file_put_contents('file.txt', 'some text.');
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Computer_file>`__

See also `File system <https://www.php.net/manual/en/book.filesystem.php>`_

Related : :ref:`File System <filesystem>`, :ref:`Universal Resource Locator (URL) <url>`
