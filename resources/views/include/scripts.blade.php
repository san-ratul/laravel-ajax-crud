<script>
  $(document).ready(function(){
    $.get('{{url("products")}}', function(data){
      $("#product-list").empty().append(data);
    });

    $("#product-list").on('click',".add-product-btn",function(e){
      $.get('{{url("products/create")}}', function(data){
        $("#add-product-modal").empty().append(data);
        $("#create-add-product").modal('show');
      });        
    });
    $('#add-product-modal').on('submit',"#create-product-form",function(e){
      e.preventDefault();
      var formData = $(this).serialize();
      var url = '{{url("/products")}}';
      $.ajax({
        url: url,
        method: "POST",
        data: formData,
        success: function(data){
          $("#product-list").empty().append(data);
          $("#create-add-product").modal('hide');
        },
        error: function(response) {
          var errors = response.responseJSON;
          $('.errors').empty();
          $.each(errors.errors, function(elem, index){
            $.each(index,function(ele,error){
              $('.errors').append('<li>'+error+'</li>')
            })
          });
          $('.errors').show();
        }
      })
    });

    $("#product-list").on('click',".action",function(e){
      var id = $(this).data('target');
      var url = '{{url('products')}}' + '/' + id + '/edit';

      $.get(url, function(data){
        $("#add-product-modal").empty().append(data);
        $("#edit-product").modal('show');
      }); 
    });

    $('#add-product-modal').on('submit',"#edit-product-form",function(e){
      e.preventDefault();
      var id = $(this).data('target');
      var url = '{{url('products')}}' + '/' + id;
      var formData = $(this).serialize();
      $.ajax({
        url: url,
        method: 'POST',
        data: formData,
        success: function(data){
          $("#product-list").empty().append(data);
          $("#edit-product").modal('hide');
        }
      });
    });

    $('#add-product-modal').on('click',"#delete-product-btn",function(e){
      e.preventDefault();
      var id = $(this).data('target');
      var url = '{{url('products')}}' + '/' + id;
      var formData = $('#delete-product-form').serialize();
      $.ajax({
        url:url,
        method: 'POST',
        data: formData,
        success: function(data){
          $("#product-list").empty().append(data);
          $("#edit-product").modal('hide');
        }
      })
    });
  });
</script>