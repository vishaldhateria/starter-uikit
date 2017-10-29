var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');

//Gulp plugin
var gulp = require("gulp"),//http://gulpjs.com/
		util = require("gulp-util"),//https://github.com/gulpjs/gulp-util
		sass = require("gulp-sass"),//https://www.npmjs.org/package/gulp-sass
		autoprefixer = require('gulp-autoprefixer'),//https://www.npmjs.org/package/gulp-autoprefixer
		minifycss = require('gulp-minify-css'),//https://www.npmjs.org/package/gulp-minify-css
		rename = require('gulp-rename'),//https://www.npmjs.org/package/gulp-rename
		log = util.log;
 
var sassFiles = "src/sass/**/*.scss";

gulp.task("sass", function(){ 
		log("Generate CSS files " + (new Date()).toString());
    gulp.src(sassFiles)
            .pipe(sass({ style: 'expanded' }))
						.pipe(autoprefixer("last 3 version","safari 5", "ie 8", "ie 9"))
            .pipe(gulp.dest("target/css"))
            .pipe(rename({suffix: '.min'}))
            .pipe(minifycss())
            .pipe(gulp.dest('target/css'));
});

gulp.task("watch", function(){
    log("Watching scss files for modifications");
    gulp.watch(sassFiles, ["sass"]);
});

// compress js	
/* 
gulp.task('default', function() {
  return gulp.src('js/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('dist'));
});
*/

//com
//compress images
gulp.task('default', function () {
    return gulp.src('images/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('dist/images'));
});
gulp.task("default", ["sass"]);


var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

    browserSync.init({
        server: "./app"
    });

    gulp.watch("app/scss/*.scss", ['sass']);
    gulp.watch("app/*.html").on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("app/scss/*.scss")
        .pipe(sass())
        .pipe(gulp.dest("app/css"))
        .pipe(browserSync.stream());

});

const gulp = require('gulp');
const imagemin = require('gulp-imagemin');
 
gulp.task('default', () =>
    gulp.src('src/images/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/images'))
);

gulp.task('default', ['serve']);