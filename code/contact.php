<!DOCTYPE html>
<html>
<link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
</link>
<script type="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>
<script defer src="plugins/fontawesome-free-5.15.4/js/solid.js"></script>
<script defer src="plugins/fontawesome-free-5.15.4/js/fontawesome.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

<body>
    <div class="container card" style="width: 50rem;">
        <img src="image/m.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Developers Addess</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            Yosef Wakuma
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <p> <i class="fas fa-inbox"></i> josey@gmail.com</p>
                            <p> <i class="fas fa-phone"></i> +251919421817</p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample1" role="button"
                            aria-expanded="false" aria-controls="collapseExample1">
                            Yosef Wakuma
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample1">
                        <div class="card card-body">
                            <p> <i class="fas fa-inbox"></i> josey@gmail.com</p>
                            <p> <i class="fas fa-phone"></i> +251919421817</p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample2" role="button"
                            aria-expanded="false" aria-controls="collapseExample2">
                            Yosef Wakuma
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body">
                            <p> <i class="fas fa-inbox"></i> josey@gmail.com</p>
                            <p> <i class="fas fa-phone"></i> +251919421817</p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample3" role="button"
                            aria-expanded="false" aria-controls="collapseExample3">
                            Yosef Wakuma
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample3">
                        <div class="card card-body">
                            <p> <i class="fas fa-inbox"></i> josey@gmail.com</p>
                            <p> <i class="fas fa-phone"></i> +251919421817</p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample4" role="button"
                            aria-expanded="false" aria-controls="collapseExample4">
                            Yosef Wakuma
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample4">
                        <div class="card card-body">
                            <p> <i class="fas fa-inbox"></i> josey@gmail.com</p>
                            <p> <i class="fas fa-phone"></i> +251919421817</p>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>

    <script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 2500);
    }
    </script>

</body>

</html>