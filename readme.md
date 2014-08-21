## Laravel Date Range Sample
Sample is the year of Popular individual died and born

## Installation

Clone the repository
```
git clone git@github.com:jayaregalinada/laravel-date-range.git
```

Run the composer installation command
```
composer install
```

Configure your database in `app/config/database.php`
and then run the migration with seeders
```
php artisan migrate --seed
```

Run the built-in server
```
php artisan serve
```

Go to your browser `http://localhost:8000` and you will see the whole data.

Navigation the died range using
```
http://localhost:8000/died?f={from_what_year}&t={to_what_year}
```
Same with the born range
```
http://localhost:8000/born?f={from_what_year}&t={to_what_year}
```

* * *

###### Created and developed by Jay Are Galinada