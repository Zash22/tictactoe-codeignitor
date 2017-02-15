<?php
namespace Deployer;
require 'recipe/common.php';

// Configuration
set('repository', 'git@github.com:Zash22/tictactoe-codeignitor.git');







set('shared_files', ['application/config/config.php','application/config/database.php' ]);
set('shared_dirs', ['application/cache', 'application/logs', 'vendor']);
set('writable_dirs', ['application/cache', 'application/logs', 'vendor']); 
set ('writable_mode', 'chmod');
set ('writable_chmod_recursive', 'true');
set('writable_use_sudo', 'true');
set('ssh_type','ext-ssh2');


set('keep_releases', 3);

// Servers

server('', '')
    ->user('')
    ->password('')
    ->set('deploy_path', '')
    ->set('branch', 'master');
    
// Tasks

//desc('Restart PHP-FPM service');
//task('php-fpm:restart', function () {
    // The user must have rights for restart service
    // /etc/sudoers: username ALL=NOPASSWD:/bin/systemctl restart php-fpm.service
    //run('sudo systemctl restart php-fpm.service');
//});
//after('deploy:symlink', 'php-fpm:restart');
    
desc('Deploy your project');
task('deploy', [
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    'deploy:vendors',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success'
]);
after('deploy', 'success');

