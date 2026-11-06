# The 2,000th word: a personal notebook became a map of PHP

Today the PHP Dictionary reaches its 2,000th definition: **Bearer token**, is the last entry, and, as you can see, it is quite niche subject for a definition and PHP. This is because, over the years, a lot of definitions were added to what was initially a simple knowledge memorisation. So, it is a good moment to look back at how we got here, and at what the dictionary has become.

## It started as a notebook

The dictionary began as a way to clear up things I used every day without always understanding them. It is surprising how much words and concepts are used, both heard and pronounced, yet, they are not defined. This is how language (human, not PHP) live: initially, you learn by converting the meaning to what you already know, with a definition. Later, you build that same definition by experience: hear it, see its side effects, form a definition. 

Even words that sound familiar are not obvious to pin down, because they were acquired without being defined. Think "dangling reference" or "garbage collection": who put garbage in my code? Is there a notion of garbage creation? There is spagetti code, but when does it become garbage? And, yes, OOP is POO in French, but that is not the point. 

Writing down a definition for each term, with a short illustration, may be a code sample, forced me to understand them properly.

Then, a definition is only useful in a context, so soon, definitions were not enough. So I started adding links: to the PHP manual, to the blog posts that explained a notion best, to the people who coined the terms, to other definitions in the dictionary. 2000 words gave 12000+ links, and they bring the technical reference of PHP together, like a carpet in a room.

## It grew by listening to the community

That is where the dictionary changed shape. The PHP community has written an enormous amount of useful material over the last thirty years: articles, blog posts, conference talks, tutorials, videos, tools, release notes, funny things... Hundreds of authors explained concepts in great details, and with lyrism and enthusiasm. Their articles are now linked from the definitions.

The numbers show how wide that reach is:

| What | Count |
|---|---|
| Definitions | **2,000** |
| Distinct URLs | **4,108** |
| Distinct websites cited | **about 1,000** |
| Definitions with a PHP code sample | **1,452** |
| Words written across descriptions | **193,000+** |

Every definition points outward. The official PHP manual is the most-linked source, of course, and a large share of the links go to blogs and articles written by practitioners. Each one is a small credit to someone who took the time to write it down: thank you to all of you. You know who you are.

## It connected the words together

PHP notions are not isolated. A "trait" leans on "class", "class" on "object", "object" on "reference", "type", "property", "inheritance", "composition", "case", and so on. So the dictionary also became a network.

There are **12,381 links between definitions**. The most connected terms are the foundations of the language: `array`, `security`, `interface`, `database`, `type`, `property`, `string`. Reading one definition naturally leads to the next, which is what I wanted from the start. If you remember "surfing the net with hyperlinks" from the 1990's, that's the idea. If you don't, well, you can catchup with something you definitely missed. 

## It untangled words with several meanings

Many PHP terms mean more than one thing, depending on who is talking. Over 59 definitions explicitly list multiple concepts they cover. Generally, it is difficult to come up with new words for each concept: as programmer, we don't always add `v2` as a suffix, so some words are covering several distinct meanings. It happens like in any natural and human language.

Take **stack**. It can be the call stack that tracks nested function calls, the data structure where the last item in is the first one out, or the LAMP stack of Linux, Apache, MySQL and PHP. Or **unpacking**, which is either the `unpack()` function that reads binary data, or the `...` operator that spreads an array into arguments.

Those entries were often an eye opener: not by choosing one meaning, but by putting them side by side so the reader can tell which one a blog post is talking about.

## Where does the PHP dictionary stands

Numbers are also a to-do list:

- **30 definitions** are not linked from any other definition: I need to review them.
- **new blogs** are created everyday, even today, and should be added to this dictionary. 
- **old blogs** decay, fade away, and disappear entirely, in a casino. These need a review.
- Some corners of the PHP ecosystem should be brought forward. Which one? I missed them, so you tell me.

Each of these is a small, concrete contribution, accessible to everyone.

## Beyond the book

The dictionary already exists in several forms:

- a [website](https://php-dictionary.readthedocs.io/en/latest/), with a sitemap and an RSS feed
- a machine readable JSON [`dictionary.json`](https://php-dictionary.readthedocs.io/en/latest/dictionary.json), one structured object per entry. Grab this one in one go, don't scan web sites.
- [`llms.txt`](https://php-dictionary.readthedocs.io/en/latest/llms.txt) and [`llms-full.txt`](https://php-dictionary.readthedocs.io/en/latest/llms-full.txt) for AI tools.
- a terminal navigator, `tui.php`, to read the dictionary from the comfort of the commandline. 

For the future, a book is not always the most convenient way to use a dictionary. I am looking at other formats: flashcards for learning the vocabulary, a Markdown vault for personal note-taking, an API or MCP, an editor plugin that shows a definition on hover, and a printable reference sheet. If one of those would help you, I want to hear about it.

## Help build the next 2,000

1. **Fix a broken link, suggest new articles.** Open a file in [`src/index/`](https://github.com/exakat/php-dictionary/tree/main/src/index), check `JSON`, and fill it in.
2. **Connect an orphan.** Pick one of the 30 definitions nobody links to, and add it to the `related` list of a relevant entry.
3. **Add a resource.** A good article or a manual page is worth more than a dozen generic links. A whole website. 
4. **Propose a missing word.** Terms, acronyms and jargon are the most valuable addition. Send a pull request on the [repository](https://github.com/exakat/php-dictionary); the [contributing guide](https://github.com/exakat/php-dictionary/blob/main/README.md) explains the workflow.

**Let's talk.** You can reach me online on the [PHPCommunity](https://discord.com/invite/RYajXKxuuK) server, or on [Mastodon](https://phpc.social/@dseguy) or [Twitter](). Tell me which definition you want next, which one is wrong, or which format would make you actually use this dictionary.

And now, let's go to 3,000.
