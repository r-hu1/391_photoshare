<!DOCTYPE html>
<html>

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<style type="text/css">
    body {
        padding-top: 50px;
    }
    
    .butt {
        position: relative;
        margin: 0 auto;
    }
</style>

<?php include('header.php'); ?>

<body>

    <div class="container-projects bg-primary">
        <div class="container">
            <h1 id="projects" class="text-center">Upload Your Image!</h1>
            <div class="row">
                <form action="upload_photos.php" method="post" enctype="multipart/form-data">
                    <div class="text-center">
                        <div>Select Photo (one or multiple):</div>
                        <input class="butt" type="file" name="files[]" multiple/> Note: Supported image format: .jpeg, .jpg, .png, .gif
                        <br><input type="submit" value="Upload Image" id="selectedButton" />
                    </div>
                </form>

            </div>
        </div>
        <div class="clearfix hidden-xs" style="width:100%; height:50px;"></div>
    </div>

    <div class="container-projects bg-success">
        <div class="container">
            <h1 id="projects" class="text-center">Create groups!</h1>
            <div class="row">
                <form action="create_photo_gallery.php" method="post" enctype="multipart/form-data">
                    <div class="text-center">
                        <div>Select Photo (one or multiple):</div>
                        <input class="butt" type="file" name="files[]" multiple/> Note: Supported image format: .jpeg, .jpg, .png, .gif
                        <br><input type="submit" value="Upload Image" id="selectedButton" />
                    </div>
                </form>

            </div>
        </div>
        <div class="clearfix hidden-xs" style="width:100%; height:50px;"></div>
    </div>

    <div class="container-projects bg-warning">
        <div class="container">
            <h1 id="projects" class="text-center">COOLSHIT</h1>
            <div class="row">
                <form action="create_photo_gallery.php" method="post" enctype="multipart/form-data">
                    <div class="text-center">
                        <div>Select Photo (one or multiple):</div>
                        <input class="butt" type="file" name="files[]" multiple/> Note: Supported image format: .jpeg, .jpg, .png, .gif
                        <br><input type="submit" value="Upload Image" id="selectedButton" />
                    </div>
                </form>

            </div>
        </div>
        <div class="clearfix hidden-xs" style="width:100%; height:50px;"></div>
    </div>



</body>

</html>