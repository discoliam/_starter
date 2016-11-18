# Starter Theme
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

## Front End Development

### Gulp Setup
running `npm install` from the root of the repo will install the nesacery node modules to compile the CSS. You may also need to install [Gulp](http://gulpjs.com/) globaly using `npm install --global gulp-cli`. See the [Gulp](http://gulpjs.com/) website for more info setting this up.

All CSS is compiled using Gulp. Runing `gulp watch` will start the watch task, and compile changes as you save. All errors will be printed in the console.

### CSS
All CSS is written in the SCSS syntax, and compiled to one minified CSS file. This site roughly follows a SMACSS / Atomic Design file structure, influenced by Bitters.

* `base` contains settings and standerd HTML elements styling. The `_settings.scss` file has all the variables and mixins used thoughout the site.
* `modules` contatins modules on the site that can be repeated on multiple pages, such as the header and footer.
* `pages` contains page specfic styles. This could be based on a page template (e.g: `_team.scss`) or a section of the site (e.g: `_projects.scss`).
* `vendor` contains files required by plugins. These have been edited, so should not be replaced when updating plugins unless absolutely nessecery.

All these individual partilas are then complied by `application.scss`. This is either as individual imports if the cascade order is important, or using globing for more modular components.

Running `gulp styles` will build the minifiled version of the file, as will the `gulp watch` command when a partial is saved. The resulting `application.css` file is then enquired by wordpress.

### JS
The javascript in the site as a very simialr setup to the CSS. The `partials` folder contains each module of javascript written for the site. The `vendor` folder contains JS plugins used by the site.

Running `gulp scripts` and `gulp plugins` will build the minifiled version of the `application.js` and `plugins.js` files, as will the `gulp watch` command when a partial is saved. The resulting files are then enquired by wordpress.

### SVGs
We are using the [SVG Sprite](https://github.com/jkphl/svg-sprite) plugin to create the icons for the site. The basic usage is pretty simple.

* Save new icon to the `/images/icons` folder.
* In the terminal, `cd` into the root directory and run `gulp sprites`
* A SVG sprite is created at: `/images/symbol/svg/sprite.symbol.svg`. Copy and paste this into the icon file at `/images/inline-icons.php`.
* Profit!

An example HTML page is also created, showing all the icons. A tempalte for this has been added to provide a copy and pastable snippit that can be used in HTML. Simpley open `/images/symbol/sprite.symbol.html` in the browser.

## 3rd Party

### Wordpress Plugins
* [ACF Pro](https://www.advancedcustomfields.com/pro/)
* [Contact Form 7](http://contactform7.com/)
* [WP-PageNavi](https://wordpress.org/plugins/wp-pagenavi/)
* [Yoast SEO](https://wordpress.org/plugins/wordpress-seo/)

### jQuery Plugins
* [Fancybox](http://fancyapps.com/fancybox/)
* [Slick](http://kenwheeler.github.io/slick/)