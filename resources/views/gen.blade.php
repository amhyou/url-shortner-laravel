<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
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

        #urlInput {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #shortenButton {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #shortenedUrl {
            margin-top: 20px;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <div id="container">
        <h1>URL Shortener</h1>
        <input type="text" id="urlInput" placeholder="Enter URL to shorten">
        <button onclick="shortenUrl()" id="shortenButton">Shorten</button>
        <br /><br /><br />
        <p id="shortenedUrl"></p>
    </div>

    <script>
        function shortenUrl() {
            var inputUrl = document.getElementById('urlInput').value;
            // Implement your URL shortening logic here
            fetch("/api/newurl", {
                method: 'POST',
                headers: {
                'Content-Type': 'application/json', // Set the content type to JSON
                // Add any other headers as needed
                },
                body: JSON.stringify({
                    href: inputUrl
                }),
            })
            .then(response => response.json())
            .then(data => {
                // Handle the response data
                console.log('Success:', data);
                // For demo purposes, let's just display the input URL
                document.getElementById('shortenedUrl').innerText = "http://localhost:8000/"+data.result
            })
            .catch(error => {
                // Handle errors
                console.error('Error:', error);
            });
        }
    </script>
</body>
</html>
