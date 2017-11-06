module.exports = function(grunt) {
  grunt.initConfig({
    sass: {
      options: {
        sourceMap: true,
        outputStyle: 'compressed'
      },
      dist: {
        files: {
          'style/style.css': 'sass/style.scss'
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-sass');

  grunt.registerTask('default', ['sass']);
}