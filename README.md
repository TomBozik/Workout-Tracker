## Workout Tracker

Simple workout tracker

![Project](/docs/gif.gif)

## Installation

Clone the repository
`git clone git@github.com:TomBozik/workout-tracker.git`

Switch to the repo folder
`cd workout-tracker`

Install all the dependencies using composer
`composer install`

Copy the example env file and make the required configuration changes in the .env file
`cp .env.example .env`

Generate a new application key
`php artisan key:generate`

Run the database migrations (Set the database connection in .env before migrating)
`php artisan migrate`

Start the local development server
`php artisan serve`

You can now access the server at http://localhost:8000

## DB seeding

Populate the DB with seed data with relationships which includes user, categories, exercises. (email: test@test.com, password: password)
`php artisan db:seed`
