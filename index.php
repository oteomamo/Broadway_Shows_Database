<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Broadway Shows Database</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        #body {
            background-image: url('BroadwayShowsDatabase/IMGDatabase/Background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            height: 100vh; 
        }


        .container {
            max-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
        }

        h1 {
            margin-top: 10vh;
            color: #1d3c45;
            text-align: center;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 10px;
        }

        .button-container img {
            width: 300px;
            height: 300px;
            margin-bottom: 100px;
            border: 2px solid #ffffff;
            cursor: pointer;
        }

        .button-container + .button-container {
            margin-left: 100px;
        }

        button {
            color: #d2601a;
            border-radius: 5%;
            padding: 15px 30px;
            font-size: 18px;
            width: 300px;
            margin-top: 30px;
        }

        .fas {
            font-size: 200px; 
            width: 200px;     
            text-align: center;
            margin-top: 25vh;
            vertical-align: middle;
            color: #000;
        }
    </style>
</head>

<body id="body">
    <h1>Broadway Shows Database</h1>
    <div class="container">
        <div class="button-container">
            <a href="/BroadwayShowsDatabase/admin.php">
                <i class="fas fa-user-cog fa-lg"></i>            </a>
            <button onclick="redirect('BroadwayShowsDatabase/admin.php')">Admin Interface</button>
        </div>
        <div class="button-container">
            <a href="BroadwayShowsDatabase/user.php">
                <i class="fas fa-user fa-lg"></i>
            </a>
            <button onclick="redirect('BroadwayShowsDatabase/user.php')">User Interface</button>
        </div>
    </div>

    <script>
        function redirect(url) {
            window.location.href = url;
        }
    </script>
</body>

</html>
