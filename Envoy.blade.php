@servers(['web-1' => 'root@47.107.41.71', 'web-2' => 'root@172.18.223.85'])

@task('deploy', ['on' => ['web-1', 'web-2']])
    cd /home/wwwroot/deploylaravel
    git pull origin master
    composer install --no-dev
    php artisan migrate --force
@endtask