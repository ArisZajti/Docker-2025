#!/bin/sh
# Entrypoint script for Laravel Docker container

# Only seed if the database is empty (no users table rows)
if ! php artisan tinker --execute="echo App\\Models\\User::count();" | grep -q '[1-9]'; then
    php artisan migrate:fresh --seed
else
    php artisan migrate
fi

# Start Apache in the foreground (or your web server)
apache2-foreground
