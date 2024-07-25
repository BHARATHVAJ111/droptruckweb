<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{asset('images/fevicon.png')}}" type="">
    <!-- <link rel="shortcut icon" href="images/fevicon.png" type=""> -->

    <title> Drop Truck </title>


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> -->

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <!-- <link href="css/font-awesome.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom styles for this template -->
    <!-- <link href="css/style.css" rel="stylesheet" /> -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <!-- <link href="css/responsive.css" rel="stylesheet" /> -->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" />


</head>
<style>
    .custom-col {
        padding-left: 10px;
    }

    /* .my-float {
margin-top: 10px;
} */
</style>

<body>

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <!-- <div class="header_top">
        <div class="container-fluid ">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 123455678990
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : demo@gmail.com
              </span>
            </a>
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
          </div>
        </div>
      </div> -->
            <div class="fixed-top bg-white p-1">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container ">
                        <a class="navbar-brand" href="index.html">
                            <div class="d-flex">
                                <span class="d-flex logo-p">

                                    <img src="images/logo-1.jpg" alt="Logo" width="60px" class="">
                                    <!-- <span class="logo-p mt-4 pl-2">Drop Truck <br>On Time Every Time</span> -->
                                </span>
                                <!-- <p class="logo-p mt-4">Drop Truck <br>On Time Everey Time</p> -->
                            </div>
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class=""> </span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href=""> About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"> <i class="fa fa-user" aria-hidden="true"></i> +91 7502999899</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <a href="https://wa.me/917502999899" target="_blank" class="nav-item  whats-app" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat with us">
                <i class="fa-brands fa-whatsapp fa-beat my-float fs-1"></i>
                <!-- <i class="fa-brands fa-whatsapp "></i> -->
            </a>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
            <!-- <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol> -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- <img class="d-block w-100" src="images/slider-1.jpeg" alt="First slide" style="center"> -->
                    <video autoplay muted loop id="background-video" class="d-block w-100">
                        <source src="/images/video-1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="carousel-caption">
                        <h5 class="fw-bold">Drop Truck</h5>
                        <p class="fw-bold">Book Return Trucks for your Loads instantly save upto 40% than Hiring Locally</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!-- <img class="d-block w-100" src="images/slider-1.jpeg" alt="Second slide"> -->
                    <video autoplay muted loop id="background-video" class="d-block w-100">
                        <source src="/images/video-2.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="carousel-caption">
                        <h5 class="fw-bold">Drop Truck</h5>
                        <p class="fw-bold">Pay for the Drop:Simplifying Inter-City Truck rentals</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!-- <img class="d-block w-100" src="images/slider-1.jpeg" alt="Third slide"> -->
                    <video autoplay muted loop id="background-video" class="d-block w-100">
                        <source src="/images/video-3.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="carousel-caption">
                        <h5 class="fw-bold">Drop Truck</h5>
                        <p class="fw-bold">Online Truck Booking Plateform</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- end slider section -->
        <div class="bg-white shadow mb-3 mt-3 p-5 form container">

            <form action="{{route('store.details')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="2" name="role_id">
                <div class="row pb-2">
                    <!-- First column with five columns -->
                    <div class="col-lg-3 col-md-4 col-sm-6 custom-col mb-2">
                        <!-- <label for="company_name">Company Name:<span class="text-danger">*</span></label> -->
                        <input type="text" class="form-control form-control-sm input" id="company_name" name="pickup" placeholder="Pick Up Location">
                        @error('pickup')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 custom-col mb-2">
                        <!-- <label for="company_name">Company Name:<span class="text-danger">*</span></label> -->
                        <input type="text" class="form-control form-control-sm input" id="company_name" name="drop" placeholder="Pick Up Location">
                        @error('drop')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 custom-col mb-2">
                        <!-- <label for="number_2">Customer Number 1:</label> -->
                        <input type="text" class="form-control form-control-sm input" id="number_1" name="number_1" pattern="[0-9]{10}" title="Please enter a 10-digit number" placeholder="Customer Number">
                        @error('number_1')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 custom-col mb-2">
                        <!-- <label for="customer_name">Customer Name:<span class="text-danger">*</span></label> -->
                        <input type="text" class="form-control form-control-sm input" id="customer_name" name="customer_name" placeholder="Name/Company Name *">
                        @error('customer_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- <div class="col-lg-3 col-md-4 col-sm-6 custom-col">
                        <label for="company_name">Company Name:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm" id="company_name" name="company_name" placeholder="Company Name" required>
                        @error('company_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> -->
                    <!-- <div class="col-lg-3 col-md-4 col-sm-6 custom-col">
                        <label for="number_2">Customer Number 2:</label>
                        <input type="text" class="form-control form-control-sm" id="number_2" name="number_2" pattern="[0-9]{10}" title="Please enter a 10-digit number" placeholder="Customer Number 2" required>
                        @error('number_2')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> -->
                </div>







                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 custom-col mb-2" id="source_of_lead_container">
                        <!-- <label for="source_of_lead">Source of Lead:</label> -->
                        <select class="form-control form-control-sm input" id="source_of_lead" name="source_of_lead">
                            <option value="">Enter Source Of Lead</option>
                            <option value="Old data">Old data</option>
                            <option value="Telecalling">Telecalling</option>
                            <option value="Whatsapp">WhatsApp Blast</option>
                            <option value="Justdial">Justdial</option>
                            <option value="Referal">Referal</option>
                            <option value="SMS">SMS</option>
                            <option value="Webpage">Webpage</option>
                            <option value="Field visit">Field visit</option>
                            <option value="Trade Centre">Trade Centre</option>
                            <option value="Sulekha">Sulekha</option>
                            <option value="Others">Others</option>
                        </select>
                        @error('source_of_lead')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 custom-col mb-2" id="other_source_of_lead_container" style="display: none;">
                        <!-- <label for="new_source_type">Source of Lead</label> -->
                        <input type="text" class="form-control form-control-sm input" id="new_source_type" name="new_source_type" placeholder="Please Enter Source Type">
                        @error('new_source_type')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 custom-col mb-2" id="body_type_container">
                        <!-- <label for="body_type">Body Type: <span class="text-danger">*</span></label> -->
                        <select class="form-control form-control-sm input" id="body_type" name="body_type">
                            <option value="">Enter Body Type *</option>
                            <option value="Open">Open</option>
                            <option value="Container">Container</option>
                            <option value="JCB - ( HALF BODY)">JCB - ( HALF BODY)</option>
                            <option value="Any">Any</option>
                            <option value="Others">Others</option>
                        </select>
                        @error('body_type')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 custom-col mb-2" id="other_body_type_container" style="display: none;">
                        <!-- <label for="new_body_type">Body Type</label> -->
                        <input type="text" class="form-control form-control-sm" id="new_body_type" name="new_body_type" placeholder=" Enter Body Type">
                        @error('new_body_type')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 custom-col gap-2 mb-2">
                        <!-- <label for="weight">Weight:<span class="text-danger">*</span></label> -->
                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm input" id="weight" name="weight" placeholder="Enter a Weight *">
                            <select name="weight_unit" id="weight_unit" class="form-control form-control-sm input">
                                <option value="">Select Weight</option>
                                <option value="kg">kg</option>
                                <option value="tons">tons</option>
                            </select>
                            @error('weight_unit')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 custom-col mb-2" id="material_type_container">
                        <!-- <label for="material_type_id">Material Type</label> -->
                        <div class="input-group">
                            <select name="material_type_id" id="material_type_id" class="form-control form-control-sm input">
                                <option value="">Enter Material Type</option>
                                <option value="1">Boxes</option>
                                <option value="2">Machine</option>
                                <option value="3">Cotton Box</option>
                                <option value="4">Wire</option>
                                <option value="5">Coil</option>
                                <option value=" 6"> Plates</option>
                                <option value="7">Furniture</option>
                                <option value="8">Electrical</option>
                                <option value="9">Electronics</option>
                                <option value="10"> Tanks</option>
                                <option value="11">Bags</option>
                                <option value="12">pallet with chemical bags</option>
                                <option value="13">ginger</option>
                                <option value="14">tiles</option>
                                <option value="15">plastic</option>
                                <option value="16">plywood</option>
                                <option value="17">cylinder tank</option>
                                <option value="18">cotton box </option>
                                <option value="19">others</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 custom-col mb-2" id="other_material_type_container" style="display: none;">
                        <!-- <label for="new_material_type">Material Type</label> -->
                        <input type="text" class="form-control form-control-sm" id="new_material_type" name="new_material_type" placeholder="Enter Material Type">
                    </div>
                </div>
                <p class="text-dark mt-1 fw">Must Select Truck Type *</p>
                <div class="row d-flex justify-content-between mt-1">
                    <div>
                        <input type="hidden" src="images/tata.png" alt="Image-1" width="80px" height="80px" value="">
                        <!-- <p class="text-dark">Tata Ace</p> -->
                    </div>
                    <div>
                        <input type="image" src="images/dost.jpeg" alt="Image-1" width="80px" height="80px" value="8ft Truck" onclick="setImageValue('8ft Truck')">
                        <p class="text-dark">8ft Truck</p>
                    </div>
                    <div>
                        <input type="image" src="images/bolero.jpeg" alt="Image-1" width="80px" height="80px" value="10ft Truck" onclick="setImageValue('10ft Truck')">
                        <p class="text-dark">10ft Truck</p>
                    </div>
                    <div id="eicher_container">
                        <input type="image" src="images/bada dost.jpeg" alt="Image-1" width="80px" height="80px" value="35" onclick="setImageValue('35')">
                        <p class="text-dark">Eicher</p>
                    </div>
                    <div id="taurus_container">
                        <input type="image" src="images/407.jpg" alt="Image-1" width="80px" height="80px" value="36" onclick="setImageValue('36')">
                        <p class="text-dark">Taurus</p>
                    </div>
                    <div id="32_container">
                        <input type="image" src="images/12 feet.jpeg" alt="Image-1" width="80px" height="80px" value="38" onclick="setImageValue('38')">
                        <p class="text-dark">32ft Truck</p>
                    </div>
                    <div id="Trailer_container">
                        <input type="image" src="images/12 feet.jpeg" alt="Image-1" width="80px" height="80px" value="39" onclick="setImageValue('39')">
                        <p class="text-dark">Trailer</p>
                    </div>
                    <div>
                        <input type="image" src="images/14 feet.webp" alt="Image-1" width="80px" height="80px" value="37" onclick="setImageValue('37')">
                        <p class="text-dark">Others</p>
                    </div>
                    <div id="truckTypeContainer">
                        <input type="hidden" src="images/tata.png" alt="Image-1" width="80px" height="80px">
                        <!-- <p class="text-dark">Others</p> -->
                    </div>
                </div>
                <!-- <input type="hidden" name="truck_type" id="truck_type"> -->
                <input type="hidden" name="new_truck_type" id="new_truck_type">

                <div class="col-lg-3 col-md-4 col-sm-6 custom-col" id="other_truck_type_container" style="display: none;">
                    <input type="text" placeholder="Enter Truck Type" name="custom_truck_type" class="form-control form-control-sm input">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 custom-col" id="other_eicher_truck" style="display: none;">
                    <div class="input-group">
                        <select name="eicher_truck_type" id="eicher_truck_type" class="form-control form-control-sm input">
                            <option value="">Enter Truck Type</option>
                            <option value="8">12 Feet</option>
                            <option value="9">14 Feet</option>
                            <option value="8">17 Feet</option>
                            <option value="9">19 Feet</option>
                            <option value="10">20 Feet</option>
                            <option value="11">22 Feet</option>
                            <option value="12">24 Feet</option>
                            <option value="13">26 Feet</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 custom-col" id="other_taurus_truck" style="display: none;">
                    <div class="input-group">
                        <select name="taurus_truck_type" id="taurus_truck_type" class="form-control form-control-sm input">
                            <option value="">Enter Truck Type</option>
                            <option value="26">6 Wheel</option>
                            <option value="27">10 Wheel</option>
                            <option value="28">12 Wheel</option>
                            <option value="29">14 Wheel</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 custom-col" id="other_32_container" style="display: none;">
                    <div class="input-group">
                        <select name="32ft_truck_type" id="32ft_truck_type" class="form-control form-control-sm input">
                            <option value="">Enter Truck Type</option>
                            <option value="14">32ft SXL</option>
                            <option value="15">32ft MXL</option>
                            <option value="16">32ft SX-HQ</option>
                            <option value="17">32ft MXL-HQ</option>
                            <option value="18">32ft JCP</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 custom-col" id="other_trailer_container" style="display: none;">
                    <div class="input-group">
                        <select name="trailer_truck_type" id="trailer_truck_type" class="form-control form-control-sm input">
                            <option value="">Enter Truck Type</option>
                            <option value="19">20 Feet Trailor</option>
                            <option value="20">40 Feet Trailor-2XL</option>
                            <option value="21">40 Feet Trailor-3XL</option>
                            <option value="22">24 Feet Trailor</option>
                            <option value="23">40 Feet Trailor-Low Bed</option>
                            <option value="24">40 Feet Trailor-Semi Bed</option>
                            <option value="25">40 Feet Trailor-High Bed</option>
                        </select>
                    </div>
                </div>

                <script>
                    function setImageValue(value) {
                        var newTruckTypeInput = document.getElementById('new_truck_type');
                        var otherTruckTypeContainer = document.getElementById('other_truck_type_container');
                        var otherEicherTruckContainer = document.getElementById('other_eicher_truck');
                        var otherTaurusTruckContainer = document.getElementById('other_taurus_truck');
                        var other32ftTruckContainer = document.getElementById('other_32_container');
                        var othertrailerTruckContainer = document.getElementById('other_trailer_container');

                        // Hide all dropdowns initially
                        otherTruckTypeContainer.style.display = 'none';
                        otherEicherTruckContainer.style.display = 'none';
                        otherTaurusTruckContainer.style.display = 'none';
                        other32ftTruckContainer.style.display = 'none';
                        othertrailerTruckContainer.style.display = 'none';
                        newTruckTypeInput.value = value;

                        // Show the appropriate dropdown based on the selected value
                        if (value === '37') {
                            otherTruckTypeContainer.style.display = 'block';
                        } else if (value === '35') {
                            otherEicherTruckContainer.style.display = 'block';
                        } else if (value === '36') {
                            otherTaurusTruckContainer.style.display = 'block';
                        } else if (value === '38') {
                            other32ftTruckContainer.style.display = 'block';
                        } else if (value === '39') {
                            othertrailerTruckContainer.style.display = 'block';
                        }
                    }

                    document.querySelectorAll('input[type="image"]').forEach(img => {
                        img.addEventListener('click', function(event) {
                            event.preventDefault();
                            setImageValue(this.value);
                        });
                    });
                </script>

                <div class="d-flex justify-content-center mt-2">
                    <button class="gradient-button rounded-pill" type="submit">Submit</button>
                </div>
            </form>
        </div>
        </section>
        <!-- some contents for ours -->


        <section class="bg-light ">
            <div class="container-fluid text-center pb-3 how-drop-work">
                <p class=""> <span class="spanw">W</span>e provide hassle-free transits and seamless trucking solutions for all your needs, whether it's a small truck, a big truck, or even over-dimensional cargo, across every part of <mark> India.</mark>
                </p>
                <p>________<span class="text-danger">_________</span>_________</p>
                <h1 class="how-drop-work-h1">How Drop Truck Works ?</h1>

                <!-- <p class="font-weight-bold" style="font-weight: bold;">___________<span class="text-danger">________________________</span>____________</p> -->
                <!-- first row -->
                <div class="row container-fluid mt-5">
                    <div class="col-md-6">
                        <img src="{{asset('images/Untitled presentation.jpg')}}" alt="" width="400px" height="300px">
                        <!-- <img src="/public/images/Untitled presentation.jpg" alt=""> -->
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3"><span class="step">1</span></div>
                            <div class="col">
                                <h5 class="how-drop-work-h5">Submit your inquiries via:-</h5>
                                <p class="d-flex flex-column">
                                    Playstore app
                                    Webpage
                                    Call center
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <img src="images/arrow-310623_1920.png" alt="" width="200px">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- second row -->
                <div class="row container-fluid mt-5">

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3"><span class="step">2</span></div>
                            <div class="col">
                                <h5 class="how-drop-work-h5">We Have Latest Technologies:-</h5>
                                <p>Our latest technology and dedicated team will find the appropriate vehicle for your customized requirements at reasonable rates.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <img src="images/arrow-310622_1280.png" alt="" width="200px">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('images/uiux.jpeg')}}" alt="" width="400px" height="300px">
                    </div>
                </div>
                <!-- third row -->
                <div class="row container-fluid mt-5">
                    <div class="col-md-6">
                        <img src="{{asset('images/call-center.jpeg')}}" alt="" width="400px" height="250px">
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3"><span class="step">3</span></div>
                            <div class="col">
                                <h5 class="how-drop-work-h5">We Have Voice Support:-</h5>
                                <p class="d-flex flex-column">
                                Receive instant updates on trip details, trip status, vehicle location, driver details, and bills through the Playstore app, WhatsApp, and email.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <img src="images/arrow-310623_1920.png" alt="" width="200px">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- third row -->
                <div class="row container-fluid mt-5 gap-3">
                  
                    <div class="col-md-6">
                        
                        <div class="row">
                            <div class="col-lg-3"><span class="step">4</span></div>
                            <!-- <div class="col">
                                <h5 class="how-drop-work-h5">We Have Voice Support:-</h5>
                                <p class="d-flex flex-column">
                                Receive instant updates on trip details, trip status, vehicle location, driver details, and bills through the Playstore app, WhatsApp, and email.
                                </p>
                            </div> -->
                            <div class="image-container">
                            <img src="images/iphone-160307_1920.png" alt="Background Image" class="background-image" width="250px" height="400px">
                            <img src="images/logo-1.png" alt="Foreground Image" class="foreground-image" width="50px">
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <!-- <img src="images/arrow-310623_1920.png" alt="" width="200px"> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <img src="images/untitled 1.png" alt="Qr code" width="220px" class="mr-5">
                    <p class="fw-bold fs-4 text-dark how-drop-work-h1">Scan QR Code to Download Our Android App From Playstore</p>
                    </div>
                </div>
                <!-- <h3 class="how-drop-work-h5">why waste your time choose Drop Truck</h3> -->
            </div>
        </section>

        <!-- <section  class="text-light">
            <div class="container text-center mt-5">
                <div class="row">
                    <div class="col-md-4">
                        <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores eveniet nesciunt ab. Suscipit sint,
                            cumque totam dolores distinctio veniam quis, vero minus culpa delectus officiis ut mollitia. Animi,
                            similique deleniti.</p>
                    </div>
                    <div class="col-md-4 pt-3">
                        
                    </div>
                    <div class="col-md-4">
                        <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium accusantium reprehenderit doloribus
                            quas obcaecati ex expedita vel dolorum quo nemo ad iusto, explicabo provident ipsa animi. Pariatur ex vitae
                            beatae!
                        </p>
                        <img src="images/untitled 1.png" alt="Qr code" width="120px" class="mr-5">
                        <p class="fw-bold fs-4  text-dark">Scan QR Code to Download Our Android App From Playstore</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores eveniet nesciunt ab. Suscipit sint,
                            cumque totam dolores distinctio veniam quis, vero minus culpa delectus officiis ut mollitia. Animi,
                            similique deleniti.</p>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium accusantium reprehenderit doloribus
                            quas obcaecati ex expedita vel dolorum quo nemo ad iusto, explicabo provident ipsa animi. Pariatur ex vitae
                            beatae!</p>
                    </div>
                </div>
            </div>
        </section> -->



        <section>
            <div class="container-fluid text-center mt-5 bg-light p-3">
                <h5 style="font-family: 'Times New Roman', Times, serif;">What Makes Us Unique?</h5>
                <h3 style="font-family: 'Times New Roman', Times, serif;"><span class="spanw">D</span>roptruck Always Deliver More Then Expected</h3>
                <p>________<span class="text-danger">_________</span>_________</p>
                <div class="">
                    <div class="row px-5">
                        <div class="col-lg-4  col-sm-12 card rounded mr-3 mt-3 bg-white shadow">
                        <p>Wide Range Vehicles</p>
                            <div class="row">
                                <div class="col-md-7 pt-3">Wide range of vehicles From Tata Ace upto Odc Shipments</div>
                                <div class="col-md-1"></div>
                                <div class="col-md-4 mt-5 bg-danger rounded-start color-1">
                                    <img src="{{asset('images/maximize.png')}}" class="" alt="" width="50px">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-1"></div> -->
                        <div class="col-lg-4  col-sm-12 card mr-3 mt-3 bg-white shadow">
                            <p>One App Solution</p>
                            <div class="row">
                                <div class="col-md-7 mt-3">Indent raising, Tracking, Secure Payments, e-POD, e-Invoicing & complete trip management on app</div>
                                <div class="col-md-1"></div>
                                <div class="col-md-4 mt-5 bg-danger rounded-start color-2">
                                    <img src="{{asset('images/smartphone.png')}}" class="" alt="" width="50px">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-1"></div> -->
                        <div class="col-lg-4  col-sm-12 card mt-3 bg-white shadow">
                            <p>Competitive Pricing</p>
                            <div class="row">
                                <div class="col-md-7 pt-3">Reliable truck transportation services at the right price</div>
                                <div class="col-md-1"></div>
                                <div class="col-md-4 mt-5 bg-danger rounded-start color-1">
                                    <img src="images/sales.png" class="" alt="" width="50px">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row px-5 mt-3">
                        <div class="col-lg-4  col-sm-12 card rounded mr-3 mt-3 bg-white shadow">
                            <p>Pay after loading</p>
                            <div class="row">
                                <div class="col-md-7 pt-3">Service guarantee</div>
                                <div class="col-md-1"></div>
                                <div class="col-md-4 mt-5 bg-danger rounded-start color-2">
                                    <img src="{{asset('images/container.png')}}" class="" alt="" width="50px">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-1"></div> -->
                        <div class="col-lg-4  col-sm-12 card mr-3 mt-3 bg-white shadow">
                            <p>On Time Delivery</p>
                            <div class="row">
                                <div class="col-md-7 pt-3">Real time truck tracking to deliver on time</div>
                                <div class="col-md-1"></div>
                                <div class="col-md-4 mt-5 bg-danger rounded-start color-1">
                                    <img src="images/live-tracking.png" class="" alt="" width="50px">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-1"></div> -->
                        <div class="col-lg-4  col-sm-12 card mt-3 bg-white shadow">
                            <p>24x7 Customer Support </p>
                            <div class="row">
                                <div class="col-md-7 pt-3">Always there to help you in the case of emergency</div>
                                <div class="col-md-1"></div>
                                <div class="col-md-4 mt-5 bg-danger rounded-start color-2">
                                    <img src="images/24-hours.png" class="" alt="" width="50px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-5 mb-5">
            <div class="container-fluid text-center">
                <h3 style="font-family: 'Times New Roman', Times, serif;"><span class="spanw">W</span>E ARE TRANSFORMING CITES</h3>
                <P class="container">Droptruck is India's leading web and app-based truck booking platform, offering customers all the essential information in one place. As the only online truck service provider offering vehicles from Tata Ace to ODC consignments, Droptruck lets you track your truck's location in real-time and access crucial documents such as driver details, vehicle documents, and proof of delivery through our application. Droptruck logistics services are considered the best in the industry with 24/7 support and real-time SIM tracking facility.</P>
                <h4 class="p-2" style="font-family: 'Times New Roman', Times, serif;">
                <span class="spanw">T</span>ransportation Services
                </h4>
                <div>
                    <button onclick="showCities('Andhra Pradesh')" class="btn">Andhra Pradesh</button>
                    <button onclick="showCities('Arunachal Pradesh')" class="btn">Arunachal Pradesh</button>
                    <button onclick="showCities('Assam')" class="btn">Assam</button>
                    <button onclick="showCities('Bihar')" class="btn">Bihar</button>
                    <button onclick="showCities('Chandigarh')" class="btn">Chandigarh</button>
                    <button onclick="showCities('Delhi')" class="btn">Delhi</button>
                    <button onclick="showCities('Goa')" class="btn">Goa</button>
                    <button onclick="showCities('Gujarat')" class="btn">Gujarat</button>
                    <button onclick="showCities('Haryana')" class="btn">Haryana</button>
                    <button onclick="showCities('Himachal Pradesh')" class="btn">Himachal Pradesh</button>
                    <button onclick="showCities('Jammu and Kashmir')" class="btn">Jammu and Kashmir</button>
                    <button onclick="showCities('Jharkhand')" class="btn">Jharkhand</button>
                    <button onclick="showCities('Karnataka')" class="btn">Karnataka</button>
                    <button onclick="showCities('Kerala')" class="btn">Kerala</button>
                    <button onclick="showCities('Ladakh')" class="btn">Ladakh</button>
                    <button onclick="showCities('Madhya Pradesh')" class="btn">Madhya Pradesh</button>
                    <button onclick="showCities('Maharashtra')" class="btn">Maharashtra</button>
                    <button onclick="showCities('Manipur')" class="btn">Manipur</button>
                    <button onclick="showCities('Meghalya')" class="btn">Meghalaya</button>
                    <button onclick="showCities('Mizoram')" class="btn">Mizoram</button>
                    <button onclick="showCities('Nagaland')" class="btn">Nagaland</button>
                    <button onclick="showCities('Odisha')" class="btn">Odisha</button>
                    <button onclick="showCities('Punjab')" class="btn">Punjab</button>
                    <button onclick="showCities('Puducherry')" class="btn">Puducherry</button>
                    <button onclick="showCities('Rajasdhan')" class="btn">Rajasdhan</button>
                    <button onclick="showCities('Sikkim')" class="btn">Sikkim</button>
                    <button onclick="showCities('Tamil Nadu')" class="btn">Tamil Nadu</button>
                    <button onclick="showCities('Telungana')" class="btn">Telungana</button>
                    <button onclick="showCities('Tripura')" class="btn">Tripura</button>
                    <button onclick="showCities('Uttar Pradesh')" class="btn">Uttar Pradesh</button>
                    <button onclick="showCities('Uttarakhand')" class="btn">Uttarakhand</button>
                    <button onclick="showCities('West Bengal')" class="btn">West Bengal</button>
                </div>
                <!-- <p id="demo"></p> -->
                <div id="content">

                </div>

            </div>
        </section>
        <!-- service section -->

        <!-- <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container">
          <h2>
            Our <span>Services</span>
          </h2>
          <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
          </p>
        </div>
        <div class="row">
          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/s1.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Air Transport
                </h5>
                <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/s2.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Cargo Transport
                </h5>
                <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/s3.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Trucks Transport
                </h5>
                <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/s4.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Train Transport
                </h5>
                <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

        <!-- end service section -->


        <!-- about section -->

        <!-- <section class="about_section layout_padding-bottom">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About <span>Us</span>
              </h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>

      </div>
    </div>
  </section> -->

        <!-- end about section -->

        <!-- track section -->

        <!-- <section class="track_section layout_padding">
    <div class="track_bg_box">
      <img src="images/track-bg.jpg" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="heading_container">
            <h2>
              Track Your Shipment
            </h2>
          </div>
          <p>
            Iste reprehenderit maiores facilis saepe cumque molestias. Labore iusto excepturi, laborum aliquid pariatur
            veritatis autem, mollitia sint nesciunt hic error porro.
            Deserunt officia unde repellat beatae ipsum sed. Aperiam tempora consectetur voluptas magnam maxime
            asperiores quas similique repudiandae, veritatis reiciendis harum fuga atque.
          </p>
          <form action="">
            <input type="text" placeholder="Enter Your Tracking Number" />
            <button type="submit">
              Track
            </button>
          </form>
        </div>
      </div>
    </div>
  </section> -->

        <!-- end track section -->

        <!-- client section -->

        <!-- <section class="client_section layout_padding">
            <div class="container">
                <div class="heading_container">
                    <h2>
                        What Says Our <span>Client</span>
                    </h2>
                </div>
                <div class="client_container">
                    <div class="carousel-wrap ">
                        <div class="owl-carousel">
                            <div class="item">
                                <div class="box">
                                    <div class="detail-box">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        </p>
                                    </div>
                                    <div class="client_id">
                                        <div class="img-box">
                                            <img src="images/client-1.png" alt="" class="img-1">
                                        </div>
                                        <div class="name">
                                            <h6>
                                                Adipiscing
                                            </h6>
                                            <p>
                                                Magna
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="box">
                                    <div class="detail-box">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        </p>
                                    </div>
                                    <div class="client_id">
                                        <div class="img-box">
                                            <img src="images/client-2.png" alt="" class="img-1">
                                        </div>
                                        <div class="name">
                                            <h6>
                                                Adipiscing
                                            </h6>
                                            <p>
                                                Magna
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="box">
                                    <div class="detail-box">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        </p>
                                    </div>
                                    <div class="client_id">
                                        <div class="img-box">
                                            <img src="images/client-1.png" alt="" class="img-1">
                                        </div>
                                        <div class="name">
                                            <h6>
                                                Adipiscing
                                            </h6>
                                            <p>
                                                Magna
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="box">
                                    <div class="detail-box">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        </p>
                                    </div>
                                    <div class="client_id">
                                        <div class="img-box">
                                            <img src="images/client-2.png" alt="" class="img-1">
                                        </div>
                                        <div class="name">
                                            <h6>
                                                Adipiscing
                                            </h6>
                                            <p>
                                                Magna
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- end client section -->

        <!-- contact section -->
        <!-- <section class="contact_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-5 offset-md-1">
          <div class="heading_container">
            <h2>
              Contact Us
            </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-5 offset-md-1">
          <div class="form_container contact-form">
            <form action="">
              <div>
                <input type="text" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
        <!-- end contact section -->

        <!-- info section -->

        <section class="info_section layout_padding2" style="font-family: 'Times New Roman', Times, serif;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-lg-3 info_col">
                        <div class="info_contact">
                            <h4>
                                Address
                            </h4>
                            <div class="contact_link_box">
                                <a href="https://www.google.com/maps/place/Drop+Truck+Rental+Services/@13.0131475,80.2208632,17z/data=!3m1!4b1!4m6!3m5!1s0x3a5267000b9fcc3d:0x625e7bc45f11a1e5!8m2!3d13.0131423!4d80.2234381!16s%2Fg%2F11vyrp_wqx?entry=ttu">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span>
                                        Drop Truck Rental Services <br>
                                        7/2, Anjaneyar Koil St, Little Mount, Saidapet, Chennai, Tamil Nadu 600015
                                    </span>
                                </a>
                                <a href="">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>
                                        Call +91 7502999899
                                    </span>
                                </a>
                                <a href="">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span>
                                        demo@gmail.com
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="info_social">
                            <a href="">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fa-brands fa-twitter"></i>
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-3 info_col">
                        <div class="info_detail">
                            <h4>
                                Scan
                            </h4>
                            <img src="images/untitled 1.png" alt="Qr code" width="120px" class="mr-5">
                    <p class="">Scan QR Code to Download Our Android App From Playstore</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-2 mx-auto info_col">
                        <div class="info_link_box">
                            <h4>
                                Links
                            </h4>
                            <div class="info_links">
                                <a class="active" href="index.html">
                                    <img src="images/nav-bullet.png" alt="">
                                    Home
                                </a>
                                <a class="" href="about.html">
                                    <img src="images/nav-bullet.png" alt="">
                                    About
                                </a>
                                <a class="" href="service.html">
                                    <img src="images/nav-bullet.png" alt="">
                                    Services
                                </a>
                                <a class="" href="contact.html">
                                    <img src="images/nav-bullet.png" alt="">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-lg-3 info_col ">
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div> -->
                </div>
            </div>
        </section>

        <!-- end info section -->

        <!-- footer section -->
        <section class="footer_section">
            <div class="container">
                <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By
                    <a href="https://karinnovation.in/" class="text-primary">Pojo Technologies</a>
                </p>
            </div>
        </section>
        <!-- footer section -->

        <!-- jQery -->
        <!-- <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script> -->
        <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
        <!-- popper js -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <!-- bootstrap js -->
        <!-- <script type="text/javascript" src="js/bootstrap.js"></script> -->
        <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
        <!-- owl slider -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
        </script>
        <!-- custom js -->
        <!-- <script type="text/javascript" src="js/custom.js"></script> -->
        <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
        </script>
        <!-- End Google Map -->



        <script>
            document.getElementById('material_type_id').addEventListener('change', function() {
                var otherInputContainer = document.getElementById('other_material_type_container');
                var materialTypeContainer = document.getElementById('material_type_container');
                if (this.value === '19') {
                    otherInputContainer.style.display = 'block';
                    materialTypeContainer.style.display = 'none';
                } else {
                    otherInputContainer.style.display = 'none';
                    materialTypeContainer.style.display = 'block';
                }
            });

            document.getElementById('source_of_lead').addEventListener('change', function() {
                var otherInputContainer = document.getElementById('other_source_of_lead_container');
                var sourceOfLeadContainer = document.getElementById('source_of_lead_container');
                if (this.value === 'Others') {
                    otherInputContainer.style.display = 'block';
                    sourceOfLeadContainer.style.display = 'none';
                } else {
                    otherInputContainer.style.display = 'none';
                    sourceOfLeadContainer.style.display = 'block';
                }
            });

            document.getElementById('body_type').addEventListener('change', function() {
                var otherInputContainer = document.getElementById('other_body_type_container');
                var bodyTypeContainer = document.getElementById('body_type_container');
                if (this.value === 'Others') {
                    otherInputContainer.style.display = 'block';
                    bodyTypeContainer.style.display = 'none';
                } else {
                    otherInputContainer.style.display = 'none';
                    bodyTypeContainer.style.display = 'block';
                }
            });

            document.getElementById('truck_type_id').addEventListener('change', function() {
                var otherInputContainer = document.getElementById('other_truck_type_container');
                var truckTypeContainer = document.getElementById('truck_type_container');
                if (this.value === '26') {
                    otherInputContainer.style.display = 'block';
                    truckTypeContainer.style.display = 'none';
                } else {
                    otherInputContainer.style.display = 'none';
                    truckTypeContainer.style.display = 'block';
                }
            });

            function showCities(state) {
                let content = '';
                switch (state) {
                    case 'Andhra Pradesh':
                        content = "<ul class='flex-list'><li>West Bengal</li><li>Karnataka</li><li>Tamil Nadu</li><li>Telangana</li><li>Gujarat</li></ul>";
                        break;

                    case 'Arunachal Pradesh':
                        content = "<ul class='flex-list'><li>Central</li><li>Hosur Road</li><li>Banashankari</li>   <li>Yeshwanthpur</li><li>Peenya</li><li>Marathahalli</li><li>Nagwara</li><li>Varthur</li><li>Yelahanka</li><li>Basavangudi</li><li>BTM</li><li>Kormangala</li><li>Banshankari</li><li>HSR</li><li>Jayanagar</li><li>Nagawara 1</li><li>JP Nagar</li><li>Indiranagar</li><li>Malleshwaram</li><li>Shivajinagar</li><li>Ramamurthy Nagar</li><li>Sanjaynagar</li><li>Begur</li><li>Bellandur</li><li>Baiyyappanahalli</li><li>Nagawara 2</li><li>Vijaynagar</li><li>Nagarbhavi</li><li>Sampanji Ramnagar</li><li>Electronic City Phase 1</li><li>Kumaraswamy Layout</li><li>Choodasandra</li><li>Mahadevpura</li><li>Mahadevpura</li></ul>";
                        break;
                    case 'Assam':
                        content = "<ul class='flex-list'><li>Uttar Pradesh</li><li>Rajasthan</li><li>Andhra Pradesh</li><li>Madhya Pradesh</li><li>Bihar</li><li>Mumbai</li><li>Pune</li><li>Nagpur</li><li>Thane</li><li>Nashik</li> <li>Aurangabad</li><li>Solapur</li><li>Amravati</li><li>Kolhapur</li><li>Sangli</li><li>Jalgaon</li><li>Akola</li><li>Latur</li><li>Dhule</li><li>Ahmednagar</li><li>Chandrapur</li><li>Parbhani</li><li>Ichalkaranji</li><li>Malegaon</li><li>Jalna</li><li>Udgir</li><li>Ambarnath</li><li>Badlapur</li><li>Panvel</li><li>Bhiwandi</li><li>Ulhasnagar</li><li>Beed</li><li>Wardha</li><li>Nanded</li> <li>Ratnagiri</li><li>Osmanabad</li><li>Satara</li><li>Gondia</li><li>Yavatmal</li><li>Baramati</li><li>Karad</li><li>Alibag</li><li>Akluj</li><li>Shirdi</li><li>Hingoli</li>";
                        break;
                    case 'Bihar':
                        content = "<ul class='flex-list'><li>Dhule</li><li>Ahmednagar</li><li>Chandrapur</li><li>Parbhani</li><li>Ichalkaranji</li><li>Malegaon</li><li>Jalna</li><li>Udgir</li><li>Ambarnath</li><li>Badlapur</li><li>Panvel</li><li>Bhiwandi</li><li>Ulhasnagar</li><li>Beed</li><li>Wardha</li><li>Nanded</li> <li>Ratnagiri</li><li>Osmanabad</li><li>Satara</li><li>Gondia</li><li>Yavatmal</li><li>Baramati</li><li>Karad</li><li>Alibag</li><li>Akluj</li><li>Shirdi</li><li>Hingoli</li>";
                        break;
                    case 'Chandigarh':
                        content = "<ul class='flex-list'><li>Uttar Pradesh</li><li>Rajasthan</li><li>Andhra Pradesh</li><li>Madhya Pradesh</li><li>Bihar</li><li>Mumbai</li><li>Pune</li><li>Nagpur</li><li>Thane</li><li>Nashik</li> <li>Aurangabad</li><li>Solapur</li><li>Amravati</li><li>Kolhapur</li><li>Sangli</li><li>Jalgaon</li><li>Akola</li><li>Latur</li><li>Dhule</li><li>Ahmednagar</li><li>Chandrapur</li><li>Parbhani</li><li>Ichalkaranji</li><li>Malegaon</li><li>Jalna</li><li>Udgir</li><li>Ambarnath</li><li>Badlapur</li><li>Panvel</li><li>Bhiwandi</li><li>Ulhasnagar</li><li>Beed</li><li>Wardha</li><li>Nanded</li> <li>Ratnagiri</li><li>Osmanabad</li><li>Satara</li><li>Gondia</li><li>Yavatmal</li><li>Baramati</li><li>Karad</li><li>Alibag</li><li>Akluj</li><li>Shirdi</li><li>Hingoli</li>";
                        break;
                    case 'Delhi':
                        content = "<ul class='flex-list'><li>Osmanabad</li><li>Satara</li><li>Gondia</li><li>Yavatmal</li><li>Baramati</li><li>Karad</li><li>Alibag</li><li>Akluj</li><li>Shirdi</li><li>Hingoli</li>";
                        break;
                    case 'Goa':
                        content = "<ul class='flex-list'><li>Bhiwandi</li><li>Ulhasnagar</li><li>Beed</li><li>Wardha</li><li>Nanded</li> <li>Ratnagiri</li><li>Osmanabad</li><li>Satara</li><li>Gondia</li><li>Yavatmal</li><li>Baramati</li><li>Karad</li><li>Alibag</li><li>Akluj</li><li>Shirdi</li><li>Hingoli</li>";
                        break;
                    case 'Gujarat':
                        content = "<ul class='flex-list'><li>Latur</li><li>Dhule</li><li>Ahmednagar</li><li>Chandrapur</li><li>Parbhani</li><li>Ichalkaranji</li><li>Malegaon</li><li>Jalna</li><li>Udgir</li><li>Ambarnath</li><li>Badlapur</li><li>Panvel</li><li>Bhiwandi</li><li>Ulhasnagar</li><li>Beed</li><li>Wardha</li><li>Nanded</li> <li>Ratnagiri</li><li>Osmanabad</li><li>Satara</li><li>Gondia</li><li>Yavatmal</li><li>Baramati</li><li>Karad</li><li>Alibag</li><li>Akluj</li><li>Shirdi</li><li>Hingoli</li>";
                        break;
                    case 'Haryana':
                        content = "<ul class='flex-list'><li>Osmanabad</li><li>Satara</li><li>Gondia</li><li>Yavatmal</li><li>Baramati</li><li>Karad</li><li>Alibag</li><li>Akluj</li><li>Shirdi</li><li>Hingoli</li>";
                        break;
                    case 'Himachal Pradesh':
                        content = "<ul class='flex-list'><li>Ulhasnagar</li><li>Beed</li><li>Wardha</li><li>Nanded</li> <li>Ratnagiri</li><li>Osmanabad</li><li>Satara</li><li>Gondia</li><li>Yavatmal</li><li>Baramati</li><li>Karad</li><li>Alibag</li><li>Akluj</li><li>Shirdi</li><li>Hingoli</li>";
                        break;
                    case 'Jammu and Kashmir':
                        content = "<ul class='flex-list'><li>Kolkata (Calcutta)</li><li>Asansol</li><li>Siliguri</li><li>Durgapur</li><li>Bardhaman (Burdwan)</li><li>Malda</li><li>Baharampur (Berhampore)</li><li>Habra</li><li>Kharagpur</li><li>Shantipur</li><li>Dankuni</li><li>Dhulian</li><li>Ranaghat</li><li>Haldia</li><li>Krishnanagar</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;
                    case 'Jharkhand':
                        content = "<ul class='flex-list'><li>Malda</li><li>Baharampur (Berhampore)</li><li>Habra</li><li>Kharagpur</li><li>Shantipur</li><li>Dankuni</li><li>Dhulian</li><li>Ranaghat</li><li>Haldia</li><li>Krishnanagar</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;
                    case 'Karnataka':
                        content = "<ul class='flex-list'><li>Kolkata (Calcutta)</li><li>Asansol</li><li>Siliguri</li><li>Durgapur</li><li>Bardhaman (Burdwan)</li><li>Malda</li><li>Baharampur (Berhampore)</li><li>Habra</li><li>Kharagpur</li><li>Shantipur</li><li>Dankuni</li><li>Dhulian</li><li>Ranaghat</li><li>Haldia</li><li>Krishnanagar</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;
                    case 'Kerala':
                        content = "<ul class='flex-list'><li>Malda</li><li>Baharampur (Berhampore)</li><li>Habra</li><li>Kharagpur</li><li>Shantipur</li><li>Dankuni</li><li>Dhulian</li><li>Ranaghat</li><li>Haldia</li><li>Krishnanagar</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;
                    case 'Ladakh':
                        content = "<ul class='flex-list'><li>Kolkata (Calcutta)</li><li>Asansol</li><li>Siliguri</li><li>Durgapur</li><li>Bardhaman (Burdwan)</li><li>Malda</li><li>Baharampur (Berhampore)</li><li>Habra</li><li>Kharagpur</li><li>Shantipur</li><li>Dankuni</li><li>Dhulian</li><li>Ranaghat</li><li>Haldia</li><li>Krishnanagar</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;
                    case 'Madhya Pradesh':
                        content = "<ul class='flex-list'><li>Asansol</li><li>Siliguri</li><li>Durgapur</li><li>Bardhaman (Burdwan)</li><li>Malda</li><li>Baharampur (Berhampore)</li><li>Habra</li><li>Kharagpur</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;
                    case 'Maharashtra':
                        content = "<ul class='flex-list'><li>Kolkata (Calcutta)</li><li>Asansol</li><li>Siliguri</li><li>Durgapur</li><li>Bardhaman (Burdwan)</li><li>Malda</li><li>Baharampur (Berhampore)</li><li>Habra</li><li>Kharagpur</li><li>Shantipur</li><li>Dankuni</li><li>Dhulian</li><li>Ranaghat</li><li>Haldia</li><li>Krishnanagar</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;
                    case 'Manipur':
                        content = "<ul class='flex-list'><li>Dankuni</li><li>Dhulian</li><li>Ranaghat</li><li>Haldia</li><li>Krishnanagar</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;
                    case 'Meghalya':
                        content = "<ul class='flex-list'><li>Kolkata (Calcutta)</li><li>Asansol</li><li>Siliguri</li><li>Durgapur</li><li>Bardhaman (Burdwan)</li><li>Malda</li><li>Baharampur (Berhampore)</li><li>Habra</li><li>Kharagpur</li><li>Shantipur</li><li>Dankuni</li><li>Dhulian</li><li>Ranaghat</li><li>Haldia</li><li>Krishnanagar</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;
                    case 'Mizoram':
                        content = "<ul class='flex-list'><li>Kolkata (Calcutta)</li><li>Asansol</li><li>Siliguri</li><li>Durgapur</li><li>Bardhaman (Burdwan)</li><li>Malda</li><li>Baharampur (Berhampore)</li><li>Habra</li><li>Kharagpur</li><li>Shantipur</li><li>Dankuni</li><li>Dhulian</li><li>Ranaghat</li><li>Haldia</li><li>Krishnanagar</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;
                    case 'Nagaland':
                        content = "<ul class='flex-list'><li>Dankuni</li><li>Dhulian</li><li>Ranaghat</li><li>Haldia</li><li>Krishnanagar</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;
                    case 'Odisha':
                        content = "<ul class='flex-list'><li>Kolkata (Calcutta)</li><li>Asansol</li><li>Siliguri</li><li>Durgapur</li><li>Bardhaman (Burdwan)</li><li>Malda</li><li>Baharampur (Berhampore)</li><li>Habra</li><li>Kharagpur</li><li>Shantipur</li><li>Dankuni</li><li>Dhulian</li><li>Ranaghat</li><li>Haldia</li><li>Krishnanagar</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;
                    case 'Punjab':
                        content = "<ul class='flex-list'><li>Kolkata (Calcutta)</li><li>Asansol</li><li>Siliguri</li><li>Durgapur</li><li>Bardhaman (Burdwan)</li><li>Malda</li><li>Baharampur (Berhampore)</li><li>Habra</li><li>Kharagpur</li><li>Shantipur</li><li>Dankuni</li><li>Dhulian</li><li>Ranaghat</li><li>Haldia</li><li>Krishnanagar</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;
                    case 'Puducherry':
                        content = "<ul class='flex-list'><li>Malda</li><li>Baharampur (Berhampore)</li><li>Habra</li><li>Kharagpur</li><li>Shantipur</li><li>Dankuni</li><li>Dhulian</li><li>Ranaghat</li><li>Haldia</li><li>Krishnanagar</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;
                    case 'Rajesthan':
                        content = "<ul class='flex-list'><li>Kolkata (Calcutta)</li><li>Asansol</li><li>Siliguri</li><li>Durgapur</li><li>Bardhaman (Burdwan)</li><li>Malda</li><li>Baharampur (Berhampore)</li><li>Habra</li><li>Kharagpur</li><li>Shantipur</li><li>Dankuni</li><li>Dhulian</li><li>Ranaghat</li><li>Haldia</li><li>Krishnanagar</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;
                    case 'Sikkim':
                        content = "<ul class='flex-list'><li>Malda</li><li>Baharampur (Berhampore)</li><li>Habra</li><li>Kharagpur</li><li>Shantipur</li><li>Dankuni</li><li>Dhulian</li><li>Ranaghat</li><li>Haldia</li><li>Krishnanagar</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;
                    case 'Tamil Nadu':
                        content = "<ul class='flex-list'><li>Kolkata (Calcutta)</li><li>Asansol</li><li>Siliguri</li><li>Durgapur</li><li>Bardhaman (Burdwan)</li><li>Malda</li><li>Baharampur (Berhampore)</li><li>Habra</li><li>Kharagpur</li><li>Shantipur</li><li>Dankuni</li><li>Dhulian</li><li>Ranaghat</li><li>Haldia</li><li>Krishnanagar</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;
                    case 'Telungana':
                        content = "<ul class='flex-list'><li>Dankuni</li><li>Dhulian</li><li>Ranaghat</li><li>Haldia</li><li>Krishnanagar</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;
                    case 'Tripura':
                        content = "<ul class='flex-list'><li>Malda</li><li>Baharampur (Berhampore)</li><li>Habra</li><li>Kharagpur</li><li>Shantipur</li><li>Dankuni</li><li>Dhulian</li><li>Ranaghat</li><li>Haldia</li><li>Krishnanagar</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;
                    case 'Uttar Pradesh':
                        content = "<ul class='flex-list'><li>Kolkata (Calcutta)</li><li>Asansol</li><li>Siliguri</li><li>Durgapur</li><li>Bardhaman (Burdwan)</li><li>Malda</li><li>Baharampur (Berhampore)</li><li>Habra</li><li>Kharagpur</li><li>Shantipur</li><li>Dankuni</li><li>Dhulian</li><li>Ranaghat</li><li>Haldia</li><li>Krishnanagar</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;
                    case 'Uttarakhand':
                        content = "<ul class='flex-list'><li>Kolkata (Calcutta)</li><li>Asansol</li><li>Siliguri</li><li>Durgapur</li><li>Bardhaman (Burdwan)</li><li>Malda</li><li>Baharampur (Berhampore)</li><li>Habra</li><li>Kharagpur</li><li>Shantipur</li><li>Dankuni</li><li>Dhulian</li><li>Ranaghat</li><li>Haldia</li><li>Krishnanagar</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;
                    case 'Rajasdhan':
                        content = "<ul class='flex-list'><li>Kolkata (Calcutta)</li><li>Asansol</li><li>Siliguri</li><li>Durgapur</li><li>Bardhaman (Burdwan)</li><li>Malda</li><li>Baharampur (Berhampore)</li><li>Habra</li><li>Kharagpur</li><li>Shantipur</li><li>Dankuni</li><li>Dhulian</li><li>Ranaghat</li><li>Haldia</li><li>Krishnanagar</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;

                    case 'West Bengal':
                        content = "<ul class='flex-list'><li>Kolkata (Calcutta)</li><li>Asansol</li><li>Siliguri</li><li>Durgapur</li><li>Bardhaman (Burdwan)</li><li>Malda</li><li>Baharampur (Berhampore)</li><li>Habra</li><li>Kharagpur</li><li>Shantipur</li><li>Dankuni</li><li>Dhulian</li><li>Ranaghat</li><li>Haldia</li><li>Krishnanagar</li><li>Raiganj</li><li>Medinipur</li><li>Jalpaiguri</li><li>Cooch Behar</li><li>Darjeeling</li>";
                        break;
                    default:
                        content = "No content available";
                }
                document.getElementById("content").innerHTML = content;
            }
        </script>

</body>

</html>