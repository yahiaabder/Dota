


function form_filled(form){
    var bool
    form.find(".ws-player-form").each(function(index , player_form){
        bool = true
        $(player_form).find(":is(input,select,textarea)").each(function(i , e){

            if($(e).val().trim() == "")
            bool=false
            if(bool){
                $(player_form).find(".ws-player-form-heading").css({"background-color": "rgb(12, 150, 69)"})
            }
        })
    })

    if(bool){
        $(this).parents(".ws-player-form-content").siblings(".ws-player-form-heading").css({"background-color": "rgb(12, 150, 69)"})
    }
}


// Change language function 
function change_language(code){
    $.post(base_url+"/site/language/"+code , {} , function(data){
        data = JSON.parse(data)
        if(data["status"] == 1)
        location.reload()
    })
}
// Change language function 


$(document).ready(function(){

    form_filled($("#ws-register-form"))

    $(".ws-scroll-up").click(function(){
        window.scrollTo({top: 0, behavior: 'smooth'});
    })
    
    $(".ws-section-title").click(function(){
        $(this).siblings(".ws-section-collapse").toggle()
    })

    // $(".ws-wwa").css({height : $(".ws-wwa").outerHeight()-100})
    // $(".ws-wwa > div").css({height : $(".ws-wwa > div").outerHeight()-100})

    //   loading gallery page
    $('#animated-thumbnails-gallery').lightGallery();
    $("#animated-thumbnails-gallery").justifiedGallery({
      captions: false,
      lastRow: "hide",
      rowHeight: 180,
      margins: 25
    }).on("jg.complete", function () {
        window.lightGallery(document.getElementById("animated-thumbnails-gallery"), {
            autoplayFirstVideo: false,
            pager: false,
            galleryId: "Gallery",
            plugins: [lgZoom, lgThumbnail],
            mobileSettings: {
                controls: false,
                showCloseIcon: false,
                download: false,
                rotate: false
            }
        }
        );
    });





    $(".ws-player-form-content input , .ws-player-form-content select , .ws-player-form-content textarea").blur(function(){
        bool = true
        $(this).parents(".ws-player-form-content").find(":is(input,textarea,select)").each(function(index , element){
            if($(element).val().trim() == "")
            bool=false
        })

        if(bool){
            $(this).parents(".ws-player-form-content").siblings(".ws-player-form-heading").css({"background-color": "rgb(12, 150, 69)"})
        }
        else
        $(this).parents(".ws-player-form-content").siblings(".ws-player-form-heading").css({"background-color": "#343a40"})

    })



    $("#ws-register-form").submit(function(e){
        // e.preventDefault()

        data =$(this).serialize()
        console.log(data)
    })


    // Modal NS notification
    if($("#generalmodal").data("modalAutoshow")){
        $("#generalmodal").modal("show")
    }
    // Modal NS notification 
    
})