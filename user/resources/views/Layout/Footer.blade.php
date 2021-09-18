
<div class="jumbotron  jumbotron-fluid  mb-0">
    <div class="container">
        <div class="row">

            @foreach($footerData as $footerData)
            <div class="col-md-3 col-lg-3 col-sm-6">
                <h3 class="service-card-title">Follow </h3>
                <hr>
                <p><a target="_blank" href="{{$footerData->fb_link}}" class="footer-link"><i class="fab fa-facebook-f"></i> Facebook </a></p>
                <p><a target="_blank" href="{{$footerData->git_link}}" class="footer-link"><i class="fab fa-github"></i> GitHub </a></p>
                <p><a target="_blank" href="{{$footerData->ln_link}}" class="footer-link"><i class="fab fa-linkedin-in"></i> LinkedIn </a></p>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6">
                <h3 class="service-card-title">Address</h3>
                <hr>
                <p class="footer-text"><i class="fas fa-map-marker-alt">  </i>{{$footerData->address}}</p>
                <p class="footer-text"><i class="fas fa-phone"></i>  {{$footerData->mobileNo	}} </p>
                <p class="footer-text"><i class="fas fa-envelope"></i>  {{$footerData->mailAdd}}</p>
            </div>
            @endforeach

            <div class="col-md-3 col-lg-3 col-sm-6">
                <h3 class="service-card-title">Info </h3>
                <hr>
                <a class="footer-link" target="_blank"  href="">Contact</a><br>
                <a class="footer-link" target="_blank"  href="">Projects</a><br>
                <a class="footer-link" target="_blank"  href="">Courses </a><br>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6">
                <h3 class="service-card-title">Law's</h3>
                <hr>
                <a class="footer-link" target="_blank" href="">Return Policy</a><br>
                <a class="footer-link" target="_blank" href="">Trams & Condition </a><br>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-dark text-white m-0 text-center p-3">
    <p class="rights-text  my-2 "> &copy; 2021 Hasibul Islam Nirob, Inc. All Rights Reserved. </p>
</div>
