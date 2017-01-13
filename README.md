# WordPress Child Theme
WordPress Child theme that can be used as a basis for modifying any type of WordPress theme. It contains the mandatory functions.php with the needed theme header and the modern way of loading the parent theme CSS and child theme CSS. It also has a style.css where you can add your stylesheet overrides.


## @import is out
The @import stylesheet import rule is no longer used. To quote [Kovshenin](https://konstantin.blog/2014/child-themes-import/):
> "... instead of 200ms, with @import it’ll take the web browser approximately 400ms to load both stylesheets."

And Konstantin had this information from the all knowing Google itself.

Tips followed at [Stack Exhange thread](http://wordpress.stackexchange.com/questions/163301/versioning-import-of-parent-themes-style-css) and [WordPress Codex](https://codex.wordpress.org/Child_Themes) 


## Example Header


Here is the child theme header code you would use for Twenty Fifteen inside functions.php

```
/*
Theme Name: Twenty Fifteen Child
Theme URI: http://example.com/twenty-fifteen-child/
Description: Twenty Fifteen Child Theme
Author: John Doe
Author URI: http://example.com
Template: twentyfifteen
Version: 1.0.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: light, dark, two-columns, right-sidebar, responsive-layout, accessibility-ready
Text Domain: twenty-fifteen-child
*/
```

## Installation

Download the package and (S)FTP it to your server. Make sure you add the files to a folder with the child theme name.
Or better yet use git to grab the files:

```git clone --depth=1 git@github.com:jasperf/wordpress-child-theme.git child-theme && rm -rf child-theme/.git```

Example:

```git clone --depth=1 git@github.com:jasperf/wordpress-child-theme.git coursenip-child && rm -rf coursenip-child/.git```


Git will add the files to the folder you indicated. Do not forget to use the proper path if you are not inside the themes folder already.
