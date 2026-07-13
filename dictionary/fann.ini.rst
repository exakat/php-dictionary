.. _fann:
.. meta::
	:description:
		Fast Artificial Neural Network (FANN): ``FANN``, for Fast Artificial Neural Network, is a PECL extension that wraps the FANN C library, a lightweight library for creating, training, and running multilayer feedforward artificial neural networks.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Fast Artificial Neural Network (FANN)
	:twitter:description: Fast Artificial Neural Network (FANN): ``FANN``, for Fast Artificial Neural Network, is a PECL extension that wraps the FANN C library, a lightweight library for creating, training, and running multilayer feedforward artificial neural networks
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Fast Artificial Neural Network (FANN)
	:og:type: article
	:og:description: ``FANN``, for Fast Artificial Neural Network, is a PECL extension that wraps the FANN C library, a lightweight library for creating, training, and running multilayer feedforward artificial neural networks
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fann.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Fast Artificial Neural Network (FANN)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 09:30:15 +0000","dateModified":"Sat, 11 Jul 2026 09:30:15 +0000","description":"``FANN``, for Fast Artificial Neural Network, is a PECL extension that wraps the FANN C library, a lightweight library for creating, training, and running multilayer feedforward artificial neural networks","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Fast Artificial Neural Network (FANN).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Fast Artificial Neural Network (FANN)
-------------------------------------

``FANN``, for Fast Artificial Neural Network, is a PECL extension that wraps the FANN C library, a lightweight library for creating, training, and running multilayer feedforward artificial neural networks.

The extension exposes functions to build a network with a chosen number of layers and neurons, train it against a data set using algorithms such as backpropagation, and then run inference on new inputs. Networks can be saved to and loaded from disk, so a model can be trained once and reused across requests without retraining.

FANN predates the current generation of PHP machine-learning libraries, and its API is comparatively low-level: it does not provide dataset preprocessing, model selection, or GPU acceleration. It remains useful for small, fast, embeddable networks where pulling in a heavier stack such as TensorFlow via a bridge is unnecessary.

.. code-block:: php
   
   <?php
   
       // Create a network: 2 inputs, one hidden layer of 3 neurons, 1 output.
       $ann = fann_create_standard(3, 2, 3, 1);
   
       fann_set_activation_function_hidden($ann, FANN_SIGMOID_SYMMETRIC);
       fann_set_activation_function_output($ann, FANN_SIGMOID_SYMMETRIC);
   
       // Train on a data file of input/output pairs (FANN training file format).
       fann_train_on_file($ann, 'xor.data', 5000, 500, 0.0001);
   
       $output = fann_run($ann, [1, -1]);
       print_r($output);
   
       fann_destroy($ann);
   
   ?>


`Documentation <https://www.php.net/manual/en/book.fann.php>`__

See also `FANN library <https://leenissen.dk/fann/wp/>`_.

Related : :ref:`Machine Learning <machine-learning>`, :ref:`Algorithm <algorithm>`, :ref:`GNU Multiple Precision (GMP) <gmp>`
