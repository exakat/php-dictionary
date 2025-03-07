# Configuration file for the Sphinx documentation builder.
#
# This file only contains a selection of the most common options. For a full
# list see the documentation:
# https://www.sphinx-doc.org/en/master/usage/configuration.html

# -- Path setup --------------------------------------------------------------

# If extensions (or modules to document with autodoc) are in another directory,
# add these directories to sys.path here. If the directory is relative to the
# documentation root, use os.path.abspath to make it absolute, like shown here.
#
# import os
# import sys
# sys.path.insert(0, os.path.abspath('.'))


# -- Project information -----------------------------------------------------

project = 'PHP Dictionary'
copyright = '2022-2025, Damien Seguy - <a href="https://www.exakat.io/">Exakat</a>'
author = 'Damien Seguy'
html_favicon = '_static/logo.png'

# The full version, including alpha/beta/rc tags
release = '1.0.0'


# -- General configuration ---------------------------------------------------

# Add any Sphinx extension module names here, as strings. They can be
# extensions coming with Sphinx (named 'sphinx.ext.*') or your custom
# ones.
extensions = [
]

# Add any paths that contain templates here, relative to this directory.
templates_path = ['_templates']

# List of patterns, relative to source directory, that match files and
# directories to ignore when looking for source files.
# This pattern also affects html_static_path and html_extra_path.
exclude_patterns = ['_build', 'build', 'Thumbs.db', '.DS_Store']


# -- Options for HTML output -------------------------------------------------

# The theme to use for HTML and HTML Help pages.  See the documentation for
# a list of builtin themes.
#
html_theme = 'alabaster'

# Add any paths that contain custom static files (such as style sheets) here,
# relative to this directory. They are copied after the builtin static files,
# so a file named "default.css" will overwrite the builtin "default.css".
html_static_path = ['_static']

html_extra_path = ["googlee919cb0917e4fefc.html",
					"sitemap.xml",
					"BingSiteAuth.xml",
					"robots.txt"]
					
html_theme_options = {
    'logo': 'logo.png',
    'analytics_id': 'G-29LCZ34CDW',
    'github_button': True,
    'github_repo':'php-dictionary',
    'github_user':'exakat',
    'description': 'The definitive reference with all things PHP, and their definitions.',
}


html_js_files = [
    'js/custom.js',
    'https://www.googletagmanager.com/gtag/js?id=G-29LCZ34CDW'
]