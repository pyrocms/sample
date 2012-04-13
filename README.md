# PyroCMS Sample Module

* Branch 2.1/master -- For PyroCMS v2.1.x
* Branch 2.0/master -- For PyroCMS v2.0.x
* Branch 1.3/master -- For PyroCMS v1.3.x

## Legal

This module was originally written by [Jerel Unruh](http://twitter.com/jerelunruh), one of the PyroCMS core developers but is now part of PyroCMS Documentation.
Here is his [blog post about this module](http://unruhdesigns.com/blog/2011/01/getting-started-with-custom-module-development-for-pyrocms).
If you find issues please open a ticket in the issue tracker here.

It is unlicensed, meaning that you can use it as a base for your own module without keeping the copyright intact. [visit unlicense.org](http://unlicense.org)
Please spread the news about PyroCMS and point new developers here if you like.
You may also be interested in [PyroCMS Workless](http://github.com/jerel/pyrocms-workless) a theme based on iKreativ's Workless.

## Description

This module was put together to give new developers something to start with when building their own modules. It makes use of some best practices (like using MY_Model to
simplify database interaction) and hopefully shows a couple of shortcuts (like using the pagination helper instead of the default CI pagination). It includes an
event file and its own plugin.


## Usage

To use this module simply clone it using Git or download the zip. Make sure the branch you download from matches the version of PyroCMS you are using. For example, PyroCMS 1.3.2 users will use 1.3/master branch, and PyroCMS 2.0 users will use 2.0/master branch, and so on. Once you have the folder you will need to rename it to "sample". This is very important as
PyroCMS uses the folder name to determine the class to call when installing or when loading a controller. This may mean that you will need to unzip the
downloaded version and then rezip it before uploading to your PyroCMS install.