module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			dist: {
				files: {
					'themes/nothing-UI/css/styles.min.css' : 'themes/nothing-UI/sass/**/*.scss'
				},
				options: {
					style: 'compressed',
				}
			}
		},
		watch: {
			cssmin: {
				files: '**/*.scss',
				tasks: ['sass']
			}
		}
	});
  // grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.registerTask('default',['watch']);
}
