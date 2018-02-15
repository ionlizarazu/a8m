<div id="partners" class="partners"></div>

<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js')}}"></script> 

<script>
    var route = './babesleak';
    var token = $("input[name=_token]").val();    
    $.ajax({
        url:route,
        headers:{'X-CSRF-TOKEN':token},
        type:'get',
        datatype: 'json',
        success: function(data) {
          //<img src="{{ asset("storage/partners/2013_Aitz_Garbi.JPG") }}" alt="Picxa" title="Picxa"/></a>
          for(var i=0;i<data.length;i++){
            jQuery('<img/>',{
              src:"storage/partners/"+data[i].basename,
              alt: data[i].basename
              }).appendTo('#partners');         
          }
        },
        error: function(data) {;            
        }
    });
</script>
<!-- footer --> 