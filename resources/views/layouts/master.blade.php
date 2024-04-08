<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>
<body>
    <div class="container-scroller">
        @yield('main')
    </div>
    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>

     <script>
    $(document).ready( function(){
       /*var dropItemList = document.querySelectorAll('.stat-item');
       dropItemList.forEach(item =>{
            item.addEventListener('click',function(){
                console.log("test");
            })
        });*/
  const statusItems = document.querySelectorAll('.stat-item');
    statusItems.forEach(item => {
            item.addEventListener('click', function() {
            const newStatus = item.getAttribute('data-item');
            console.log(newStatus);
             /* statusButton.textContent = newStatus;
            updateStatusInDatabase(newStatus);
            // Remove existing color classes
            statusButton.classList.remove('btn-success', 'btn-danger');
            // Add the appropriate color class based on the status
            if (newStatus === 'ACTIVE') {
                statusButton.classList.add('btn-success');
            } else {
                statusButton.classList.add('btn-danger');
            } */
        });
    });       
    }
    ) 
    </script>
    <script src="{{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('js/todolist.js') }}"></script>
   
</body>

</html>
