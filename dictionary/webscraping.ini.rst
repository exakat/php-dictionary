.. _webscraping:

Webscraping
-----------

Web scraping is the process of extracting data from websites. It involves fetching the web page's HTML code and then using programming techniques to extract the desired information from that code. Web scraping is often used when the data you need is not available through an API (Application Programming Interface) or other structured means.

The interrogation of the remote API may be done with PHP native functions or cUrl. The scraping itself may be done with regex for the most simple one: it requires a specific parser to extract structured information.

.. code-block:: php
   
   <?php
   
   // Loading the remote page
   $html = file_get_contents('https://www.example.com/');
   
   // Identify links
   preg_match_all('/<a href="(.*?)"/', $html, $r);
   
   foreach ($r[1] as $link) {
   	echo $link.PHP_EOL;
   }
   
   ?>
   


Related : :ref:`Curl <curl>`
