<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': 'token-tokenan'
        }
      });
</script>




<script type="text/javascript">
    
    $(function(){
        $.ajax({
            url: 'http://127.0.0.1:8000/v2/api/user',
            success: function(response){
                console.log(response);
            },
            method: 'GET'
        });
    });
</script>
