<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 20px auto;
        }

        div {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="text"]:focus {
            border-color: #4CAF50;
        }
    </style>
</head>
<body>
    <h1>Update Employee Information</h1>
    <form action="{{ url('update', $emp_details->id) }}" method="POST"> 
        @csrf
        <div>   
            <label for="name">Employee Name</label>
            <input type="text" name="name" value="{{ $emp_details->name }}" id="name" required>
        </div>

        <div>
            <label for="email">Email</label>
            <input type="text" name="email" value="{{ $emp_details->email }}" id="email" required>
        </div>

        <div>
            <label for="position">Position</label>
            <input type="text" name="position" value="{{ $emp_details->position }}" id="position" required>
        </div>

        <div>
            <label for="number">Number</label>
            <input type="text" name="number" value="{{ $emp_details->number }}" id="number" required>
        </div>

        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>
