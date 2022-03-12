# Podcast REST API

## Intructions to run the project

git clone https://github.com/karamsetty09/pods.git

cd pods

Run docker app.

from terminal of project folder: pods

.\vendor\bin\sail up

.\vendor\bin\sail down

If mysql port is occupied:
sudo kill `sudo lsof -t -i:3306`

## Migrations for table

.\vendor\bin\sail artisan migrate

## Route end points

Post request: /add - takes input and returns success responses

Post request: /{id} - converts the status from review to published

Get request: /podcasts/published - Returns all published podcasts

Get request: /podcast/{id} - Returns the input route - id

Post request: /podcast/{id} - updates the input payload to request.

Post request: /podcast/{id} - Soft Deletes the id given.
