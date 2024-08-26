@extends('main')
@section('content')
     
<!-- page content -->
<div class="right_col" role="main">
	<div class="">
	  
	  <div class="clearfix"></div>

	  <div class="row">
		<div class="col-lg-12 col-md-12  ">
		  <div class="x_panel">
			<div class="x_title">
				<h2>Form</h2>
			  
			  <div class="clearfix"></div>
			</div>
			<div class="x_content">
			<div class="col-12">
		  <div class="card">
			<div class="card-body">
		   

      <form  id="form" class="form-sample" method="POST" action="{{route('formData.store')}}">
        @csrf
       
          <div class="row">
            
          <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Name<span>*</span></label>
                <div class="col-sm-9">
                  <input type="text" name="name" id="name" class="form-control typeahead" value="{{old('name')}}"/>
                  @error('name')
                  <span class="mt-5 text-danger"> {{$message}}</span>
                  @enderror   
                </div>
              </div>
              </div>
            

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Personal ID</label>
                <div class="col-sm-9">
                  <input type="text" name="pid" id="pid" class="form-control" value="{{old('pid')}}" disabled/>
                </div>
              </div>
            </div>
            
           </div>

           
           <div class="row">
             
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">DOB</label>
                <div class="col-sm-9">
                  <input type="text" name="dob" id="dob" class="form-control typeahead" value="{{old('dob')}}"  disabled/>
       
                </div>
              </div>
              </div> 

              <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Age</label>
                <div class="col-sm-9">
                 <input type="text" id="age" name="age" class="form-control" value="{{old('age')}}" disabled/>
                </div>
              </div>
            </div>
      

          </div>

          <div class="row">

          <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Occupation</label>
            <div class="col-sm-9">
            <input type="text" name="oc" id="oc" class="form-control" value="{{old('oc')}}" disabled/>
            </div>
          </div>
          </div> 

          <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Location</label>
            <div class="col-sm-9">
            <input type="text" id="loc" name="loc" class="form-control" value="{{old('loc')}}" disabled/>
            </div>
          </div>
          </div>

          </div>


        <div class="ln_solid"></div>
        <div class="item form-group">
          <div class="col-md-6 col-sm-6 offset-md-3">

            <button id="printbtn" class="btn btn-primary" type="button">Cancel</button>
            <button id="printbtn" class="btn btn-primary" type="reset">Reset</button>
            <button id="printbtn" type="submit"  class="btn btn-success submit">Submit</button>
          </div>
        </div>
    

        </form>
    

        <!-- Autocomplete Jquery Ajax function -->
        <script type="text/javascript">

          // CSRF Token
          var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
          $(document).ready(function(){

            $( "#name" ).autocomplete({
              source: function( request, response ) {
                // Fetch data
                $.ajax({
                  url:"{{route('searchdata')}}",
                  type: 'post',
                  dataType: "json",
                  data: {
                    _token: CSRF_TOKEN,
                    search: request.term
                  },
                  success: function( data ) {
                    response( data );
                  }
                });
              },
              
              select: function (event, ui) {
                $('#name').val(ui.item.value);
                $('#pid').val(ui.item.pid)
                $('#dob').val(ui.item.dob)
                $('#age').val(ui.item.age)
                $('#oc').val(ui.item.oc)
                $('#loc').val(ui.item.loc)

                
                return false;
              }
            });

          });
          </script>

			</div>
		  </div>
		</div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  <!-- /page content -->

@endsection

