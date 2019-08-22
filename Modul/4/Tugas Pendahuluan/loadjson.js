$.ajax({
    url         : "datatweet.json",//lokasi file json
    type        : "GET",
    dataType    : "json",//format dokumen
    data        : {get_param : 'value'},
    success     : function(data){
        //menghitung jumlah data
        jmlData = data.length;
        //variabel untuk menampung data yang akan digenerasikan
        buatData = "";
        //looping untuk menampilkan data
        for(a = 0; a < jmlData; a++){
            
            //mencetak baris baru
            buatData +=
            "<div class='media'>"
                        +"<a class='media-left' href='#fake'>"
                            +"<img alt='' class='media-object img-rounded' src='"+data[a]["user"]["url_image"]+"' width='64' height='64'>"
                        +"</a>"
                        +"<div class='media-body'>"
                            +"<h4 class='media-heading'>" + data[a]["user"]["name"] + "</h4>"
                            +"<p>" + data[a]["text"] + "</p>"
                                +"<ul class='nav nav-pills nav-pills-custom'>"
                                    +"<li><a href='#'><span class='glyphicon glyphicon-share-alt'></span></a></li>"
                                    +"<li><a href='#'><span class='glyphicon glyphicon-retweet'></span><span> "+data[a]["retweet_count"]+"</span></a></li>"
                                    +"<li><a href='#'><span class='glyphicon glyphicon-star'></span><span> "+data[a]["favourite_count"]+"</span></a></li>"
                                    +"<li><a href='#'><span class='glyphicon glyphicon-option-horizontal'></span></a></li>"
                                +"</ul>"
                        +"</div>"
            +"</div>" ;
        }
        document.getElementsByClassName("tweet")[0].innerHTML = buatData;
    }
});
        $(document).ready(function() {
            $.getJSON('profile.json', function(hasil){
                $('#twt').html('<h5><small>TWEETS</small>');
                $('#twt').append('<a href="">'+hasil.tweet_count+'</a></h5>');
                $('#flwi').html('<h5><small>FOLLOWING</small>');
                $('#flwi').append('<a href="">'+hasil.friends_count+'</a></h5>');
                $('#flwrs').html('<h5><small>FOLLOWERS</small>');
                $('#flwrs').append('<a href="">'+hasil.followers_count+'</a></h5>');
                $('#fotopf').html('<a href="#"><img class="img-responsive" alt="" src="'+hasil.url_image+'"></a>');
                $('#fotosml').html('<img alt="" class="media-object img-rounded" src="'+hasil.url_image+'" height="35" width="35">');
            });
        });
