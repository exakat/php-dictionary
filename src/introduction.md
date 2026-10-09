# Introduction

PHP dictionary is an exhaustive list of words and notions, from the PHP ecosystem. 

Do you know what is the 'dangling reference' problem? Or the Last Static binding? or the 'garbage collection'? 

The PHP dictionary provides a list of words, concepts, keywords and expressions used commonly in the PHP ecosystem,
with a short definition and extra links to more resources. 

The dictionary's goal is to provide a place for each PHP notions, and help anyone reading an article understand it. 

The dictionary doesn't aim to provide a complete presentation of the definitions : this is why there are external links to blogs, vlogs, documentation and disambiguation. Links to software are also provided without the guarantee to be systematic nor complete. 

## Machine-readable access

Besides these human-readable pages, the dictionary is also published as:

+ [dictionary.json](dictionary.json) — the full structured dataset, one object per entry (description, code sample, related terms, tags, rule, PHP version history, ...).
+ [llms.txt](llms.txt) — a compact index of every entry, for AI agents and LLMs.
+ [llms-full.txt](llms-full.txt) — the full text of every entry, inlined, for AI agents and LLMs.
+ [feed.xml](feed.xml) — an RSS feed of the most recently added or updated entries.

<script type="application/ld+json">{"@context":"https://schema.org","@type":"Dataset","name":"The PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon, with definitions, code samples, and related terms.","url":"https://php-dictionary.readthedocs.io/en/latest/index.html","license":"https://www.php.net/license/3_01.txt","inLanguage":"en","creator":{"@type":"Organization","name":"Exakat","url":"https://www.exakat.io/"},"distribution":[{"@type":"DataDownload","encodingFormat":"application/json","contentUrl":"https://php-dictionary.readthedocs.io/en/latest/dictionary.json"},{"@type":"DataDownload","encodingFormat":"text/plain","contentUrl":"https://php-dictionary.readthedocs.io/en/latest/llms-full.txt"}]}</script>

## Contributions

Contributions are welcomed, by submitting PR to the [repository](https://github.com/exakat/php-dictionary.git) 

+ New or missing words to be added, preferably with their definition
+ Extra links to external resources
+ Documentation complements
+ Checks on the related notions and thesaurus

