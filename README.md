# PyroCMS Sample Module

* Version: 2.0 -- For PyroCMS v2.0
* Version: 1.0 -- For PyroCMS v1.3.x

## Legal

This module was written by Jerel Unruh, one of the PyroCMS core developers. You may praise, whine, or hire via [his website](http://unruhdesigns.com/)
or you may use [twitter](http://twitter.com/jerelunruh) if you prefer.

It is unlicensed, meaning that you can do what you want with it. [visit unlicense.org](http://unlicense.org)
Please spread the news about PyroCMS and point new developers here if you like.
You may also be interested in [PyroCMS Workless](http://github.com/jerel/pyrocms-workless) a theme based on iKreativ's Workless.

## Description

I put this module together to give new users something to start with when building their own modules. It makes use of some best practices (like using MY_Model to
simplify database interaction) and hopefully shows a couple of shortcuts (like using the pagination helper instead of the default CI pagination). It includes an
event file and it's own plugin.


## Usage

To use this module simply clone it using Git or download the zip. If you are running PyroCMS v1.3.2 you will want to download v1.0 of this module. Likewise if
you have v2.0 of PyroCMS you need to download v2.0 of this module. Once you have the folder you will need to rename it to "sample". This is very important as
PyroCMS uses the folder name to determine the class to call when installing or when loading a controller. This may mean that you will need to unzip the
downloaded version and then rezip it before uploading to your PyroCMS install.