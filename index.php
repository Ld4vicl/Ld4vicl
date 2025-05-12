<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d4vicl</title>
    <style>
        body {
            background-color: #000;
            color: #F2F2F2;
            font-family: 'Courier New', monospace;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }
        pre {
            white-space: pre-wrap;
            font-size: 14px;
            line-height: 1.2;
            max-width: 800px;
        }
        .cursor {
            animation: blink 1s infinite;
        }
        @keyframes blink {
            0%, 49% { opacity: 1; }
            50%, 100% { opacity: 0; }
        }
    </style>
</head>
<body>
    <pre>
<?php include 'Readme.md'; ?>
<span class="cursor">_</span>
    </pre>
</body>
</html> 