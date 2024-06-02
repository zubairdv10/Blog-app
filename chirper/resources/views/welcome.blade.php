<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            color: white;
            text-align: center;
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.pexels.com/photos/457882/pexels-photo-457882.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') no-repeat center center fixed;
            background-size: cover;
            z-index: -2;
        }

        body::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Black overlay with 50% opacity */
            z-index: -1;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            z-index: 1; /* Ensure content is above the overlay */
            padding: 0 20px;
        }

        h1 {
            margin: 0;
            font-size: 4em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
            letter-spacing: 2px;
        }

        .intro-text {
            margin: 20px 0;
            font-size: 1.2em;
            width: 100%;
            max-width: 800px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
            line-height: 1.6;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .buttons button {
            background-color: #000;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .buttons button:hover {
            background-color: #333;
            transform: translateY(-3px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }

        .buttons button:active {
            background-color: #666;
            transform: translateY(0);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>My Blog</h1>
        <div class="intro-text">
            Welcome to my blog! Here you'll find a variety of posts on different topics. Feel free to browse and leave your comments. Happy reading!
        </div>
        <div class="buttons">
            <button onclick="window.location.href='<?php echo route('login'); ?>'">Login</button>
            <button onclick="window.location.href='<?php echo route('register'); ?>'">Register</button>
        </div>
    </div>
</body>
</html>