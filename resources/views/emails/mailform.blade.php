<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> --}}
    <title>Mail Form</title>
</head>
<body>
<div class="container">
    <div class="card mt-5">
        <div class="card-header bg-success text-center rounded">
            <h1 class="text-white bg-success fw-bolder">Send Mail</h1>
        </div>
        <div class="card-body">
            <div class="container">
                <form action="{{route('send.mail')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <label for="title" class="form-label">Title</label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><strong>Body:</strong></label>
                            <textarea class="ckeditor form-control" name="body" id="body"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 text-center">
                        <input type="submit" value="Send" class="btn btn-success text-center">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">

    $(document).ready(function() {

       $('.ckeditor').ckeditor();

    });

</script>
</html>

