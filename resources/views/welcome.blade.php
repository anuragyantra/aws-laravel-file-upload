<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AWS File Upload</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body class="antialiased">

    <!-- Topic Cards -->
    <div id="cards_landscape_wrap-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <div class="card-flyer">
                        <div class="text-box">

                            <div class="text-container">
                                <h6 style="color:#c0392b">File Upload</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <br>

                                <form action="{{ url('fileupload/submit') }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}


                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @endif

                                    @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif


                                    <!-- File Field -->
                                    <div class="custom-file-upload">
                                        <input class="file-upload-input" class="form-control form-control-lg" id="file" name="file" type="file" required>
                                    </div>
                                    <br>


                                    <!-- Title Field -->
                                    <div class="form-group col-sm-12">
                                        <input type="text" class="text-upload-input form-control" placeholder="Title" id="title" name="title" required>
                                    </div><br>


                                    <!-- Description Field -->
                                    <div class="form-group col-sm-12">
                                        <input type="text" class="text-upload-input form-control" placeholder="Description" id="description" name="description">
                                    </div><br>


                                    <!-- Submit Field -->
                                    <div class="form-group col-sm-12 mt-3">
                                        <button class="file-upload-button" type="submit" class="btn btn-primary">Submit</button>
                                        <!-- <a href="" class="btn btn-secondary">Cancel</a> -->
                                    </div>

                                </form>


                                <!-- Form -> Custom Javascript   -->
                                <script>
                                    var file_input = document.getElementById('file');
                                    var file_infoArea = document.getElementById('file_name');

                                    file_input.addEventListener('change', showfileName);

                                    function showfileName(event) {
                                        var file_input = event.srcElement;
                                        var fileName = file_input.files[0].name;
                                        file_infoArea.textContent = 'Selected: ' + fileName;
                                    }
                                </script>




                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



</body>

<style>
    .text-upload-input {
        color: #fff;
        border: none;
        border-radius: 0;
        background-color: #ffd1d1;
        /* IE 9 Fix */
    }

    .text-upload-input:hover,
    .text-upload-input:focus {
        background-color: #ffd1d1;
        outline: none;
    }

    .custom-file-upload-hidden {
        display: none;
        visibility: hidden;
        position: absolute;
        left: -9999px;
    }

    .custom-file-upload {
        display: block;
        width: auto;
        font-size: 16px;
        margin-top: 30px;

    }

    .custom-file-upload label {
        display: block;
        margin-bottom: 5px;
    }

    .file-upload-wrapper {
        position: relative;
        margin-bottom: 5px;
    }

    .file-upload-input {
        margin-bottom: 30px;
        width: 100%;
        color: #fff;
        font-size: 16px;
        padding: 11px 17px;
        border: none;
        background-color: #c0392b;
        -moz-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        -webkit-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
        float: left;
        /* IE 9 Fix */
    }

    .file-upload-input:hover,
    .file-upload-input:focus {
        background-color: #ab3326;
        outline: none;
    }

    .file-upload-button {
        cursor: pointer;
        display: inline-block;
        color: #fff;
        font-size: 16px;
        text-transform: uppercase;
        padding: 11px 20px;
        border: none;
        margin-left: -1px;
        background-color: #962d22;
        /* float: left; */
        /* IE 9 Fix */
        -moz-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        -webkit-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
    }

    .file-upload-button:hover {
        background-color: #6d2018;
    }
</style>

<style>
    /*----  Main Style  ----*/
    #cards_landscape_wrap-2 {
        text-align: center;
        background: #F7F7F7;
    }

    #cards_landscape_wrap-2 .container {
        padding-top: 50px;
        padding-bottom: 100px;
    }

    #cards_landscape_wrap-2 a {
        text-decoration: none;
        outline: none;
    }

    #cards_landscape_wrap-2 .card-flyer {
        border-radius: 5px;
        padding-left: 100px;
        padding-right: 100px;
        padding-top: 20px;
        padding-bottom: 20px;

    }

    #cards_landscape_wrap-2 .card-flyer .text-box {
        text-align: center;
    }

    #cards_landscape_wrap-2 .card-flyer .text-box .text-container {
        padding: 30px 18px;
    }

    #cards_landscape_wrap-2 .card-flyer {
        background: #FFFFFF;
        margin-top: 50px;
        -webkit-transition: all 0.2s ease-in;
        -moz-transition: all 0.2s ease-in;
        -ms-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
        box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.40);
    }

    #cards_landscape_wrap-2 .card-flyer:hover {
        background: #fff;
        box-shadow: 0px 15px 26px rgba(0, 0, 0, 0.50);
        -webkit-transition: all 0.2s ease-in;
        -moz-transition: all 0.2s ease-in;
        -ms-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
        margin-top: 50px;
    }

    #cards_landscape_wrap-2 .card-flyer .text-box p {
        margin-top: 10px;
        margin-bottom: 0px;
        padding-bottom: 0px;
        font-size: 14px;
        letter-spacing: 1px;
        color: #000000;
    }

    #cards_landscape_wrap-2 .card-flyer .text-box h6 {
        margin-top: 0px;
        margin-bottom: 4px;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
        font-family: 'Roboto Black', sans-serif;
        letter-spacing: 1px;
        color: #00acc1;
    }
</style>

</html>