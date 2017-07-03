'use strict';

var gulp = require('gulp'),

	// Sass/CSS processes
	bourbon = require('bourbon').includePaths,
	neat = require('bourbon-neat').includePaths,
	sass = require('gulp-sass');


gulp.task('styles', function(){

	return gulp.src('assets/sass/style.scss')
		.pipe( sass({
			includePaths: [].concat( bourbon, neat ),
			errLogToConsole: true,
			outputStyle: 'expanded' // Options: nested, expanded, compact, compressed
		}))
		.pipe(gulp.dest('./'));
});


/********************
 * All Tasks Listeners
 *******************/

gulp.task('watch', function () {
	gulp.watch('assets/sass/**/*.scss', ['styles']);
});