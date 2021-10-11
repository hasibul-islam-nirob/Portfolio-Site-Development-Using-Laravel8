
@extends('Layout.App2')
@section('title','Login')
@section('title','Admin Login')

@section('loginContent')

<div class="content m-5 content-center">

    <div class="row content-center ">
        <div class="col-3"></div>

        <div class="col-6 pb-5">

            <!-- Material form login -->
            <div class="card ">

                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>Sign in</strong>
                </h5>

                <!--Card content-->
                <div class="card-body px-lg-5 pt-0 pb-5">

                <!-- Form -->
                <form class="adminLoginFrom" method="" style="color: #757575;" action="">

                    <!-- Email -->
                    <div class="md-form">
                        <input name="userName" value="" required type="text" id="userName" class="form-control">
                        <label for="userName">Username</label>
                    </div>

                    <!-- Password -->
                    <div class="md-form">
                        <input name="userPass" value="" required type="password" id="userPass" class="form-control">
                        <label for="userPass">Password</label>
                    </div>

                    <div class="d-flex justify-content-around">
                        <div>
                        <!-- Remember me -->
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                            <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                        </div>
                        </div>
                        <div>
                        <!-- Forgot password -->
                        <a href="{{url('/login')}}">Forgot password?</a>
                        </div>
                    </div>

                    <!-- Sign in button -->
                    <button id="loginBtnID" name="submit" type="submit" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0">Login</button>

                 </form>
                <!-- Form -->

                </div>

            </div>
            <!-- Material form login -->
        </div>
        <div class="col-3"></div>
    </div>

</div>

@endsection



@section('jsScript')

<script type="text/javascript" >

    $('.adminLoginFrom').on('submit',function(event) {
        event.preventDefault();
        let formData = $(this).serializeArray();

        let username = formData[0]['value'];
        let password = formData[1]['value'];

        let url ="/onlogin";

        axios.post(url,{username:username, password:password})
        .then(function (res) {
            if (res.status == 200 && res.data == 1) {
                window.location.href = "/";
            }else{
                $('#loginBtnID').html("Login Fail");
                $('#loginBtnID').addClass("bg-danger");
                setTimeout(() => {
                    $('#loginBtnID').html("Login");
                    $('#loginBtnID').removeClass("bg-danger");
                }, 3000);
            }
        }).catch(function(error){
            $('#loginBtnID').html("Login Fail");
                $('#loginBtnID').addClass("bg-danger");
                setTimeout(() => {
                    $('#loginBtnID').html("Login");
                    $('#loginBtnID').removeClass("bg-danger");
                }, 3000);
        })
    })

</script>

@endsection




