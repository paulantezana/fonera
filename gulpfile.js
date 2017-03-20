const   gulp    =  require('gulp'),
        sass    = require('gulp-sass'),
        cssnano = require('gulp-cssnano'),
        babel = require('gulp-babel');


/**
 * sass
 */
gulp.task('sass',()=>{
    return gulp.src('./dev/scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(cssnano({
            autoprefixer:{
                add: true,
            },
            core: true
        }))
        .pipe(gulp.dest('./assets/css'));
});


/**
 * babel
 */
gulp.task('babel',()=>{
   return gulp.src('./dev/babel/**/*.js')
       .pipe(babel({
           presets: ['es2015']
       }))
       .pipe(gulp.dest('./assets/js/'))
});




/**
 * Watch
 */
gulp.task('watchs',()=>{
    gulp.watch('./dev/scss/**/*.scss',['sass']);
    gulp.watch('./dev/babel/**/*.js',['babel']);
});


/**
 * gulp task default
 */
gulp.task('default',()=>{
    gulp.start('watchs');
});