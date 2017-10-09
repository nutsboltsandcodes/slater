	var gulp 				= require('gulp'), 
		watch 			= require('gulp-watch'), 
		autoPrefix 	= require('autoprefixer'), 
		postcss 		= require('gulp-postcss'), 
		importcss 	= require('postcss-import'), 
		vars 				= require('postcss-simple-vars'),
		mixins 			= require('postcss-mixins'), 
		nested 			= require('postcss-nested'),
		cleanCSS 		= require('gulp-clean-css'), 
		minify 			= require('gulp-minify'), 
		browserSync	= require('browser-sync').create(), 
		webpack			= require('webpack');

gulp.task('default', function() {  
	console.log('Hooray, a gulp task! Try running "gulp watch" for PostCSS workflow, or not, your call.') 
}); 
  
gulp.task('styles', function() { 
	return	gulp.src('./source/css/*.css') 
					.pipe(postcss([autoPrefix, importcss, vars, mixins, nested])) 
					.on('error', function(errorInfo) { 
						console.log(errorInfo.toString()); 
						this.emit('end') 
					}) 
					.pipe(gulp.dest('./assets/css/')) 
}); 

gulp.task('minify-css', ['styles'], function() {
  return gulp.src('./assets/css/main.css')
    .pipe(cleanCSS({debug: true}, function(details) {
      console.log(details.name + ': ' + details.stats.originalSize);
      console.log(details.name + ': ' + details.stats.minifiedSize);
    }))
  .pipe(gulp.dest('./assets/css/mini'));
});

gulp.task('cssInject', ['minify-css'], function() {
	return gulp.src('./assets/css/minified/main.css')
		.pipe(browserSync.stream());
});

gulp.task('scripts', function() {
	return gulp.src('./source/**/*.js')
		.pipe(minify({
			ext: {
				min: '.js'
			},
			noSource: true,
		}))
		.pipe(gulp.dest('./assets/'))
})

gulp.task('scriptsRefresh', ['scripts'], function() {
	browserSync.reload();
})
  
//Gulp Watch Task 
gulp.task('watch', function() { 
  
	browserSync.init({
		notify: false,
		proxy: "localhost/wordpress/", 
		online: false
	});

	watch('./source/css/**/*.css', function() { 
		gulp.start('cssInject'); 
	}); 
  
	
	watch('./source/js/**/*.js', function() {
		gulp.start('scriptsRefresh')
	});

	watch('./**/*.php', function() {
		browserSync.reload();
	});
  
});