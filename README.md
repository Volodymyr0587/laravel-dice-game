# DiceGame

DiceGame is a simple web application built with Laravel 11 that allows users to play a dice game. The game involves rolling dice, scoring points based on the results, and saving points until reaching a goal of 1000 points. The application features a dynamic and interactive user interface with game rules and visual representations of dice combinations.

### Features

- Dice Rolling: Roll up to five dice and calculate scores based on the rolled numbers.
- Score Tracking: Accumulate points with each roll and keep track of the total points.
- Game Rules: Display game rules with examples and images for each dice combination.
- Responsive Design: User-friendly interface that works well on both desktop and mobile devices.

### Installation

To get started with DiceGame, follow these steps:

Clone the Repository:

```bash
git clone https://github.com/Volodymyr0587/laravel-dice-game
cd laravel-dice-game
```


Install Dependencies:

Ensure you have Composer and Node.js installed. Then run:

```bash
composer install
npm install
```
Set Up Environment:

Copy the .env.example file to .env and configure your environment variables.

```bash
cp .env.example .env
```
Generate a new application key:

```bash
php artisan key:generate
```
Run Migrations:

Set up your database and run the migrations to create the necessary tables.

```bash
php artisan migrate
```
Build Assets:

Compile the application's frontend assets.

```bash
npm run dev
```
Serve the Application:

Start the development server.

```bash
php artisan serve
```
Visit http://localhost:8000 in your browser to see the application in action.

### Usage

- Rolling Dice: Click the "Roll Dice" button to roll the dice and view the results.
- Viewing Scores: After each roll, your score and total points are displayed.
- Game Rules: Navigate to the game rules section to learn how different dice combinations affect the score.



###  Contribution

Contributions are welcome! Please fork the repository and create a pull request with your changes. Make sure to include tests for any new features or bug fixes.

### License

This project is licensed under the MIT License - see the LICENSE file for details.
