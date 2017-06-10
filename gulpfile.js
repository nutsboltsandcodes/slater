var gulp 				= require('gulp'),
		watch 			= require('gulp-watch'), 
		autoPrefix 	= require('autoprefixer'), 
		postcss 		= require('gulp-postcss'), 
		importcss 	= require('postcss-import'), 
		vars 				= require('postcss-simple-vars'),
		mixins 			= require('postcss-mixins'), 
		nested 			= require('postcss-nested'),
		cleanCSS 		= require('gulp-clean-css'), 
		minify 			= require('gulp-minify');


gulp.task('default', function() {
	console.log('Hooray, a gulp task! Try running "gulp watch" for PostCSS workflow, or not, your call.')
});

gulp.task('styles', function() {
	return	gulp.src('./source/css/main.css')
					.pipe(postcss([autoPrefix, importcss, vars, mixins, nested]))
					.on('error', function(errorInfo) {
						console.log(errorInfo.toString());
						this.emit('end')
					})
					.pipe(gulp.dest('./dist/css/'))
});

gulp.task('minify-css', function() {
    return gulp.src('./dist/css/main.css')
        	.pipe(cleanCSS({compatibility: 'ie8'}, {debug: true}, function(details) {
            console.log(details.name + ': ' + details.stats.originalSize);
            console.log(details.name + ': ' + details.stats.minifiedSize);
        	}))
        	.on('error', function(errorInfo) {
						console.log(errorInfo.toString());
						this.emit('end');
					})
        	.pipe(gulp.dest('./dist/css/minified'));
});
 
gulp.task('minify-js', function() {
  gulp.src('source/js/*.js')
    .pipe(minify({
        ext:{
            src:'-debug.js',
            min:'.js'
        }
    }))
    .pipe(gulp.dest('dist/js/'))
});

//Gulp Watch Task
gulp.task('watch', function() {

	watch('./source/css/**/*.css', function() {
		gulp.start('styles');
	});

	watch('./dist/css/**/*.css', function() {
		gulp.start('minify-css')
	})

	watch('./source/js/**/*.js', function() {
		gulp.start('minify-js');
	})	

});