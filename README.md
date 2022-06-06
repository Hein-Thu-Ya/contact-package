# Laravel Contact Form Package

This will send email to admin and save contact query in database

<br>

If you want to register it yourself, add the ServiceProvider in ```config/app.php```:

## Step 1
```
'providers' => [
    Heinthuya\Contact\ContactServiceProvider::class,
]
```

<br>

### Step 2
To publish the config, run the vendor publish command:
```
php artisan vendor:publish
```
This will create a new config file named ```config/contact.php```

<br>

## Step 3
```
php artisan migrate
```

<br>
contact form url - localhost:8000/contact 
