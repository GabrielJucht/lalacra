module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    
    sass: {
        dist: {
            options: {
                style: 'compressed',
                sourcemap: 'none',
            },
            files: {
                'style2.min.css': 'style2.scss',
            }
        }
    },

    cssmin: {
      compress: {
        files: {
          'responsive.min.css': ['responsive.css']
        }
      }
    },

    concat_css: {
        options: {},
        all: {
            src: ["style2.min.css", "responsive.min.css"],
            dest: "style2.css"
        },
    },

    uglify: {
        my_target: {
          files: {
            'js/functions.min.js': ['js/functions.js']
          }
        }
    },

    watch: {
        scss: {
            files: ['**/*.scss'],
            tasks: ['sass']
        },
        css: {
             files: ['**/*.css'],
             tasks: ['concat_css','cssmin']    
        },
        scripts: {
            files: 'js/functions.js',
            tasks: ['uglify']
        }

    }
    
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-concat-css');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default', ['watch']);

  

};