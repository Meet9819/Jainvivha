$().ready(function() {
    $( "#country" ).change(function() {
    	var country = $( "#country" ).val();
    	$("#country option[value='0']").remove();

       	$.ajax({ url: "SearchRegion.php",
         data: {country: country},
         type: 'get',
         async: false,
         success:
         function(msg) {
         	$('#region').find('option').remove().end();
         	var region = jQuery.parseJSON(msg);
         	for(var i = 0 ; i < region.length ; i++)
         	{
         		$('#region').append('<option value="'+region[i].id+'">'+region[i].title+'</option>');
         	}
       	 }
        });
    	$('#city').find('option').remove().end();
    	$('#city').append('<option value="0">Please choose</option>');

	});

	$( "#region" ).change(function() {
    	var region = $( "#region" ).val();
        $.ajax({ url: "SearchCity.php",
         data: {city: region},
         type: 'get',
         async: false,
         success:
         function(msg) {
         	$('#city').find('option').remove().end();
         	var city = jQuery.parseJSON(msg);
         	for(var i = 0 ; i < city.length ; i++)
         	{
         		$('#city').append('<option value="'+city[i].id+'">'+city[i].city+'</option>');
         	}
       	 }
        });
	});	
});



$().ready(function() {
    $( "#partnercountry" ).change(function() {
        var country = $( "#partnercountry" ).val();
        $("#partnercountry option[value='0']").remove();

        $.ajax({ url: "SearchRegion.php",
         data: {country: country},
         type: 'get',
         async: false,
         success:
         function(msg) {
            $('#partnerstate').find('option').remove().end();
            var region = jQuery.parseJSON(msg);
            for(var i = 0 ; i < region.length ; i++)
            {
                $('#partnerstate').append('<option value="'+region[i].id+'">'+region[i].title+'</option>');
            }
         }
        });
        $('#partnercity').find('option').remove().end();
        $('#partnercity').append('<option value="0">Please choose</option>');

    });

    $( "#partnerstate" ).change(function() {
        var region = $( "#partnerstate" ).val();
        $.ajax({ url: "SearchCity.php",
         data: {city: region},
         type: 'get',
         async: false,
         success:
         function(msg) {
            $('#partnercity').find('option').remove().end();
            var city = jQuery.parseJSON(msg);
            for(var i = 0 ; i < city.length ; i++)
            {
                $('#partnercity').append('<option value="'+city[i].id+'">'+city[i].city+'</option>');
            }
         }
        });
    }); 
});











$().ready(function() {
    $( "#educationid" ).change(function() {
        var country = $( "#educationid" ).val();
        $("#educationid option[value='0']").remove();

        $.ajax({ url: "Searchsubeducation.php",
         data: {country: country},
         type: 'get',
         async: false,
         success:
         function(msg) {
            $('#subeducationid').find('option').remove().end();
            var region = jQuery.parseJSON(msg);
            for(var i = 0 ; i < region.length ; i++)
            {
                $('#subeducationid').append('<option value="'+region[i].id+'">'+region[i].title+'</option>');
            }
         }
        });
      

    });

 

});
