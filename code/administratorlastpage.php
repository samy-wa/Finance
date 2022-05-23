<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Administrator page</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/sidebar.css">

    <!-- Font Awesome JS -->
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script> -->
    <script defer src="plugins/fontawesome-free-5.15.4/js/solid.js"></script>
    <script defer src="plugins/fontawesome-free-5.15.4/js/fontawesome.js"></script>

    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script> -->

</head>
<script type="text/javascript">
window.history.forward();

function noBack() {
    window.history.forward();
}
</script>

<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <div class="logo">
                    <h1 class="text-light"><a href="administratorlastpage.php"><span>FINANCE</span></a></h1>
                </div>
            </div>

            <ul class="list-unstyled components">
                <p>Administrator Role</p>
                <li class="active">
                    <a class="display-iframe" data-display-iframe="true" href="seereportbydate.php" target="bayew">See
                        Finance report</a>
                </li>
                <li>
                    <a class="display-iframe" data-display-iframe="true" href="galarry.php" target="bayew">Gallery</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle"
                        aria-controls="pageSubmenu">Message
                        & comment<i class="fas fa-caret-down" style="margin-left:10px"></i></a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a class="display-iframe" data-display-iframe="true" href="centralmessage.php"
                                target="bayew">Message & comment</a>
                        </li>
                        <li>
                            <a class="display-iframe" data-display-iframe="true" href="viewadminmessage.php"
                                target="bayew">View Message</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left fa-bars fa-2x"></i>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link active display-iframe" data-display-iframe="true"
                                    href="administratorlastpage.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link display-iframe" data-display-iframe="false"
                                    href="about.php" target="bayew">About</a></li>
                            <li class="nav-item"><a class="nav-link display-iframe" data-display-iframe="true"
                                    href="contact.php" target="bayew">Contact</a></li>
                            <li class="nav-item"><a class="nav-link display-iframe" data-display-iframe="true"
                                    href="logout.php">logout</a></li>
                            <li class="nav-item"><a class="nav-link display-iframe" data-display-iframe="true"
                                    href="changepass.php" target="bayew">change password</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <iframe name="bayew" class="Mainiframe" style="width: 100%; height: 50rem;"></iframe>
            <div class="line"></div>
            <h2>About Ambo</h2>
            <p>Ambo University is one of the public higher institutions that was founded in 2000, along with the
                Second-Generation universities in Ethiopia.It is located in the emerging town of Samara which is the
                capital city of Ethiopian Afar regional state, 588 kilometers away from Addis Ababa. The University
                officially commenced its service with 1,867 students, 3 faculties and 12 departments.
                In the recent years, the intake capacity is rising from year to year. So currently, it has reached 4,866
                students in regular, 1025 students in extension and 1579 students in summer programmes. These programs
                are operating under eight Colleges, 39 departments.To this effect, the university has shown much
                achievement in education, research and community service.
                A financial management system is a system or software that an organization uses to oversee and govern
                its income, expenses, and assets with the objectives of ensuring sustainability. Finance Management
                system is used to provide an option to generate the salary automatically every month.The main objective
                of this system is to study the nature of the system in detail and identify the problem as well as to
                define the relevant way to design a computerize system for samara campus financial management system.
            </p>
            <p>Ambo University is one of the public higher institutions that was founded in 2000, along with the
                Second-Generation universities in Ethiopia.It is located in the emerging town of Samara which is the
                capital city of Ethiopian Afar regional state, 588 kilometers away from Addis Ababa. The University
                officially commenced its service with 1,867 students, 3 faculties and 12 departments.
                In the recent years, the intake capacity is rising from year to year. So currently, it has reached 4,866
                students in regular, 1025 students in extension and 1579 students in summer programmes. These programs
                are operating under eight Colleges, 39 departments.To this effect, the university has shown much
                achievement in education, research and community service.
                A financial management system is a system or software that an organization uses to oversee and govern
                its income, expenses, and assets with the objectives of ensuring sustainability. Finance Management
                system is used to provide an option to generate the salary automatically every month.The main objective
                of this system is to study the nature of the system in detail and identify the problem as well as to
                define the relevant way to design a computerize system for samara campus financial management system.
            </p>
            <footer>
                <div class="d-flex justify-content-center pt-5 mt-5" id="templatemo_footer">
                    Copyright © 2011 <a href="https://estudent.ambou.edu.et/">Ambo University</a> | <a
                        href="https://estudent.ambou.edu.et/" target="_parent">AU Woliso Campus Finance Management
                        System</a>
                </div>
            </footer>
        </div>
    </div>

    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="bootstrap/dist/js/popper.min.js"></script>
    <script src="plugins/jquery/slim.min.js"></script>
    < <!-- jQuery CDN - Slim version (=without AJAX) -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>-->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
        </script> -->
        <!-- Bootstrap JS -->
        <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script> -->
        <script src="bootstrap/dist/js/bootstrap.min.js"></script>

        <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
            $(document).on('click', '.display-iframe', function() {
                var displayIframeBool = $(this).attr('data-display-iframe');
                if (displayIframeBool === 'true') {
                    $('.Mainiframe').css('display', '');
                } else {
                    $('.Mainiframe').css('display', 'none');
                }
            })
        });
        </script>
</body>

</html>