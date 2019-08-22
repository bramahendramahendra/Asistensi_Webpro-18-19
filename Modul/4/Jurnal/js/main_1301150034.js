$.getJSON( "js/data_1301150034.json", function( data ) {
    $("#webtitle").text(data.title);
    $(".nama_1301150034").text(data.bio[0].nama);
    $(".job_1301150034").text(data.bio[0].job);
    $("#id_1301150034").text(data.bio[0].nim);
    $("#profile_1301150034").text(data.bio[0].profile);
    $("#birth_1301150034").text(data.bio[0].birth);
    $("#address_1301150034").text(data.bio[0].address);
    $("#phone_1301150034").text(data.bio[0].phone);
    $("#phone_1301150034").attr("href","tel:"+data.bio[0].phone);
    $('#email_1301150034').text(data.bio[0].email);
    $('#email_1301150034').attr("href","mailto:"+data.bio[0].email);
    $("#twitter_1301150034").attr("href",data.socmed[0].twitter);
    $("#ig_1301150034").attr("href",data.socmed[1].ig);
    $(".avatar_1301150034").attr("src",data.prof_pict);
});

$(document).ready(function(){
    var element = '';
    var edu = '';
    $.ajax({
        type:"GET",
        url:"js/data_1301150034.json",
        success: function(result){
            console.log(result.skills[0].name);
            // var skills = $("#mySkills_1301150034");
            for(var i in result.skills){
                element +=
                "<span class='elementor-title'>"+result.skills[i].name+"</span>"+
                "<div class='elementor-progress-wrapper' role='progressbar' aria-valuemin='0' aria-valuemax='100' aria-valuenow='90' aria-valuetext=''>"+
                    "<div class='elementor-progress-bar' data-max='"+result.skills[i].percent+"'>"+
                        "<span class='elementor-progress-text'></span>"+
                        "<span class='elementor-progress-percentage'>"+result.skills[i].percent+"%</span>"+
                    "</div>"+
                "</div>"
            }
    
            $("#mySkills_1301150034").append(element);
            
            console.log(result.education);
            for(var i in result.education){
                edu +=
                "<div class='sc_supertitle_columns_wrap sc_item_columns trx_addons_columns_wrap columns_padding_bottom sc_supertitle_icon_empty_column'>"+
                    "<span class='sc_supertitle_no_icon trx_addons_inline_662132092'></span>"+
                    "<div class='sc_supertitle_left_column trx_addons_column-8_12'>"+
                        "<div class='sc_supertitle_icon_wrap'>"+
                            "<div class='sc_supertitle_media_block'></div>"+
                        "</div>"+
                        "<h6 class='sc_supertitle_text'>"+result.education[i].name+"</h6>"+
                        // "<p class='sc_supertitle_text'>Finances</p>"+
                    "</div>"+
                    "<div class='sc_supertitle_right_column trx_addons_column-4_12'>"+
                        "<p class='sc_supertitle_text'>"+result.education[i].start_year+" - "+result.education[i].end_year+"</p>"+
                    "</div>"+
                "</div>"
            }
            $("#edu_1301150034").append(edu);
        }
    })
})