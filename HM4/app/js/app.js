jQuery(function($) {
    $('.searchBtn').click(() => {
        $("div.content").empty();
        let searchTerm = $('.searchTxt').val();
        let url = "https://en.wikipedia.org/w/api.php?action=opensearch&search="+ searchTerm +"&format=json&callback=?";
        
        $.ajax({
            type: "GET",
            url: url,
            async: false,
            data: "data",
            dataType: "json",
        	success: (data, status, jqXHR) => {
        		console.log(data);
        		$('.content').html();
        		for(let i = 0;i < data[1].length; i++) {
                    $('.content').prepend("<div><div class='content-items'><a href="+data[3][i]+"><h2>" + data[1][i]+ "</h2>" + "<p>" + data[2][i] + "</p></a></div></div>");
                }
                if ($('.content').html() == '') {
                    $('.errorBox').css({'display': 'block'});
                }
                else {
                    $('.errorBox').css({'display': 'none'});
                }
                
            },
            error : (errorMsg) => {
                alert('Error, wiki API doesnt work');
            }
        });
    });
    $('.searchTxt').keypress((e) => { 
        if(e.which == 13) {
            $('.searchBtn').click();
        }
    });
});