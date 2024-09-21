@extends('layouts.app')
@section('title', ' झोपडपट्टी पुनर्वसन प्राधिकरण (एसआरए)')
@section('content')

   <body id="fontSize">

         <div class="container">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Tracker</li>
               <li class="pull-right"><a href=""><i class="ri-printer-fill"></i></a></li>
            </ol>
         </div>
      </section>
      <section class="content_sec">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-xs-12">
                  <div class="content-div">
                     <h3 class="page_heading">Track Your Letter</h3>
                     <p class="text-justify">You Can Track your  Letter  Status with unique refrence number e.g. GEN/2017/1</p>
                     <div class="col-md-12 col-xs-12">
                        <div class="row">
                           <div class="row">
                              <form action="" method="post">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <!-- <label for="file_number">File name and Number:</label> -->
                                       <input type="text" class="form-control" name="file_number" placeholder="Enter your Letter UID Number" id="file_number">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <!-- <button type="button"  id="show" class="btn btn-primary" onclick="showDiv()">Submit</button> -->
                                    <button type="submit" name="submit">Submit</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="cleafix"></div>



      <script type="text/jscript">
         $(document).ready(function(){
             $("#hide").click(function(){
                 $("p").hide();
             });
             $("#show").click(function(){
                 $(".tabss").show();
             });
         });
      </script>
      <style>
         .error{
         color:red;
         text-align:left;
         font-weight:bold;
         }
      </style>
   </body>
</html>
@endsection
