module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
    //  Watch the SASS files and run compass when they change
        watch: {
            sass: {
                files: ['assets/sass/**/*.{scss,sass}'],
                tasks: ['compass:dist']
            },
            livereload: {
                files: ['*.html', '*.php', 'assets/js/**/*.{js,json}', 'assets/css/*.css','assets/img/**/*.{png,jpg,jpeg,gif,webp,svg}'],
                options: {
                    livereload: true
                }
            },
            scripts: {
                files: ['js/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false,
                },
            }
        },
    //  Use compass to compile our SASS files
        compass: {
            dist: {
                options: {
                    config: 'config.rb'
                }
            }
        },

    //  Inject Bower components into the HTML
        'bower-install': {
            css: {
                html: 'index.html',
                cssPattern: '<link href="{{filePath}}" rel="stylesheet">'
            },
            js: {
                html: 'index.html',
                jsPattern: '<script src="{{filePath}}"></script>'
            }   
        },
    //  Concat js files
        concat: {   
            dist: {
                src: [
                    // 'bower_components/jquery/jquery.min.js',
                    'assets/js/libs/*.js', // All JS in the libs folder
                    'assets/js/main.js'  // This specific file
                ],
                dest: 'assets/js/production.js',
            }
        },
    //  And minify them
        uglify: {
            build: {
                src: 'assets/js/production.js',
                dest: 'wp-content/themes/infobahn/build/js/production.min.js'
            }
        },
    //  Compress images
        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'assets/img/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'wp-content/themes/infobahn/build/img/'
                }]
            }
        },
        grunticon: {
            myIcons: {
                    files: [{
                        expand: true,
                        cwd: 'assets/svg',
                        src: ['*.svg', '*.png'],
                        dest: "wp-content/themes/infobahn/build/svg"
                    }],
                options: {
              }
            }
        }
    });
    grunt.registerTask('default', ['compass:dist', 'concat', 'uglify', 'imagemin', 'watch']);
    require('load-grunt-tasks')(grunt);
};