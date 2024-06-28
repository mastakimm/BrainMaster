# BrainMaster: Elevate Your Knowledge with Engaging Quizzes
<br>

## Explore Various Categories

Choose from a wide range of quiz categories, including science, history, pop culture, and more. Pick your favorite, start the quiz, and test your knowledge.

## Get Instant Results

After completing a quiz, you'll receive detailed results that highlight your strengths and areas for improvement. Track your progress and keep learning.

## Review Your History

Access your quiz history to see past performances, retake quizzes, and aim for better scores.

## Admin Panel for Data Analysis

For educators and content creators, BrainMaster offers an admin panel to analyze quiz performance and user engagement, helping you improve your quizzes.
<br>
<br>

# If you want to try it on your own :

## Initialize the Project :

### 1. Install PHP Dependencies:
composer install

### 2. Install Node.js Dependencies:
This install Node dependencies

### 3. Check Node Version:
Ensure you are using Node.js version > 14:
node -v

If necessary, install the correct version:
nvm install 20.11.1


### 4. Verify controller.json Configuration:
Ensure your controller.json looks like this:

```
{
    "controllers": {
        "@symfony/ux-chartjs": {
            "chart": {
                "enabled": true,
                "fetch": "eager"
            }
        }
    },
    "entrypoints": []
}
```

## Start the Servers:

### 1. Start the Node.js Server:
npm run watch

### 2. Start the Symfony (PHP) Server:
symfony server:start

You're all set!
