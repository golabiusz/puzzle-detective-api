Puzzle Detective App - API
==========================

A Symfony 3 project - REST API shipped with a [Docker](https://docs.docker.com/) setup.


Running in Docker container
===========================

- Clone or download the repository

- Run docker containers

If you do not already have Docker Compose on your computer, it’s the right time to [install it](https://docs.docker.com/compose/install/).
This API is shipped with a Docker setup that contains an image with PHP 7.1, an image with Nginx and a MariaDB image to host the database.

Open a terminal, navigate to the directory containing cloned project and run the following command to start services using Docker Compose:
```
sudo docker-compose -f docker-compose.yml -f docker-compose.dev.yml up -d
```

- Open in browser

```
localhost:10080/app_dev.php/api/doc
```

Testing
=======

- Run unit tests on started container:

```
sudo docker exec puzzle_detective_api_dev_app php phing.phar phpunit-light
```

- Run all phpunit tests with code coverage report generation on started container:

```
sudo docker exec puzzle_detective_api_dev_app php phing.phar phpunit
```

- Run Behat tests:

@TODO
