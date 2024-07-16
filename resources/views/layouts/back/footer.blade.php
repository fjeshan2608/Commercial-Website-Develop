 <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('storage/back/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('storage/back/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('storage/back/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('storage/back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('storage/back/assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('storage/back/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

      <!-- Toaster & Sweetalert Style -->
      <script src="{{asset('storage/back/assets/js/toastr.min.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('storage/back/assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('storage/back/assets/js/dashboards-analytics.js')}}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>
      @if(Session::has('message'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                 toastr.info("{{ Session::get('message') }}");
                 break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
      @endif
    </script>

    <script>
              // ajax req
              $("#category_id").change(function(){
            var id = $(this).val();
           
            $.ajax({
                url: '{{url("/get-subcategory/")}}/'+id,
                type:'get',
                success:function(data){
                    $('select[name="subcategory_id"]').empty();
                    $.each(data,function(key,data){
                        $('select[name="subcategory_id"]').append('<option value="'+ data.id+'">'+data.subcategory_name+'</option>');
                    })
                }
            })
        })
    </script>
  </body>
</html>