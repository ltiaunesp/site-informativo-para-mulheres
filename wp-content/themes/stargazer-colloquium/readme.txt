#Stargazer Colloquium

Stargazer Colloquium is a child theme for the Stargazer WordPress theme.

* Stargazer can be found here: https://wordpress.org/themes/stargazer
* Stargazer Demo: http://locallylost.com/stargazer/
* Stargazer Colloquium Demo: http://dev.prometheusfire.me/stargazer-colloquium/forums/
 
This theme does not modify any element of Stargazer, it only adds BBPress support to it while taking advantage of some of Stargazer's color customization features (but only in a very small way.) You can use it as a normal child theme, or integrate it into your existing Stargazer child theme. *Instructions are below the screenshot on how to to that.*

![](http://dev.prometheusfire.me/stargazer-colloquium/wp-content/uploads/sites/5/2014/02/screenshot.png)

**There are two ways to use this theme:** As a stand-alone child theme, or integrated into an existing child theme.

####How to use as a stand-alone child theme:
First, install the Stargazer theme, this is a child theme and is useless with out its parent.

Download the .zip file using the download button to the right. Rename the file to stargazer-colloquium.zip and upload it to your WordPress installation by going to *Appearance -> Themes -> Add New*. After installing the child theme activate it.

####How to integrate Colloquium into your existing Stargazer child theme
If you have already deployed Stargazer on your site and are already using a child theme. To add BBPress support using you can download this theme and extract it on your computer.

First, remove the style.css that is included here (since you already have one of your own) and copy the code from functions.php and add it to your child theme's functions.php (this snippet will allow your child theme to use Stargazer's user-defined color in the BBPress elements).

Upload all the other files into your child theme, again ignoring style.css and functions.php (unless you are not already using a functions.php, then the file here can be included, otherwise follow the direction above).

The files you upload should at least include the following:
* screenshot.png
* bbpress.php
* The bbpress folder with all template files included
* The CSS folder with bbpress.css included

You will not see any changes to the front of your site until you have activated the BBPress plugin (http://wordpress.org/plugins/bbpress/) and started adding forums and content.