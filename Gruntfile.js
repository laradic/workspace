/* jshint camelcase: false */

'use strict';

var radic = require('radic'),
    _     = require('lodash'),
    path  = require('path'),
    lib   = require('./lib/theme/lib');



module.exports = function( grunt ){

    var includeBuilds = false;
    var customTaskList = true;
    var config = grunt.file.readYAML('config.yml');

    function interfaceGenerator( packagePath, classPath, interfacePath, filePath ){
        return 'php vendor/bin/Distiller "\\' + packagePath + '\\' + classPath + '" "' + packagePath + '\\' + interfacePath + '" --bootstrap vendor/autoload.php --excludeInheritedMethods --excludeMagicMethods --saveAs ' + filePath
    }


    var cfg = {
        config        : {
            theme: 'lib/theme',
            src  : 'lib/theme/theme',
            dest : 'extensions/laradic/packadic/resources/theme'
        },
        target        : config.targets.site,
        clean         : {
            assets: {src: '<%= config.dest %>/assets'}
        },
        copy          : {
            activate_my_config_rb   : {
                files: [
                    {src: '<%= config.theme %>/config.rb', dest: '<%= config.theme %>/config.rb.bak'},
                    {src: 'config.rb', dest: '<%= config.theme %>/config.rb'}
                ]
            },
            activate_theme_config_rb: {src: '<%= config.theme %>/config.rb.bak', dest: '<%= config.theme %>/config.rb'},
            assets                  : {files: [ {expand: true, cwd: '<%= config.src %>/assets', src: '**', dest: '<%= config.dest %>/assets'} ]},
            site_data               : {src: '<%= config.src %>/site-data.html', dest: '<%= config.dest %>/views/partials/site-data.blade.php'}
            //  docs_assets: {src: '<%= config.src %>/site-data.html', dest: '<%= config.dest %>/views/partials/site-data.blade.php'}
            // activate: backup_theme_config_rb, activate_my_config_rb
        },
        subgrunt      : {
            options: {
                npmInstall: false
            },
            assets : {
                projects: {
                    'lib/theme': [ 'assets', '--config=' + process.cwd() ]
                }
            },
            views  : {
                projects: {
                    'lib/theme': [ 'views', '--config=' + process.cwd() ]
                }
            },
            build  : {
                projects: {
                    'lib/theme': [ 'build', '--config=' + process.cwd() ]
                }
            }
        },
        shell         : {
            submodule_update     : {
                command: [
                    'git submodule update --init --recursive --remote --force'
                ].join('&&')
            },
            contract_docs_project: {
                command: interfaceGenerator("Radic\\Docs", "Projects\\AbstractProject", "Contracts\\Project", "radic/docs/src/Contracts/Project.php")
            },
            contract_docs_factory: {
                command: interfaceGenerator("Radic\\Docs", "Factory", "Contracts\\Factory", "radic/docs/src/Contracts/Factory.php")
            },
            themes_publish       : {
                command: 'php artisan themes:publish'
            }
        },
        availabletasks: {
            tasks: {
                options: {
                    filter      : 'include',
                    tasks       : [ 'assets', 'build', 'views' ],
                    descriptions: {
                        'assets': 'Removes the dest dir',
                        'views' : 'Generates all javascript based templates',
                        'build' : 'Generates all script assets'
                    }
                }
            }
        },
        jade: {
            templates: {
                options: {
                    client   : true,
                    pretty   : false,
                    amd      : true,
                    namespace: false
                },
                files  : [
                    {expand: true, cwd: 'workbench/laradic-admin/attributes/resources/theme/assets/templates', src: ['**/*.jade'], ext: '.js', dest: 'workbench/laradic-admin/attributes/resources/theme/assets/templates' }
                ]
            }
        },
        watch         : {
            options          : {livereload: false},
            jade_templates: {
                files: ['*/*/*/resources/theme/assets/templates/**/*.jade'],
                tasks: ['jade:templates']
            }
           // themes_publishers: {
           //     files: [ 'Laradic/*/resources/theme/**', 'extensions/*/*/resources/theme/**', 'extensions/*/*/resources/field-types/**' ]
           // }
        }

    };


    grunt.event.on('watch', function( action, filepath, target ){
        if( target !== 'themes_publishers' ){
            return;
        }
        var segments = filepath.split('/');
        var task = 'shell:themes_publish';
        var themesPublishNamespace = '';
        if( segments[ 0 ] == 'extensions' && segments[ 4 ] == 'theme' && segments[ 5 ] == 'views' && segments[ 6 ] == 'navigation' ){
            themesPublishNamespace = segments[ 1 ] + '/' + segments[ 2 ];
        }
        if( themesPublishNamespace == 'laradic/packadic' ){
            return;
            //themesPublishNamespace = 'theme';
        }
        if( segments[ 1 ] == 'laradic' ){
            if( segments[ 2 ] == 'admin' ){
                if( segments[ 4 ] == 'field-types' ){
                    themesPublishNamespace = 'field-types';
                }
                else if( segments[ 4 ] == 'theme' ){
                    themesPublishNamespace = 'laradic/admin';
                }
            }
            else if( segments[ 2 ] == 'packadic' ){
                return;
                //themesPublishNamespace = 'laradic/packadic';
                //if( segments[ 6 ] == 'assets' ){
                //    return;
               // }
            }
        }
        process.stdout.write(require('util').inspect(segments, {colors: true, hidden: true, depth: 5}));
        process.stdout.write(radic.sh.execSync('php artisan themes:publish ' + themesPublishNamespace).stdout)

    });
    require('load-grunt-tasks')(grunt);
    require('time-grunt')(grunt);

    grunt.initConfig(cfg);

    grunt.registerTask('assets', [ 'copy:activate_my_config_rb', 'subgrunt:assets', 'clean:assets', 'copy:assets', 'copy:activate_theme_config_rb', 'notify_hooks', 'shell:themes_publish' ]);
    grunt.registerTask('views', [ 'copy:activate_my_config_rb', 'subgrunt:views', 'copy:site_data', 'copy:activate_theme_config_rb', 'notify_hooks' ]);
    grunt.registerTask('build', [ 'copy:activate_my_config_rb', 'subgrunt:build', 'clean:assets', 'copy:assets', 'copy:site_data', 'copy:activate_theme_config_rb', 'notify_hooks' ]);
    grunt.registerTask('tasks', function(){
        grunt.task.run([ 'availabletasks' ]);
    });
    // disable for dev, we symlink it
    //grunt.registerTask('update', [ 'shell:submodule_update', 'assets', 'notify_hooks' ]);


};

