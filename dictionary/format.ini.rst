.. _format:

Format
------

Format is a set of rules to structure a piece of text, and make it parsable by a specific engine. A piece of text may be in the format: then, it is usable as a command for another technology. 

Formats have various shapes. Here are some examples of formats: 

+ `SQL` Structure Query Language: `SELECT column FROM table` 
+ Date and time (human): `2020-01-01` 
+ sprintf(): `%d 9` 
+ Regular expressions
+ `YAML`
+ INI
+ CSV
+ JSON

It is possible to define one's custom format. Common formats have a comprehensive specifications (how to build them) and assorted tools (encode, decode, use, combine, etc. ).



.. code-block:: php
   
   <?php
   
   // displays 123 with 9 characters, and fills with dots any empty characters
   // ......123
   echo sprintf("%'.9d\n", 123);
   
   ?>


Related : :ref:`String <string>`
