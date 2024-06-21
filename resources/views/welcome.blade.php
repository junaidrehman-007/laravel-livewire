<!DOCTYPE html>
<html>
<head>
    <title>Laravel Livewire CRUD - Practice</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .neon-alert {
    color: #39ff14; /* Neon green color */
    background-color: black; /* Dark background to enhance neon effect */
    border: 1px solid #39ff14; /* Border color */
    box-shadow: 0 0 10px #39ff14, 0 0 20px #39ff14, 0 0 30px #39ff14, 0 0 40px #39ff14;
    text-shadow: 0 0 5px #39ff14, 0 0 10px #39ff14, 0 0 15px #39ff14, 0 0 20px #39ff14;
    padding: 15px;
    border-radius: 5px;
    margin: 10px 0;
}

    </style>
    @livewireStyles
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel Livewire CRUD - Practice</h2>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @livewire('posts')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</body>
</html>