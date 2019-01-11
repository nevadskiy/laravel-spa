alias artisan='docker-compose exec --user "$(id -u):$(id -g)" php-cli php artisan'
alias php-cli='docker-compose exec php-cli'

alias test='docker-compose exec php-cli vendor/bin/phpunit'
alias tf='docker-compose exec php-cli vendor/bin/phpunit --filter'
