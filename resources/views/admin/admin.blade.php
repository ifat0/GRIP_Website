
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

  </head>
  <body>
        @include('admin.padding')
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        @include('admin.body')
        @include('admin.script')
</html>
