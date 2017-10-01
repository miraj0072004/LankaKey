var gulp=require ('gulp'),
    gutil=require('gulp-util'),
    concat=require('gulp-concat'),
    browserify=require('gulp-browserify'),
    connect = require('gulp-connect-php'),
    gulpif=require('gulp-if'),
    uglify=require('gulp-uglify'),
    minifyHTML=require('gulp-minify-html'),
    browserSync = require('browser-sync').create();
    
    

var jsSources,outputDir,htmlSources,phpSources,includeSources,cssSources,env;
var reload  = browserSync.reload;

env=process.env.NODE_ENV || 'development';

if(env=='development')
   {
    outputDir='builds/development/';
   }
   else
   {
    outputDir='builds/production/';
   }


jsSources='components/scripts/*.js';
//outputDir = 'builds/development/';
phpSources= outputDir+'*.php';
htmlSources= 'builds/development/views/*.html';
includeSources= outputDir+'includes/*.php';
cssSources='components/css/*.css'

gulp.task('log',function(){    
    gutil.log("Workflows are awesome");
});

//js task
gulp.task('js',function(){
    gulp.src(jsSources)
    .pipe(concat('script.js'))
    .pipe(browserify())
    .pipe(gulpif(env==='production',uglify()))
    .pipe(gulp.dest(outputDir+'js'))        
});


//css task
gulp.task('css',function(){
    gulp.src(cssSources)
    .pipe(concat('styles.css'))
    .pipe(gulp.dest(outputDir+'css'))
});


//php task
gulp.task('php',function(){
    gulp.src(phpSources);
});

//html task for views
gulp.task('html',function(){
    gulp.src(htmlSources)
    .pipe(gulpif(env==='production',minifyHTML()))
    .pipe(gulpif(env==='production',gulp.dest(outputDir+'views/')))
});

//task for included files
gulp.task('includes',function(){
    gulp.src(includeSources);
});

//watch task
gulp.task('watch',function(){
    gulp.watch(jsSources,['js-watch']);
    gulp.watch(phpSources,['php-watch']);
    gulp.watch(htmlSources,['html-watch']);
    gulp.watch(includeSources,['include-watch']);
    gulp.watch(cssSources,['css-watch']);
});

// create a task that ensures the `js` task is complete before
// reloading browsers
gulp.task('js-watch', ['js'], function (done) {
    browserSync.reload();
    done();
});
    
// create a task that ensures the `css` task is complete before
// reloading browsers
gulp.task('css-watch', ['css'], function (done) {
    browserSync.reload();
    done();
});    

// create a task that ensures the `php` task is complete before
// reloading browsers
gulp.task('php-watch', ['php'], function (done) {
    browserSync.reload();
    done();
});

// create a task that ensures the `html` task is complete before
// reloading browsers
gulp.task('html-watch', ['html'], function (done) {
    browserSync.reload();
    done();
});

// create a task that ensures the `include` task is complete before
// reloading browsers
gulp.task('include-watch', ['includes'], function (done) {
    browserSync.reload();
    done();
});


gulp.task('browserSync',['connect'], function() {
    browserSync.init({
        proxy:'127.0.0.1:8010',
        port:8080,
        open: true,
        notify :false
    });
});

gulp.task('connect', function() {
  connect.server({base : 'builds/development',                  
                  port : 8010,
                  keepalive: true
                 });
});



gulp.task('default',['js','css','html','watch','browserSync']);    


