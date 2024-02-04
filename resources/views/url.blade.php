<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener Statistics</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }

        #container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #statistics {
            margin-top: 20px;
        }

        #statistics h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        #statistics p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div id="container">
        <h1>URL Shortener Statistics</h1>
        @if($href)
            <div id="statistics">
                <p><strong>URL: </strong> <span id="shortenedUrl">{{ $href->href }}</span></p>
                <p><strong>Shortened URL:</strong> <span id="shortenedUrl">{{ $href->short }}</span></p>
                <p><strong>Hits:</strong> <span id="hitsCount">{{ $href->nb_hits }}</span></p>
                <!-- Add more statistics as needed -->
            </div>
        @else
            <p><strong>No such URL</strong></p>
        @endif
    </div>
</body>
</html>
