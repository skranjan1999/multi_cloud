<?php
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Welcome to lw Cloud</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        pre {
            background-color: #2e2e2e;
            color: #f4f4f9;
            padding: 20px;
            border-radius: 5px;
            font-family: 'Courier New', Courier, monospace;
            white-space: pre-wrap;
            word-wrap: break-word;
            overflow-x: auto;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h1>Welcome to lw Cloud</h1>
        <pre>";
        echo shell_exec('ifconfig');
        echo "</pre>
        <div class='footer'>Powered by lw Cloud</div>
    </div>
</body>
</html>";
?>
