<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="prism.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        #responsePre {
            max-height: 500px;
            background-color: white;
            border : 2px solid rgb(113, 255, 172);
        }
        .navbar-brand{
            color: rgb(179, 195, 209);
             font-size: 2.25rem !important;
        }
        .response{
            font-size: 35px !important;
        }
    </style>
    <title>PostMaster by Satyam_Dubey!</title>
</head>

<body>
    
      
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container my-3">

                <a class="navbar-brand" href="#">PostMaster</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarText">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link f-4" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link f-4" href="#">Pricing <span class="sr-only">(current)</span></a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="./contact/index.php">Contact us</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="login.php">Login/Signup</a>
                    </li>
                </ul>
                
            </div>
            </div>
        </nav>

    
    <div class="container text-center">
        <h1 class="my-5 justify-content-center">Welcome to PostMaster</h1>
    </div>
    
    <div class="container">

        <!-- URL box -->
        <div class="form-group row">
            <label for="url" class="font-weight-bold col-sm-2 col-form-label">URL</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="url" placeholder="Enter URL here">
            </div>
        </div>

        <!-- Request type box -->
        <fieldset class="form-group">
            <div class="row">
                <legend class=" font-weight-bold col-form-label col-sm-2 pt-0">Request Type</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="requestType" id="get" value="GET" checked>
                        <label class="font-weight-bold form-check-label" for="get">
                            GET
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="requestType" id="post" value="POST">
                        <label class="font-weight-bold form-check-label" for="post">
                            POST
                        </label>
                    </div>

                </div>
            </div>
        </fieldset>

        <!-- Content type box -->
        <fieldset class="form-group">
            <div class="row">
                <legend class=" font-weight-bold col-form-label col-sm-2 pt-0">Content Type</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="contentType" id="jsonRadio" value="json"
                            checked>
                        <label class=" font-weight-bold form-check-label" for="json">
                            JSON
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="contentType" id="paramsRadio" value="params">
                        <label class=" font-weight-bold form-check-label" for="params">
                            Custom Parameters
                        </label>
                    </div>

                </div>
            </div>
        </fieldset>

        <!-- Parameters box - This will hide on clicking json option in content type  -->
        <div id="parametersBox">
            <div class="form-row">
                <label for="url" class=" font-weight-bold col-sm-2 col-form-label">Parameter 1</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="parameterKey1" placeholder="Enter Parameter 1 Key">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="parameterValue1" placeholder="Enter Parameter 1 Value">
                </div>
                <button id="addParam" class="btn btn-primary">+</button>
            </div>
            <div id="params"></div>
        </div>

        <!-- Json Request box - This will hide on clicking parameters option in content type -->
        <div class="my-3" id="requestJsonBox">
            <div class="form-group row">
                <label for="requestJsonText" class=" font-weight-bold col-sm-2 col-form-label">Enter Request Json</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="requestJsonText" rows="3"></textarea>
                </div>
            </div>
        </div>

        <!-- Submit button which will trigger fetch api -->
        <div class="form-group row my-2">
            <div class="col-12 col-sm-10">
                <button id="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>


        <div class="my-3" id="responseJsonBox">
            <div class="form-group row">
                <label for="responseJsonText text-center" class="response font-weight-bold col-sm-12 col-form-label">Response</label>
                <div class="col-12 col-sm-10 ml-auto">
                    <!-- <textarea class="form-control" id="responseJsonText" rows="3">Your response will appear here</textarea> -->

                    <pre id='responsePre'
                        class="language-javascript"> <code id='responsePrism' class="language-javascript"> Your response will appear here </code> </pre>
                </div>
            </div>
        </div>

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script src="index.js"></script>
    <script src="prism.js"></script>
</body>

</html>