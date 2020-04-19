module.exports = function(grunt) {

	// Project Configuration
	grunt.initConfig({
		pkg: grunt.file.readJSON( 'package.json' ),

		prettify: {
			options: {
				"indent": 1,
				"condense": true,
				"indent_inner_html": true,
				"indent_char": '	'
			},
			all: {
				expand: true,
				cwd: 'output/templates/',
				ext: '.html',
				src: ['*.html'],
				dest: 'output/marketo/'
			}
		}// End Prettify

	});

	// Load Plugins
	grunt.loadNpmTasks('grunt-prettify');

	// Default tasks
	grunt.registerTask('default', ['prettify']);

};