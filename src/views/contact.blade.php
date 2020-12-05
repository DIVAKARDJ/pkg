<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Package Contact</title>
</head>
<body>
    <div class="card">
        <form action="{{ route('contact') }}" method="POST">
            <div class="card-body">
                @csrf
                <div class="from-group">
                    <label for="Name" class="from-control">Name</label>
                    <input type="text" name="name" class="from-control">
                </div>
                <div class="from-group">
                    <label for="Email" class="from-control">Email</label>
                    <input type="email" name="email" class="from-cottrol">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>