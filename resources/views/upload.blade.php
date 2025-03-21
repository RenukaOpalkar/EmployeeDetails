<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff9966, #ff5e62);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        .form-group {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        label {
            width: 100px;
            text-align: left;
            font-weight: bold;
        }
        input[type="text"], input[type="file"] {
            flex: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background: #ff5e62;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background: #e74c3c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Upload Employee Details</h2>
        <form action="{{url('upload')}}" method="POST" enctype="multipart/form-data"> 
            @csrf
            <!-- Form group for name -->
            <div class="form-group">
                <label>Employee Name</label>
                <input type="text" name="name" class="require" placeholder="Enter  Name" required>
                </div>
            
            <!-- Form group for email -->
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="require" placeholder="Enter Email" required>
            </div>

              <!-- Form group for position -->
              <div class="form-group">
                <label>Position</label>
                <input type="text" name="position" class="require" placeholder="Enter Position" required>
            </div>
            
            <!-- Form group for number -->
            <div class="form-group">
                <label>Number</label>
                <input type="text" name="number"class="require" placeholder="Enter Number" required>
            </div>
            
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>