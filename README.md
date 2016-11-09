# _Starter Theme
This is a wordpress starter theme, based on [Underscores](https://github.com/automattic/_s)

## Tools
This theme uses several different Open Source tools, plugins and libraries to aid setting up and development

* [NPM](https://www.npmjs.com/)
* [SASS](http://sass-lang.com/)
* [Node-sass](https://github.com/sass/node-sass)
* [Gulp](http://gulpjs.com/)
* [Bourbon](http://bourbon.io/)
* [Neat](http://neat.bourbon.io/)
* [Bitters](http://bitters.bourbon.io/)
* [Autoprefixer](https://github.com/postcss/autoprefixer)

## Plugins
* [ACF Pro](https://www.advancedcustomfields.com/)
* [Contact Form 7](http://contactform7.com/)
* [Regenerate Thumbnails](https://wordpress.org/plugins/regenerate-thumbnails/)
* [Tiny Compress Images](https://wordpress.org/plugins/tiny-compress-images/)
* [Yoast SEO](https://yoast.com/wordpress/plugins/seo/)

## Development

### Setup
Downlaod the latest copy of wordpress into your directory, then merge in the _Starter repo over the top. run `npm install` to install all the required dependecies. Then, complete these find and replace comaneds to rename the theme:

* `_starter` to lowercase theme name, URL encoded.
* `_Starter` to Titleised  

### Front End
All CSS / JS is compiled using Gulp. Running `gulp watch` will start the watch task, and compile changes as you save. All errors will be printed in the console.

#### CSS
All CSS is written in the SCSS syntax, and compiled to one minified CSS file. This site roughly follows a SMACSS / Atomic Design file structure, influenced by Bitters.

* `base` contains settings and standard HTML elements styling. The `_settings.scss` file has all the variables and mixins used though out the site.
* `modules` contains modules on the site that can be repeated on multiple pages, such as the header and footer.
* `pages` contains page specific styles. This could be based on a page template (e.g: `_team.scss`) or a section of the site (e.g: `_projects.scss`).
* `vendor` contains files required by plugins. These have been edited, so should not be replaced when updating plugins unless absolutely necessary.

All these individual partials are then complied by `application.scss`. This is either as individual imports if the cascade order is important, or using globing for more modular components.

Running `gulp styles` will build the minified version of the file, as will the `gulp watch` command when a partial is saved. The resulting `application.css` file is then enquired by Wordpress.

#### JS

The Javascript in the site as a very similar setup to the CSS. The `partials` folder contains each module of Javascript written for the site. The `vendor` folder contains JS plugins used by the site.

Running `gulp scripts` and `gulp plugins` will build the minified version of the `application.js` and `plugins.js` files, as will the `gulp watch` command when a partial is saved. The resulting files are then enquired by Wordpress.

### SVGs
We are using the [SVG Sprite](https://github.com/jkphl/svg-sprite) plugin to create the icons for the site. The basic usage is pretty simple.

* Save new icon to the `/images/icons` folder.
* In the terminal, `cd` into the root directory and run `gulp sprites`
* A SVG sprite is created at: `/images/symbol/svg/sprite.symbol.svg`. Copy and paste this into the icon file at `/images/inline-icons.php`.
* Profit!

An example HTML page is also created, showing all the icons. A template for this has been added to provide a copy and past-able snippet that can be used in HTML. Simply open `/images/symbol/sprite.symbol.html` in the browser.


## Thanks
Put together with a lot of help from / the blog posts of:
* [Underscores](https://github.com/automattic/_s)
* [Craig Coles](http://craigcoles.co.uk/)
* [Matt Banks](http://mattbanks.me/gulp-wordpress-development/)