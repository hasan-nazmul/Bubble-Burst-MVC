<?php
    
?>


<!DOCTYPE html>
<html>
<head>
    
    <style type="text/css">
        .clearfix {clear:both;}
        body {
            background:#555;
        }
        main {
            width:400px;
            height:auto;
            *padding:10px;
            *background:#fff;
            margin:20px auto;
        }
        h1 {
            border:1px solid #fff;
            border-radius:5px;
            color:#fff;
            padding:10px;
            text-align: center;
        }
        .content {
            padding:10px;
            background: #fff;
            border-radius:5px;
        }
        .button {
            width:48%;
            height:auto;
            float:left;
            margin:0 1% 10px 1%;
        }
        .button a {
            text-decoration:none;
            display: block;
            width:100%;
            height:100px;
            border:1px solid #ccc;
            text-align: center;
            line-height: 100px;
        }
    </style>
    
</head>
    
<body>
    <main>
        <h1>Admin Panel</h1>
        <div class="content">
            <p>Welcome to Minute Hound</p>
            <div class="button">
                <a href="CreateDatabase.php">Create Database</a>
            </div>
            
            <div class="button">
                <a href="SqlConnection.php">Test Connection</a>
            </div>
            
            <div class="button">
                <a href="CreateEmployeeTable.php">Create Table</a>
            </div>
            
            <div class="button">
                <a href="../home.php">Home Page</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </main>
</body>
</html>