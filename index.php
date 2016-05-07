<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Adishankara CodeLab 1.0</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-post.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">ASIET CodeLab</a>
            </div>
           
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                
                

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>CODE | COMPILE | RUN  </h4>

                    <form role="form" id="code_form">
                        <div class="form-group">
                            
                                <select id="codetype" class="form-control" style="width:100px;">
                                    <option value="python">Python 2.7</option>
                                    <option value="java">Java</option>
                                    <option value="c">C</option> 
                                </select>
                            <hr>
                            <textarea name="code" class="form-control" rows="20" placeholder="# cook your code here" ></textarea>
                        </div>
                        <input type="button" value=" Run " onclick="compile()" class="btn btn-primary">
                        <label class="checkbox-inline pull-right"><input type="checkbox" value="">Custom Input</label>
                        <hr>
                         <textarea name="input" class="form-control" rows="3" placeholder="#Input Here" ></textarea>
                    </form>
                </div>

                <div class="well">
                    <h4>Output<h4>
                       
                    <h6><div id="output"></div> </h6>  

                </div>

                <hr>

                

               

               

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <hr>         
                <!-- Side Widget Well -->
                <div class="well">
                    <h4>CodeLab 1.0</h4>
                    <p> Adi Shankara Code LAb v1.0 is a online platform which enables students and teachers of this institution to access the facilities of cloud computing and enhance the productivity and performance.</p>
                </div>

                 <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Try it out</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Basic Programming</a>
                                </li>
                                <li><a href="#">Data Structures</a>
                                </li>
                                <li><a href="#">Greedy Algorithms</a>
                                </li>
                                <li><a href="#">String Algorithms</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Searching and Sorting</a>
                                </li>
                                <li><a href="#">Dynamic Programming</a>
                                </li>
                                <li><a href="#">Graphs</a>
                                </li>
                                <li><a href="#">Flow Networks</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; ASIET CodLab v1.0</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        function compile() {

	var codetype = document.getElementById("codetype").value;
	var ur = codetype+".php"; 
        
          var datastring = $("#code_form").serialize();
        $.ajax({
            type: "POST",
            url: ur,
            data: datastring,
            success: function(data) {
                 $("#output").html("")
                 $("#output").append(data);
                 
            }
        });
        }
    </script>

</body>

</html>
