---
type: "PHP Feature"
title: "Compression"
description: "Compression is the representation of data in a format that uses less space that the original raw data."
resource: "https://en.wikipedia.org/wiki/Data_compression"
tags: ["file"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Compression

Compression is the representation of data in a format that uses less space that the original raw data. 

A compression algorithm must provide a way to compress data, and a way to uncompress it, and give access to the original data.

There are lossless compression, which can provide the exact original data, for text, and lossy compression which degrades the original data for images, video.

PHP supports compression via ``zip``, ``rar``, ``zlib``, ``bzip2``, ``brotli``, etc.

## Documentation
- [https://en.wikipedia.org/wiki/Data_compression](https://en.wikipedia.org/wiki/Data_compression)

## See Also
- [Zip](https://www.php.net/manual/en/book.zip.php)
- [Bz2](https://www.php.net/manual/en/book.bzip2.php)

## Related
- [Archive](/features/archive.md)

## Details
- Extension: ext-rar
- Extension: ext-zip
- Extension: ext-bzip2
- Extension: ext-brotli

