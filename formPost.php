<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .form-title {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #34495e;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .button-group {
            display: flex;
            gap: 10px;
        }
        input[type="submit"], input[type="reset"] {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"] {
            background-color: #3498db;
            color: white;
        }
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
        input[type="reset"] {
            background-color: #e74c3c;
            color: white;
        }
        input[type="reset"]:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="form-title">Form Input Data</h2>
        <form name="form1" method="post" action="aksi_post.php">
            <div class="form-group">
                <label for="nama">Masukkan Nama Anda:</label>
                <input type="text" name="nama" id="nama" placeholder="Nama lengkap Anda">
            </div>
            <div class="button-group">
                <input type="submit" name="submit" value="Submit">
                <input type="reset" name="Submit2" value="Reset">
            </div>
        </form>
    </div>
</body>
</html>