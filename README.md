# Laravel MongoDB Quick Start Project

## Getting Started

Follow the instructions to set up your Laravel MongoDB project with a MongoDB
Atlas deployment.

To learn more about this project, see the [Quick Start](https://www.mongodb.com/docs/drivers/php/laravel-mongodb/current/quick-start/)
in the MongoDB driver documentation.

### Clone the Repository

```
git clone https://github.com/mongodb-university/laravel-quickstart.git
```

Alternatively, you can download the project as a zip archive. On the
GitHub page, click the **Code** button and select **Download ZIP** to start
the download.

### Prerequisites

You need the following software installed in your development environment:

- [PHP](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/doc/00-intro.md)
- [MongoDB PHP Extension and Library](https://www.mongodb.com/docs/php-library/current/tutorial/install-php-library/)
- [Laravel](https://laravel.com/docs/10.x/installation#creating-a-laravel-project)

To see data in the example view, you need to have a MongoDB deployment
with the "Mflix" Atlas sample datasets loaded. To learn how to load this
dataset, see [Load Sample Data](https://www.mongodb.com/docs/atlas/sample-data/?).

If you need to run a local MongoDB deployment, you can download
[MongoDB Community Server](https://www.mongodb.com/try/download/community) or
[MongoDB Enterprise Server](https://www.mongodb.com/try/download/enterprise).
To learn how to load sample data in a local deployment, see
[Migrate Data with Self-Managed Tools](https://www.mongodb.com/docs/atlas/migration-self-managed/).


### Navigate to the App Directory Root

Run the following command to navigate to the application directory root directory
in the GitHub repository:

```
cd laravel-quickstart/my-app
```

### Install the Dependencies

Run the following ``composer`` command to install the dependencies:

```
composer install
```

### Generate an App Key

Run the following command to generate a Laravel application key:

```
php artisan key:generate
```

### Make a Copy of the Example Environment File

Run the following command to use the example environment file
in your sample app:

```
cp .env.example .env
```

### Configure your MongoDB Credentials

In your ``.env`` file, set or update the following variables, replacing the
``<connection string>`` placeholder with your MongoDB connection string:

```
DB_CONNECTION=mongodb
DB_URI=<connection string>
```

If you need to create a MongoDB Atlas deployment, see the
[Create a MongoDB Deployment](https://www.mongodb.com/docs/drivers/php/laravel-mongodb/current/quick-start/create-a-deployment)
step of the Quick Start.

If you already have a MongoDB Atlas deployment, see the
[Create a Connection String](https://www.mongodb.com/docs/drivers/php/laravel-mongodb/current/quick-start/create-a-connection-string)
step of the Quick Start.

### Start the PHP Built-in Webserver

To start the webserver, run the following command from the application root
directory:

```
php artisan serve
```

### Open the Web Application in the Browser

Open http://127.0.0.1:8000/browse_movies in your web browser.

You should see a list of movies and details about each of them.

### Add Data to the Sample Collection

Run the following command from the application root directory. This command
posts  data from the ``movie.json`` file to the API endpoint.

```
curl -H "Content-Type: application/json" --data @movie.json http://localhost:8000/api/movies
```

You can view this data by refreshing the http://127.0.0.1:8000/browse_movie page.

## Troubleshooting

If you have trouble getting connected to your MongoDB Atlas deployment, check
the following settings:

- The placeholder for the connection string contains credentials for a user that has appropriate access to the MongoDB database.

- Make sure your IP address is in the MongoDB IP Access List. To learn more about configuring the access list, see [Configure IP Access List Entries](https://www.mongodb.com/docs/atlas/security/ip-access-list/) in the MongoDB Atlas documentation.

