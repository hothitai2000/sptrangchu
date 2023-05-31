<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <form method="post" style="with:600px;margin-left :500px;">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" placeholder="Enter your age">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date of birth</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone number</label>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
        </div>
        <div class="mb-3">
            <label for="web" class="form-label">Website</label>
            <input type="url" class="form-control" id="web" name="web" placeholder="Enter your website">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address">
        </div>
        $include('block.error')
        <button type="submit" class="btn btn-primary">Submit</button>
        <div class="display-infor">
            @if (isset($user))
             <p>Name: {{$user['name']}}</p>
             <p>Age: {{$user['age']}}</p>
             <p>Date: {{$user['date']}}</p>
             <p>Phone: {{$user['phone']}}</p>
             <p>Website: {{$user['address']}}</p>
             @endif

        </div>
    </form>
    
</body>
</html>