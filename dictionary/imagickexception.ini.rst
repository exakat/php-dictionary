.. _imagickexception:

ImagickException
----------------

The ImagickException exception is thrown when an error happens while processing an Imagick operation.

.. code-block:: php
   
   <?php
   
   try {
       $imagick->gammaImage($correction, \Imagick::CHANNEL_ALL);
   } catch (\ImagickException $e) {
       throw new RuntimeException('Failed to apply gamma correction to the image');
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/book.imagick.php>`__

See also `How to Fix 'ImagickException: not authorized' <https://andy-carter.com/blog/how-to-fix-imagickexception-not-authorized>`_

Related : :ref:`Exception <exception>`
