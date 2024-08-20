
@extends('main')
@section('content')  
<!-- page content -->


	  <div class="row">
		<div class="col-md-12 col-sm-12  ">
				<h2>Add subjects</h2>
			  <div class="clearfix"></div>
			</div>
	
			<div class="col-12">
		  <div class="card">
			<div class="card-body">
		   

		  <div class="buttons">
									  <!-- Standard button -->
							  <a  id="printbtn" class="btn btn-success btn-sm" href="{{route('subs.index')}}"><i class="fa fa-bars"></i>List</a>
							  </div>
						
      <form  id="form" class="form-sample" method="POST" action="{{route('subs.store')}}">
        @csrf
           
           <div class="row">
             
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Title<span>*</span></label>
                <div class="col-sm-9">
                  <input type="text" name="name" id="name" class="form-control typeahead" value="{{old('name')}}"/>
                  @error('name')
                  <span class="mt-5 text-danger">{{$message}}</span>
                  @enderror   
                </div>
              </div>
              </div> 

              <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Teacher</label>
                <div class="col-sm-9">
                  <input type="text" name="st" id="st" class="form-control" value="{{old('st')}}"/>
                  <!-- @error('name')
                  <span class="mt-5 text-danger"> {{$message}}</span>
                  @enderror    -->
                </div>
              </div>
              </div> 
      

          </div>

        <div class="ln_solid"></div>
        <div class="item form-group">
          <div class="col-md-6 col-sm-6 offset-md-3">

          <style type="text/css">
            @media print {
                #printbtn{
                    display :  none;
                }

                .hider{    
                 visibility:visible!important;

            }

          }

         </style>

            <button id="printbtn" class="btn btn-primary" type="button">Cancel</button>
            <button id="printbtn" class="btn btn-primary" type="reset">Reset</button>
            {{-- <button id="printbtn" type="submit" onclick="window.print();" class="btn btn-success">Submit</button> --}}
            <button id="printbtn" type="submit"  class="btn btn-success">Submit</button>
          </div>
        </div>
     
        {{-- @include('account.recs.sprint') --}}

        </form>

			


			</div>
		  </div>
      </div>
		

  <!-- /page content -->
@endsection


