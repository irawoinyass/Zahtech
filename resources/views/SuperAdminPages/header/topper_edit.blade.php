@extends('SuperAdminLayouts.app')
@section('content')

   	 	

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Header</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                      
                              <li class="breadcrumb-item active"><a href="{{route('superadmin.header.topper')}}">Topper</a></li>
                              <li class="breadcrumb-item active">Edit</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->







  <div class="row">
  <div class="col-lg-12">
      <div class="card shadow">
          <div class="card-body">
          
            <form id="update_topper" method="POST" enctype="multipart/form-data">
 
 {{ csrf_field() }}

<div class="form-group">
          <label style="">Favicon</label>
           <input type="file" class="form-control" id="icon" name="icon">
           <img src="/assets/images/{{$topper->icon}}">
         <small style=" font-weight: 700;"></small>
        </div>

 

<div class="form-group">
          <label style="">Company Name</label>
           <input type="text" class="form-control" id="company_name" name="company_name" value="{{$topper->company_name}}">
         <small style=" font-weight: 700;"></small>
        </div>


    <div class="form-group">
          <label style=""> Company Desc</label>
        
           <textarea class="form-control" id="company_desc" name="company_desc">{{$topper->company_desc}}</textarea>
         <small style=" font-weight: 700;"></small>
        </div>

       

     
    <input type="hidden" name="id" id="id" value="{{$topper->topper_id}}">


         
    

   <div class="loader"></div>
 <button class="btn btn-warning" type="submit">Update</button>




      </form>
    
              
              
              </div>
               <!-- end card -->
                            </div>
                        </div>
                        <!-- end row -->






                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
             
            </div>
            <!-- end main content-->




<script src="{{asset('js/app.js')}}"></script>


    

<script type="text/javascript">
	
	$(document).ready(function(){

var _tokens = $('input[name=_token]').val();


function validateEmail(email) 
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }






    $('#update_topper').on('submit', function(e){



e.preventDefault();
 var data = $(this).serialize();
      var url = $(this).attr('action');
      var post = $(this).attr('method');

      var company_name = $('#company_name').val();
      var company_desc = $('#company_desc').val();
      var icon = $('#icon').val();
      

      if (company_name == '') {
swal("Company Name!", "Field is Required", "error");
      }else if (company_desc == '') {
swal("Company Desc!", "Field is Required", "error");
      }else{



      if (confirm("Are you sure")) {


$('.overlays').show();


       $.ajax({
    url:"{{route('superadmin.header.topper.update')}}",
    method:"POST",
    data:new FormData(this),
    dataType:'JSON',
    contentType:false,
    cache:false,
    processData:false,
    success:function(data){


console.log(data);

if (data == 'success') {


    swal({
    title: "Success!",
    text: "updated successfully",
    icon: "success",
    timer: 3000,
    showConfirmButton: false
  })

window.location.reload();
  
}else{


    swal({
    title: "Oppss!",
    text: data,
    icon: "error",
    timer: 3000,
    showConfirmButton: false
  })


  $('.overlays').hide();
}


    }


  });

         

}

      
   


      }




  });









	});
</script>            







@endsection 