<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
@include('app')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6 my-5">
            <div class="card p-4 shadow ">
                <h3 class="text-center mb-4">Add Team Information</h3>
                <form method="POST" action="{{ route('team.store') }}">
                    @csrf
                    <div class="form-group my-3">
                        <label class="mb-2" for="team_name">Team Name:</label>
                        <input type="text" name="team_name" id="team_name" class="form-control" >
                    </div>
                    @error('team_name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group my-3">
                        <label class="mb-2" for="captain_name">Captain Name:</label>
                        <input type="text" name="captain_name" id="captain_name" class="form-control" >
                    </div>
                    @error('captain_name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group my-3">
                        <label class="mb-2" for="coach_name">Coach Name:</label>
                        <input type="text" name="coach_name" id="coach_name" class="form-control" >
                    </div>
                    @error('coach_name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>
