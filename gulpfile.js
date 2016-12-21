//==============================================================================
// Gulp Setup
//==============================================================================

var gulp = require('gulp');
var plugins = require("gulp-load-plugins")({
  pattern: ['gulp-*', 'gulp.*'],
  replaceString: /\bgulp[\-.]/
});

//==============================================================================
// File paths
//==============================================================================
var paths = {
  svg   : 'wp-content/themes/_starter/images/icons',
  theme : 'wp-content/themes/_starter/'
};

//==============================================================================
// Tasks
//==============================================================================
gulp.task('default', function() {
  // place code for your default task here
});

// Styles
gulp.task('styles', function() {
  return gulp.src(paths.theme + 'stylesheets/application.scss')

    // init Sourcemaps
    .pipe(plugins.sourcemaps.init())

    // Globbing
    .pipe(plugins.sassGlob())

    // Compile SCSS
    .pipe(plugins.sass({
        outputStyle : 'expanded',
        sourceComments : 'none',
        includePaths: require('node-bourbon').includePaths,
        includePaths: require('node-neat').includePaths
    }))

    .on("error", plugins.notify.onError(function (error) {
      return error.message;
    }))

    // Auto Prefixing
    .pipe(plugins.autoprefixer('last 5 version'))

    // Min File
    .pipe(plugins.minifyCss())

    // Sourcemaps
    .pipe(plugins.sourcemaps.write('/', {
      includeContent: false,
      sourceRoot: '/'
    }))

    // Save
    .pipe(gulp.dest(paths.theme))

});

// JS Plugins
gulp.task('plugins', function() {
  return gulp.src([
    paths.theme + 'js/vendor/jquery.min.js',
    paths.theme + 'js/vendor/slick.min.js'
  ])
  .pipe(plugins.concat('plugins.js'))
  .on("error", plugins.notify.onError(function (error) {
    return error.message;
  }))
  .pipe(plugins.rename({ suffix: '.min' }))
  .pipe(plugins.uglify())
  .on("error", plugins.notify.onError(function (error) {
    return error.message;
  }))
  .pipe(gulp.dest(paths.theme))
});

// JS Scripts
gulp.task('scripts', function() {
  return gulp.src([paths.theme + 'js/partials/*.js'])
  .pipe(plugins.concat('application.js'))
  .on("error", plugins.notify.onError(function (error) {
    return error.message;
  }))
  .pipe(plugins.rename({ suffix: '.min' }))
  .pipe(plugins.uglify())
  .on("error", plugins.notify.onError(function (error) {
    return error.message;
  }))
  .pipe(gulp.dest(paths.theme))
});

// Images
gulp.task('images', function() {
  return gulp.src(paths.theme + 'images/**/*')
  .pipe(plugins.cache(plugins.imagemin({ optimizationLevel: 7, progressive: true, interlaced: true })))
  .pipe(gulp.dest('images'))
});

// Basic configuration example
config = {
    mode: {
        symbol: {
            prefix: "icon-%s",
            inline: true,
            example: {
              template: './sprite-template.html'
            },
        }
    }
};


// SVG Sprites
gulp.task('sprites', function () {
return gulp.src(paths.theme + 'images/icons/**/*.svg')
  .pipe( plugins.svgSprite(config) )
  .pipe( gulp.dest(paths.theme + 'images') );
});


// Watch
gulp.task('watch', function() {

  // Watch .scss files
  gulp.watch(paths.theme + 'stylesheets/**/*.scss', ['styles']);

  // Watch .js files
  gulp.watch(paths.theme + 'js/partials/**/*.js', ['scripts']);
  gulp.watch(paths.theme + 'js/vendor/**/*.js', ['plugins']);

  // // Watch image files
  // gulp.watch('images/**/*', ['images']);

});

// Build
gulp.task('build', ['styles', 'scripts', 'plugins']);