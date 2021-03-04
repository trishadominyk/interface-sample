<!doctype html>
<html lang="en">
<!-- load HTML headers -->
    <?php require_once('headers.php');?>

    <body>
        <div class="container m-10">
            <div class="row justify-content-md-center p-5">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Hello, World!
                        </div>
                        <div class="card-body p-5">
                            <h5 class="text-center">To get started, enter something in the field below:</h5>
                            
                            <form class="pb-5">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="sampleInput" name="sampleInput">
                                </div>
                            </form>

                            <h1 id="outputText" class="text-center"></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>