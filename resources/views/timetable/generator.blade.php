
@extends('main')
@section('content')  
<!-- page content -->

            <div class="row">
              <div class="col-md-8 col-sm-8  ">
           
            <h2>Generate timetable</h2>
                 
            </div>
                 
           <form action="{{route('timet.store')}}" method="post">
           @csrf
       
                     <div class="table-responsive">
                     <table class="table table-bordered">
                      <thead>
                        <tr>
                         <select name="clss" id="" class="form-control">
                         <option value="">--Select class--</option>
                           
                               @foreach($classes as $i)
                          <option value="{{$i->name}}">{{$i->name}}</option>
                               @endforeach
                         </select>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <th scope="row">Time</th>
                          
                        @foreach($times as $t)
                        <td>{{$t->duration}}</td>
                        @endforeach
                        </tr>
                        <tr>
                          <th scope="row">Monday</th>
                          <td><input type="text" name="r1c1" id="sub1" class="form-control ttext typeahead" value="{{old('r1c1')}}"></td>
                          <td><input type="text" name="r1c2" id="sub2" class="form-control ttext typeahead" value="{{old('r1c2')}}"></td>
                          <td class="break">B</td>
                          <td><input type="text" name="r1c4" id="sub3" class="form-control ttext typeahead" value="{{old('r1c4')}}"></td>
                          <td><input type="text" name="r1c5" id="sub4"class="form-control ttext typeahead" value="{{old('r1c5')}}"></td>
                          <td class="break">L</td>
                          <td><input type="text" name="r1c7" id="sub5" class="form-control ttext typeahead" value="{{old('r1c7')}}"></td>
                        </tr>
                        <tr>
                          <th scope="row">Tuesday</th>
                          <td><input type="text" name="r2c1" id="sub6" class="form-control ttext typeahead" value="{{old('r2c1')}}"></td>
                          <td><input type="text" name="r2c2" id="sub7" class="form-control ttext typeahead" value="{{old('r2c2')}}"></td>
                          <td class="break">R</td>
                          <td><input type="text" name="r2c4" id="sub8" class="form-control ttext typeahead" value="{{old('r2c4')}}"></td>
                          <td><input type="text" name="r2c5" id="sub9"class="form-control ttext typeahead" value="{{old('r2c5')}}"></td>
                          <td class="break">U</td>
                          <td><input type="text" name="r2c7" id="sub10" class="form-control ttext typeahead" value="{{old('r2c7')}}"></td>
                        </tr>
                        <tr>
                          <th scope="row">Wednesday</th>
                          <td><input type="text" name="r3c1" id="sub11" class="form-control ttext typeahead" value="{{old('r3c1')}}"></td>
                          <td><input type="text" name="r3c2" id="sub12" class="form-control ttext typeahead" value="{{old('r3c2')}}"></td>
                          <td class="break">E</td>
                          <td><input type="text" name="r3c4" id="sub13" class="form-control ttext typeahead" value="{{old('r3c4')}}"></td>
                          <td><input type="text" name="r3c5" id="sub14"class="form-control ttext typeahead" value="{{old('r3c5')}}"></td>
                          <td class="break">N</td>
                          <td><input type="text" name="r3c7" id="sub15" class="form-control ttext typeahead" value="{{old('r3c7')}}"></td>
                        </tr>
                        <tr>
                          <th scope="row">Thursday</th>
                          <td><input type="text" name="r4c1" id="sub16" class="form-control ttext typeahead" value="{{old('r4c1')}}"></td>
                          <td><input type="text" name="r4c2" id="sub17" class="form-control ttext typeahead" value="{{old('r4c2')}}"></td>
                          <td class="break">A</td>
                          <td><input type="text" name="r4c4" id="sub18" class="form-control ttext typeahead" value="{{old('r4c4')}}"></td>
                          <td><input type="text" name="r4c5" id="sub19"class="form-control ttext typeahead" value="{{old('r4c5')}}"></td>
                          <td class="break">C</td>
                          <td><input type="text" name="r4c7" id="sub20" class="form-control ttext typeahead" value="{{old('r4c7')}}"></td>
                        </tr>
                        <tr>
                          <th scope="row">Friday</th>
                          <td><input type="text" name="r5c1" id="sub21" class="form-control ttext typeahead" value="{{old('r5c1')}}"></td>
                          <td><input type="text" name="r5c2" id="sub22" class="form-control ttext typeahead" value="{{old('r5c2')}}"></td>
                          <td class="break">K</td>
                          <td><input type="text" name="r5c4" id="sub23" class="form-control ttext typeahead" value="{{old('r5c4')}}"></td>
                          <td><input type="text" name="r5c5" id="sub24"class="form-control ttext typeahead" value="{{old('r5c5')}}"></td>
                          <td class="break">H</td>
                          <td><input type="text" name="r5c7" id="sub25" class="form-control ttext typeahead" value="{{old('r5c7')}}"></td>
                        </tr>
                      </tbody>
                    </table>

        @include('timetable.ac')
                    
        <div class="ln_solid"></div>
        <div class="item form-group">
          <div class="col-md-6 col-sm-6 offset-md-3">
            <button id="printbtn" class="btn btn-primary" type="button">Cancel</button>
            <button id="printbtn" class="btn btn-primary" type="reset">Reset</button>
           <button id="printbtn" type="submit"  class="btn btn-success">Submit</button>
          </div>
        </div>
            
          </div>
        </div>
        </form>


   @endsection
