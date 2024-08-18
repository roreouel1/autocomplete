<html><body>

<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
           
             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Generate timetable</h2>
                    <ul id="printbtn"  class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  
                  <div class="col-md-8 col-sm-8 ">
                <div  id="printbtn"  class="buttons">
                                            <!-- Standard button -->
                <a  class="btn btn-primary btn-lg fa fa-user-plus" href="{{route('student.create')}}"></a>
                <a id="printbtn"  class="btn btn-success btn-sm" onclick="window.print();"><i class="fa fa-print"></i>Print</a>

              
                </div>
                </div>
                  
           <form action="{{route('timet.store')}}" method="post">
           @csrf
       
                     <!-- <div class="table-responsive"> -->
                     <table class="table table-bordered">
                      <thead>
                        <tr>
                         <select name="clss" id="" class="form-control">
                         <option value="">--Select class--</option>
                          @foreach($classes as $i)
                          <option value="{{$i->name .' '.$i->tag}}">{{$i->name .' '.$i->tag}}</option>
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
                          <!-- <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td> -->
                        </tr>
                        <tr>
                          <th scope="row">Monday</th>
                          <td><input type="text" name="r1c1" id="sub1" class="form-control ttext typeahead" value="{{old('r1c1')}}"></td>
                          <td><input type="text" name="r1c2" id="sub2" class="form-control ttext typeahead" value="{{old('r1c2')}}"></td>
                          <td class="break">B</td>
                          <td><input type="text" name="r1c4" id="sub3" class="form-control ttext typeahead" value="{{old('r1c1')}}"></td>
                          <td><input type="text" name="r1c5" id="sub4"class="form-control ttext typeahead" value="{{old('r1c1')}}"></td>
                          <td class="break">L</td>
                          <td><input type="text" name="r1c7" id="sub5" class="form-control ttext typeahead" value="{{old('r1c1')}}"></td>
                        </tr>
                        <tr>
                          <th scope="row">Tuesday</th>
                          <td><input type="text" name="r2c1" id="sub6" class="form-control ttext typeahead" value="{{old('r1c1')}}"></td>
                          <td><input type="text" name="r2c2" id="sub7" class="form-control ttext typeahead" value="{{old('r1c1')}}"></td>
                          <td class="break">R</td>
                          <td><input type="text" name="r2c4" id="sub8" class="form-control ttext typeahead" value="{{old('r1c1')}}"></td>
                          <td><input type="text" name="r2c5" id="sub9"class="form-control ttext typeahead" value="{{old('r1c1')}}"></td>
                          <td class="break">U</td>
                          <td><input type="text" name="r2c7" id="sub10" class="form-control ttext typeahead" value="{{old('r1c1')}}"></td>
                        </tr>
                        <tr>
                          <th scope="row">Wednesday</th>
                          <td><input type="text" name="r3c1" id="sub11" class="form-control ttext typeahead"></td>
                          <td><input type="text" name="r3c2" id="sub12" class="form-control ttext typeahead"></td>
                          <td class="break">E</td>
                          <td><input type="text" name="r3c4" id="sub13" class="form-control ttext typeahead"></td>
                          <td><input type="text" name="r3c5" id="sub14"class="form-control ttext typeahead"></td>
                          <td class="break">N</td>
                          <td><input type="text" name="r3c7" id="sub15" class="form-control ttext typeahead"></td>
                        </tr>
                        <tr>
                          <th scope="row">Thursday</th>
                          <td><input type="text" name="r4c1" id="sub16" class="form-control ttext typeahead"></td>
                          <td><input type="text" name="r4c2" id="sub17" class="form-control ttext typeahead"></td>
                          <td class="break">A</td>
                          <td><input type="text" name="r4c4" id="sub18" class="form-control ttext typeahead"></td>
                          <td><input type="text" name="r4c5" id="sub19"class="form-control ttext typeahead"></td>
                          <td class="break">C</td>
                          <td><input type="text" name="r4c7" id="sub20" class="form-control ttext typeahead"></td>
                        </tr>
                        <tr>
                          <th scope="row">Friday</th>
                          <td><input type="text" name="r5c1" id="sub21" class="form-control ttext typeahead"></td>
                          <td><input type="text" name="r5c2" id="sub22" class="form-control ttext typeahead"></td>
                          <td class="break">K</td>
                          <td><input type="text" name="r5c4" id="sub23" class="form-control ttext typeahead"></td>
                          <td><input type="text" name="r5c5" id="sub24"class="form-control ttext typeahead"></td>
                          <td class="break">H</td>
                          <td><input type="text" name="r5c7" id="sub25" class="form-control ttext typeahead"></td>
                        </tr>
                      </tbody>
                    </table>


        @include('acad.timetable.ac')
                    
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
                    </form>
                    
                      <!-- <style type="text/css">
                        @media print {
                            #printbtn{
                                display :  none;
                            }

                        }
                     </style> -->


                  <!-- </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        </body></html>
