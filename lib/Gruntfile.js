module.exports = function(grunt) {

 grunt.initConfig({
  sass: {
   dist: {
     files: {
       '../styles/main.css': '../scss/main.scss'
     }
   }
  },
  watch: {
   sass: {
       files: ['../scss/**/*.scss'],
       tasks: ['sass']
   }
  }
});


 grunt.loadNpmTasks('grunt-contrib-sass');
 grunt.loadNpmTasks('grunt-contrib-watch');

 require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);
 grunt.registerTask('default', ['sass', 'watch']);

};


