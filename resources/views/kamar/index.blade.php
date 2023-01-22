  <!-- Navbar -->
  @includeIf('layouts.navbar')
  <!-- /.navbar -->

  <!-- Section -->
  @includeIf('layouts.section1')
  <!-- End Section-->
<br><br>

<div class="container">
@foreach($kamar as $p)
  <h1> {{$p->type_label}}</h1>
  <h4>Fasilitas:</h4>

  <?php
$txt = $p->fasilitas;
 $test = str_replace(',', '<br>', $txt);
echo '<h5>' . $test  . '</h5>';
?>
<br><br>
<!--<img src="{{$p->type_gambar}}" class="img-fluid" alt="..."> -->
<img src="https://blogger.googleusercontent.com/img/a/AVvXsEhpgJVbd_q6MNPr9AMth_Gonwz8o07SIFcP-UJbVaFG09cNT7GZRM93GE4fIQDrOgU5uuasK6vy7likqPPqWItGw4tzoP0ippR2nZm_tJATzIYutUr0YL9LwQzExS5ADhpQjO7Ms7VGav3M5l-1wVNr-Wd_6EbLWA1rKkSoxUdAL81zpW833BehS-Vm2g=s4032" style= "height: 550px;"class="img-fluid" alt="...">
@endforeach