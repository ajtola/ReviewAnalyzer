ReviewAnalyzer
==============

# Requirements

This app requires some PHP modules that will not be installed running the *composer install* command.

Use the following command to check if this modules are installed:

`php -m | grep curl`

and

`php -m | grep pdo_sqlite`

If they aren't installed, please install them with sudo permissions.


# Installation Instructions

To install this app, you need to run the following command:

`git clone https://github.com/ajtola/ReviewAnalyzer.git`

To run the application, open a new terminal and run:

`php app/console server:run`

This command allow you to access the web appplication in a local web browser. To access from a remote web browser (with visibility), use this command instead:

`php app/console server:run 0.0.0.0`


# Usage

In the main page you can see all your reviews in a paginated table. 
You can **Run** the analyzer by clicking in the green button of each row. You can also delete the review.

Via the upper menu, you can add new reviews or modify your criteria, by adding new *Topics*, *Positive words* or *Negative words*.

## Importing reviews

You can import many reviews at once, using the upper button in the **add review** page.

This button access to a [public google sheet](https://docs.google.com/spreadsheets/d/1GCOhIkzm13Kln6uyUhK7ShMoPn_qUCYLxCKDIogPQt0) where you can add as many reviews as you want to ease this task.
