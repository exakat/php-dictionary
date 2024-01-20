.. _filesystemiterator:

FileSystemIterator
------------------

the FilesystemIterator class is part of the Standard PHP Library (SPL) and is used for iterating over the contents of a directory. It extends the DirectoryIterator class and provides additional features for working with file system entries.

.. code-block:: php
   
   
   <?php
   $it = new FilesystemIterator(dirname(__FILE__), FilesystemIterator::CURRENT_AS_FILEINFO);
   foreach ($it as $fileinfo) {
       echo $fileinfo->getFilename() . \n;
   }
   ?>
   


`Documentation <https://www.php.net/manual/en/class.filesystemiterator.php>`__

Related : :ref:`DirectoryIterator <directoryiterator>`
