.. _portability:
.. meta::
	:description:
		Portability: Portability refers to the ability of a PHP codebase to run on different platforms or environments without requiring significant modifications.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Portability
	:twitter:description: Portability: Portability refers to the ability of a PHP codebase to run on different platforms or environments without requiring significant modifications
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Portability
	:og:type: article
	:og:description: Portability refers to the ability of a PHP codebase to run on different platforms or environments without requiring significant modifications
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/portability.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Portability","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Portability refers to the ability of a PHP codebase to run on different platforms or environments without requiring significant modifications","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Portability.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Portability
-----------

Portability refers to the ability of a PHP codebase to run on different platforms or environments without requiring significant modifications. It means that the code can be easily transferred from one system to another, such as different operating systems or web servers, without encountering compatibility issues or breaking functionality.

The notion of portability is essential because PHP applications are often deployed on various platforms, like Windows, Linux, or macOS, and different web servers like Apache HTTP Server or Nginx. 

To ensure portability in PHP code, developers should follow best practices such as avoiding platform-specific functions, libraries, or configurations. Additionally, frameworks and libraries promote portability, such as Laravel or Symfony.

For example, some PHP functions are not available on Windows or Linux; Some extensions are not available on all platforms, such as `scoutapm` or `com`. Such non-portable features should not be used, or made optional in code for which portability is important. For example, the COM extension, or win32service extensions are available only on Windows; the extensions ev and eio are only available on Linux. When accessing files, both the / used by Linux, and \ used by Windows are supported, though it is recommended to use the /. 

