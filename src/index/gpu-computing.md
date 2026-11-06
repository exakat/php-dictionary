# GPU Computing
GPU computing, or general-purpose computing on graphics processing units, uses the many parallel cores of a graphics card to run calculations that are not about drawing images. Work is split into thousands of small tasks, such as compute shaders or kernels, executed at the same time on the same data.

GPUs are efficient for matrix operations, image processing, physics simulation, and machine learning. The cost is data transfer between the CPU and the GPU, which has to be worth the parallel speed-up.

Each vendor has its own API: ``CUDA`` for NVIDIA, ``Metal`` for Apple, ``Vulkan`` and ``OpenCL`` as cross-platform options. Usually PHP reaches them through an extension, since the code has to call native libraries.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gpu-computing.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gpu-computing.html","name":"GPU Computing","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 06 Nov 2026 20:52:23 +0000","dateModified":"Fri, 06 Nov 2026 20:52:23 +0000","description":"GPU computing, or general-purpose computing on graphics processing units, uses the many parallel cores of a graphics card to run calculations that are not about drawing images","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gpu-computing.html"]}],"keywords":["hardware","performance"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parallel.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ffi.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/machine-learning.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/llm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/render.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/General-purpose_computing_on_graphics_processing_units"},{"@type":"CreativeWork","name":"Apple Metal","url":"https:\/\/developer.apple.com\/metal\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.40","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"gpu-computing"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/General-purpose_computing_on_graphics_processing_units)**
## See Also

+ [Apple Metal](https://developer.apple.com/metal/)

## Related

+ [Parallel](parallel.html)
+ [Foreign Function Interface (FFI)](ffi.html)
+ [Machine Learning](machine-learning.html)
+ [Large Language Model (LLM)](llm.html)
+ [Render](render.html)

## Related packages

+ [hmennen90/php-metal-gpu](https://packagist.org/packages/hmennen90/php-metal-gpu)
