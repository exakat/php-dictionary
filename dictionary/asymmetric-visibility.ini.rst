.. _asymmetric-visibility:
.. _set-visibility:

Asymetric Visibility
--------------------

Asymetric visibility is a feature of PHP class properties. They refer to the the situation where different scopes may read (get) or write (set). 

Traditionally, the visibility options (``private``, ``protected``, ``public``) constraints the access to the property, both in reading and writing. With asymetric visibility, there may be contexts may have different rights of access.

.. code-block:: php
   
   <?php
   
   class x {
   	public private(set) string $p = 'abc';
   	
   	function setP($p) {
   		$this->p = $p;
   	}
   }
   
   $x = new x;
   echo $x->p; // abc
   $x->setP('def'); 
   echo $x->p; // def
   
   // 
   $x->p = 'ghi';
   
   ?>


See also `PHP Asymmetric Visibility RFC: An In-Depth Look <https://developerjoy.co/blog/php-asymmetric-visibility-rfc-an-in-depth-look>`_

Related : :ref:`Visibility <visibility>`, :ref:`Properties <property>`
