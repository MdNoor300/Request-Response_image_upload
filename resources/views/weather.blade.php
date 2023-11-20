<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 10 Weather</title>
    <style>
        /* Custom styles for the entire page */
        body {
            font-family: 'Helvetica Neue', sans-serif;
            background-color: #f3f5f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Styling for the content box */
        .content-box {
            background-color: #ADD8E6;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 1);
            text-align: center;
            max-width: 400px;
            margin: 0 auto;
         
        }

        h1 {
            color: #333;
            font-size: 24px;
        }

        h2 {
            font-size: 18px;
            margin: 10px 0;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="content-box">
        <h1><b>Weather Report</b></h1>
        <h2><b>Location: {{$location}}</b></h2>
        <h2>Temperature: {{$currentTemp}} Degree Celcius </h2>
        <h2>Weather Condition: {{$currentCondition}}</h2>
    </div>
</body>
</html>
