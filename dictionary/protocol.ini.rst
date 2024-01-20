.. _protocol:

Protocol
--------

A protocol is a scheme part of a URL, with an associated wrapper. 

In a URL like ``ftp://www.site.com/file.txt``, the protocol is ``ftp``, and relates to the FTP protocol. It is also a predefined PHP wrapper.


.. code-block:: php
   
   <?php
   
   $html = file_get_content('http://www.php.net/');
   
   ?>


`Documentation <https://www.php.net/manual/en/class.streamwrapper.php>`__

See also `Protocols and Wrapper in PHP <https://www.geeksforgeeks.org/protocols-and-wrapper-in-php/>`_

Related : :ref:`Wrapper <wrapper>`
