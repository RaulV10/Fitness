# Fitness Planner AI App

The Fitness Planner Application is a web-based tool designed to help users create personalized workout plans to achieve their health and fitness goals. It allows users to provide their personal information, goals, limitations, and preferences to generate customized plans.

## Features

- Collects user data through a form, including height, weight, gender, age, exercise preferences, fitness goals, and more.
- Generates up to 5-day workout program tailored to the user's goals and preferences, ensuring each strength training workout targets all major muscle groups.
- Allows users to download their personalized plans in PDF format for easy access and reference.

## Getting Started

1. Clone this repository to your local machine.
   ```
   git clone https://github.com/RaulV10/Fitness.git
   ```

2. Ensure you have PHP 8.1+ installed on your system.

3. Navigate to the project directory.

4. Install composer dependencies:
   ```
   composer install
   ```

5. Create a .env file by copying the example:
   ```
   cp .env.example .env
   ```
   
6. Add your openai api credentials to the .env file:
   ```
   OPENAI_API_KEY=sk-...
   OPENAI_ORGANIZATION=org-...
   ```

7. Run the application:
   ```
   php artisan serve
   ```

## How to Use

1. Open the Fitness Planner Application in your web browser.
2. Fill out the form with your personal information, fitness goals, exercise preferences, and dietary restrictions.
3. Click the "Submit" button to submit the form.

![App interface](https://github.com/RaulV10/Fitness/blob/main/Form.jpeg?raw=true)

4. Receive a personalized workout program based on your input.
5. Download your plans in PDF format for easy access and reference.

![Generated program](https://github.com/RaulV10/Fitness/blob/main/WorkoutPlan.jpeg?raw=true)

## Credits

Fitness Planner AI App was created by [Raul Villarreal](https://www.linkedin.com/in/raulvillarreals/).
