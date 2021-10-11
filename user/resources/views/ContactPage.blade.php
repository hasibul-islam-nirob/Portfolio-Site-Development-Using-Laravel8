@extends('Layout.App')

@section('title','Contact')

@section('content')

    <div class="container-fluid jumbotron mt-5 ">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6  text-center">
                <img class=" page-top-img fadeIn" src="images/knowledge.svg">
                <h1 class="page-top-title mt-3">- Contact US -</h1>
            </div>
        </div>
    </div>


    <div class="container-fluid  text-center mb-5">
        <div class="row ">
            <div class="col-md-6 contact-form ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d29212.50771103386!2d90.37678404110477!3d23.762941533538136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d23.7630333!2d90.39283669999999!5e0!3m2!1sen!2sbd!4v1631962769647!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-md-4 contact-form">
                <h5 class="service-card-title">Contact Us </h5>
                <div class="form-group ">
                    <input id="name" type="text" class="form-control w-100" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <input id="mobile" type="text" class="form-control  w-100" placeholder="Your Mobile No">
                </div>
                <div class="form-group">
                    <input id="email" type="text" class="form-control  w-100" placeholder="Your Email Address ">
                </div>
                <div class="form-group">
                    <input id="msg" type="text" class="form-control  w-100" placeholder="Massage ">
                </div>
                <button id="sendMSG" type="submit" class="btn btn-block normal-btn w-100">Send </button>
            </div>

        </div>
    </div>







@endsection
