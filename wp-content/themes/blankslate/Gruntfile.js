module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        jshint: {
            options: {
                browser: true,
                laxcomma: true,
                globals: {
                    jQuery: true
                }
            },
            all: {
                files: {
                    src: ['js/app/**/*.js']
                }
            }
        },


        concat: {
            options: {
            },
            dist: {
                src: [

                    //load libraries
                    'bower_components/jquery/jquery.min.js',
                    'bower_components/modernizr/modernizr.js',
                    'bower_components/html5shiv/dist/html5shiv.js',
                    'bower_components/mustache/mustache.js',
                    'bower_components/moment/min/moment.min.js',
                    'bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
                    'bower_components/jquery-ui/ui/minified/jquery-ui.min.js',

                    //bootstrap must be loaded in this order
                    'bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/bootstrap.js'

                ],
                dest: 'js/vendor.js'
            }
        },

        compass: {
            dist: {
                options: {
                    config: 'config.rb'
                }
            }
        },

        uglify: {
            dist: {
                options: {
//                mangle: true
                    beautify: true
                },
                files: {
                    'js/app.js': [
                        //load application initialization file
                        'js/init.js',

                        //load all js files for app
                        'js/app/*.js',
                        'js/app/**/*.js'
                    ]
                }
            }
        },

        copy: {
            cssAsScss: {
                files: [
                    {
                        expand: true,
                        cwd: 'bower_components',
                        src: ['**/*.css', '!**/*.min.css'],
                        dest: 'bower_components',
                        filter: 'isFile',
                        ext: ".scss"
                    }
                ]
            },
            fonts: {
                files: [
                    {
                        expand: true,
                        cwd: 'bower_components/bootstrap-sass-official/assets/fonts/bootstrap',
                        src: ['*.*'],
                        dest: 'fonts'
                    }
                ]
            }
        },

        watch: {
            scripts: {
                files: ['Gruntfile.js','js/app/**/*.js','js/app/*.js'],
                tasks: ['jshint','uglify'],
                options: {
                    debounceDelay: 250
                }
            },
            css: {
                files: ['scss/**/*.scss'],
                tasks: ['compass']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-copy');

    grunt.registerTask('default', ['copy','jshint','uglify','concat','compass','watch']);

};