<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'zaiko_kanri');

// Project repository
set('repository', 'https://github.com/WatanabeMasahiro/inventory_control.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts

host('sv10790.xserver.jp')
    ->port(10022)
    ->user('xs020810')
    ->stage('test')
    ->set('branch', 'master')
    ->set('deploy_path', '/var/www/html');
    
// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

