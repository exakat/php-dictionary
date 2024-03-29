.. _imagickpixelexception:

ImagickPixelException
---------------------

ImagickPixelException is an exception class that is used to handle exceptions related to problems with ImagickPixel objects.

ImagickPixelException happens when using invalid color specification.

ImagickPixelException is related to the Imagick extension.

.. code-block:: php
   
   <?php
   
   try {
   	// valid creation
   	new ImagickPixel("LightCoral");
   	
   	// invalid creation
   	new ImagickPixel("LightCorral");
   } catch (ImagickPixelException $e) {
   	log(Error while creating a pixel);
   }
   ?>


`Documentation <https://www.php.net/manual/en/imagickpixel.construct.php>`__
