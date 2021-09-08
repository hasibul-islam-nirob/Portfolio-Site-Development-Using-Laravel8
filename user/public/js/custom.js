// Owl Carousel Start..................



$(document).ready(function() {
    var one = $("#one");
    var two = $("#two");

    $('#customNextBtn').click(function() {
        one.trigger('next.owl.carousel');
    })
    $('#customPrevBtn').click(function() {
        one.trigger('prev.owl.carousel');
    })
    one.owlCarousel({
        autoplay:true,
        loop:true,
        dot:true,
        autoplayHoverPause:true,
        autoplaySpeed:100,
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });

    two.owlCarousel({
        autoplay:true,
        loop:true,
        dot:true,
        autoplayHoverPause:true,
        autoplaySpeed:100,
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

});


// Owl Carousel End..................






$('#sendMSG').click(function (){
    var name = $('#name').val();
    var mobile = $('#mobile').val();
    var email = $('#email').val();
    var msg = $('#msg').val();
    var valid = /\S+@\S+\.\S+/;
    if (name.length == 0){

        $('#sendMSG').html("Please Enter Your Name");
        setTimeout(function (){
            $('#sendMSG').html("Send");
        },1000);

    }else if (mobile.length == 0){

        $('#sendMSG').html("Please Enter Your Mobile No");
        setTimeout(function (){
            $('#sendMSG').html("Send");
        },1000);

    }else if (!valid.test(email) ){

        $('#sendMSG').html("E-Mail Not Valid");
        setTimeout(function (){
            $('#sendMSG').html("Send");
        },1000);

    }else if (msg.length == 0){
        $('#sendMSG').html("Write Your Massage");
        setTimeout(function (){
            $('#sendMSG').html("Send");
        },1000);
    }else{

        axios.post('/sendMassage',{
            name:name,
            mobile:mobile,
            email:email,
            massage:msg
        })
            .then(function (res){
                if (res.status == 200 && res.data == 1){
                    $('#sendMSG').html("Massage Send Success");

                    $('#name').val('');
                    $('#mobile').val('');
                    $('#email').val('');
                    $('#msg').val('');

                    setTimeout(function (){
                        $('#sendMSG').html("Send");
                    },1000);
                }else{
                    $('#sendMSG').html("Massage Send Fail");
                    setTimeout(function (){
                        $('#sendMSG').html("Send");
                    },1000);
                }
            }).catch(function (error){
            $('#sendMSG').html("Something Went Wrong");
            setTimeout(function (){
                $('#sendMSG').html("Send");
            },1000);
        })

    }



})
