<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!-- <link href="styles.css" rel="stylesheet" type="text/css" media="screen" /> -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <script defer src="plugins/fontawesome-free-5.15.4/js/solid.js"></script>
    <script defer src="plugins/fontawesome-free-5.15.4/js/fontawesome.js"></script>
    <!-- <style>
    MARQUEE p {
        font-size: 80px;
    </style>
    } -->
</head>
<script type="text/javascript">
window.history.forward();

function noBack() {
    window.history.forward();
}
</script>

<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">

    <body>
        <div class="wrapper">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <div class="logo">
                        <h1 class="text-light"><a href="Financeofficerpage.php"><span>FINANCE</span></a></h1>
                    </div>
                </div>

                <ul class="list-unstyled components">
                    <p>Officer Roles</p>
                    <li>
                        <a href="#HomeSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle"
                            aria-controls="HomeSubmenu">Employee<i class="fas fa-caret-down"
                                style="margin-left:10px"></i></a>
                        <ul class="collapse list-unstyled" id="HomeSubmenu">
                            <li class="active">
                                <a class="display-iframe" data-display-iframe="true" href="employeeregister.php"
                                    target="bayew">Register Employees</a>
                            </li>
                            <li>
                                <a class="display-iframe" data-display-iframe="true" href="searchempinfo.php"
                                    target="bayew">Search Employee Information</a>
                            </li>
                            <li>
                                <a class="display-iframe" data-display-iframe="true" href="updateempifobyid.php"
                                    target="bayew">Update Employee Information</a>
                            </li>
                            <li>
                                <a class="display-iframe" data-display-iframe="true" href="deleteempbyid.php"
                                    target="bayew">Delete Employee Information</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle"
                            aria-controls="pageSubmenu">Message<i class="fas fa-caret-down"
                                style="margin-left:10px"></i></a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a class="display-iframe" data-display-iframe="true" href="officermess.php"
                                    target="bayew">Write Message & comment</a>
                            </li>
                            <li>
                                <a class="display-iframe" data-display-iframe="true" href="officermessage.php"
                                    target="bayew">View Message & Comment</a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li>
                        <a class="display-iframe" data-display-iframe="true" href="galarry.php"
                            target="bayew">Gallery</a>
                    </li> -->
                </ul>

            </nav>
            <div id="content">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <i class="fas fa-align-left fa-bars fa-2x"></i>
                        </button>
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button"
                            data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item"><a class="nav-link active display-iframe"
                                        data-display-iframe="true" href="Financeofficerpage.php">Home</a></li>
                                <!-- <li class="nav-item"><a class="nav-link display-iframe" data-display-iframe="false"
                                        href="about.php" target="bayew">About</a></li> -->
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
                <!-- <h2>About Ambo</h2>
                <p>Ambo University is one of the public higher institutions that was founded in 2000, along with the
                    Second-Generation universities in Ethiopia.It is located in the emerging town of Samara which is the
                    capital city of Ethiopian Afar regional state, 588 kilometers away from Addis Ababa. The University
                    officially commenced its service with 1,867 students, 3 faculties and 12 departments.
                    In the recent years, the intake capacity is rising from year to year. So currently, it has reached
                    4,866
                    students in regular, 1025 students in extension and 1579 students in summer programmes. These
                    programs
                    are operating under eight Colleges, 39 departments.To this effect, the university has shown much
                    achievement in education, research and community service.
                    A financial management system is a system or software that an organization uses to oversee and
                    govern
                    its income, expenses, and assets with the objectives of ensuring sustainability. Finance Management
                    system is used to provide an option to generate the salary automatically every month.The main
                    objective
                    of this system is to study the nature of the system in detail and identify the problem as well as to
                    define the relevant way to design a computerize system for Woliso campus financial management
                    system.
                </p> -->
                <footer>
                    <div class="d-flex justify-content-center pt-5 mt-5" id="templatemo_footer">
                        Copyright © 2011 <a href="https://estudent.ambou.edu.et/">Ambo University</a> | <a
                            href="https://estudent.ambou.edu.et/" target="_parent">AU Woliso Campus Finance Management
                            System</a>
                    </div>
                </footer>
            </div>

        </div>
    </body>

</body>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="bootstrap/dist/js/popper.min.js"></script>
<script src="plugins/jquery/slim.min.js"></script>
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

</html>