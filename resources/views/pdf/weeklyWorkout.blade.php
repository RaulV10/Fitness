<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weekly Workout Plan</title>
    <style>
        /* Add your CSS styles for PDF layout here */
    </style>
</head>
<body>
    <h1>Weekly Workout Plan</h1>

    @foreach ($data['weekWorkout'] as $week)
        <h2>{{ $week['day'] }}</h2>

        @foreach ($week['workout'] as $exercise)
            <p>
                <strong>Exercise Name:</strong> {{ $exercise['exerciseName'] }}<br>
                <strong>Description:</strong> {{ $exercise['description'] }}<br>
                <strong>Sets:</strong> {{ $exercise['sets'] }}<br>
                <strong>Reps:</strong> {{ $exercise['reps'] }}<br>
                <strong>Rest:</strong> {{ $exercise['rest'] }}<br>
            </p>
        @endforeach
    @endforeach
</body>
</html>
