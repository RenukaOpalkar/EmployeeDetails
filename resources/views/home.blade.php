<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #36d1dc, #5b86e5);
            text-align: center;
            margin: 0;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            display: inline-block;
        }
        h1 {
            color: white;
        }
        input[type="search"] {
            padding: 10px;
            width: 60%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background: #5b86e5;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #3a64b3;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background: white;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background: #5b86e5;
            color: white;
        }
        a {
            text-decoration: none;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .delete {
            background: red;
        }
        .update {
            background: green;
        }
    </style>
</head>
<body>
    <h1>Employee Data</h1>
    <div class="container">
        <form action="{{url('home')}}" method="get">
        </form>
        <br>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Position</th>
                <th>Number</th>
                <th>Action</th>

            </tr>
            @foreach($data as $emp_details)
            <tr>
                <td>{{$emp_details->id}}</td>
                <td>{{$emp_details->name}}</td>
                <td>{{$emp_details->email}}</td>
                <td>{{$emp_details->position}}</td>
                <td>{{$emp_details->number}}</td>
                <td>
                <a href="/upload" style="display: inline-block; width: 70px; text-align: center; padding: 8px; background: #00aaff; color: white; border-radius: 5px; text-decoration: none; font-weight: bold;">Add</a>
                <a href="{{ url('update_view', $emp_details->id) }}" style="display: inline-block; width: 70px; text-align: center; padding: 8px; background: #00aaff; color: white; border-radius: 5px; text-decoration: none; font-weight: bold;">Update</a>
                <a href="{{url('delete', $emp_details->id)}}" style="display: inline-block; width: 70px; text-align: center; padding: 8px; background: #00aaff; color: white; border-radius: 5px; text-decoration: none; font-weight: bold;" class="delete">Delete</a>

            </td>                
            @endforeach
        </table>
    </div>
</body>
</html>
