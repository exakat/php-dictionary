.. _shared-memory:
.. meta::
	:description:
		Shared Memory: Shared memory is a powerful feature in PHP that allows multiple processes to access and store data in a shared memory segment.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Shared Memory
	:twitter:description: Shared Memory: Shared memory is a powerful feature in PHP that allows multiple processes to access and store data in a shared memory segment
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Shared Memory
	:og:type: article
	:og:description: Shared memory is a powerful feature in PHP that allows multiple processes to access and store data in a shared memory segment
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/shared-memory.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Shared Memory","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 12:49:55 +0000","dateModified":"Thu, 22 Jan 2026 12:49:55 +0000","description":"Shared memory is a powerful feature in PHP that allows multiple processes to access and store data in a shared memory segment","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Shared Memory.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Shared Memory
-------------

Shared memory is a powerful feature in PHP that allows multiple processes to access and store data in a shared memory segment.

.. code-block:: php
   
   <?php
      
   // adapted from the PHP manual : https://www.php.net/manual/en/shmop.examples-basic.php
   // Create 100 byte shared memory block with system id of 0xff3
   $shm_id = shmop_open(0xff3, c, 0644, 100);
   if (!$shm_id) {
       echo "Couldn't create shared memory segment\n";
   }
   
   // Lets write a test string into shared memory
   $shm_bytes_written = shmop_write($shm_id, my shared memory block, 0);
   if ($shm_bytes_written != strlen(my shared memory block)) {
       echo "Couldn't write the entire length of data\n";
   }
   
   // Now lets read the string back
   // 
   $my_string = shmop_read($shm_id, 0, $shm_size);
   if (!$my_string) {
       echo "Couldn't read from shared memory block\n";
   }
   echo "The data inside shared memory was:  . $my_string . \n";
   
   ?>


`Documentation <https://www.php.net/manual/en/shmop.examples-basic.php>`__

See also https://reintech.io/blog/a-guide-to-php-shmop-library-for-shared-memory-operations
