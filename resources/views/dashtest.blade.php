<!DOCTYPE html>
<html lang="en">

<head>
 @include('dashincludes.head')
</head>
<body>
    @include('dashincludes.upgrade')
      <div class="container-scroller">
    @include('dashincludes.nav')
    @include('dashincludes.subnav')
    @include('dashincludes.settingpanel')
    @include('dashincludes.sidebar')
      <div class="main-panel">
      <div class="content-wrapper">
    @include('dashincludes.panel')
    @include('dashincludes.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
@include('dashincludes.js')
  
</body>

</html>

