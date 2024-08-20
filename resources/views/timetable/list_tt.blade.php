
@extends('main')
@section('content')  
<!-- page content -->

            <div class="row">
              <div class="col-md-8 col-sm-8  ">
                    <h2>Time Tables</h2>             
             </div>
                
                     
                <div class="col-md-8 col-sm-8 ">
                <div class="buttons">
                                            <!-- Standard button -->
    <a  id="printbtn" class="btn btn-primary btn-md fa fa-plus" href="{{route('timet.create')}}">Create</a> 
              
                <style type="text/css">
                       @media print {

                              tbody{
                                    font-size:30px!important;
                                  }

                                  #printbtn,.top_nav,.nav_menu{
                                      display:none!important;
                                  }

                              }
                </style>
                </div>
                </div>
                  

                    <div class="table-responsive">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                          <tr class="headings">                          
                            
                        
                            <th class="column-title">Class</th>
                            <th id="printbtn" class="column-title"> </th>
                          
    
                          </tr>
                        </thead>

                        <tbody>

                        @foreach($data as $i)
                          <tr class="even pointer">            
                        
                            <td class=" ">{{{$i->clss}}}</td>
                            <td id="" class="">
                              <a href="{{ route('timet.edit', $i->clss) }}" class="btn btn-info btn-sm">
                                  <i class="fa fa-print"></i> Print
                              </a>

                              <form class="change" action="{{ route('timet.destroy', $i->clss) }}" method="POST" style="display:inline;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger btn-sm show_confirm">
                                      <i class="fa fa-trash"></i> Delete
                                  </button>
    </form>

                            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
                  <script type="text/javascript">
                  
                      $('.show_confirm').click(function(event) {
                            var form =  $(this).closest("form");
                            var name = $(this).data("name");
                            event.preventDefault();
                            swal({
                                title: `Delete Timetable`,
                                text: "This action deletes selected timetable",
                                icon: "warning",
                                buttons: true,
                                dangerMode: true,
                            })

                            .then((willDelete) => {
                              if (willDelete) {
                                form.submit();
                           swal( {title: 'Successful',
                                  text:'Timetable has been deleted',
                                  icon: 'success',
                                  timer: 5000,
                                  buttons: false,
                           });
                              }
                            });
                        });
                    
                  </script>
                            </td>
                          </tr>
                          @endforeach
                          
                         
                        </tbody>
                      </table>

                  </div>
                  </div>
        <!-- /page content -->
       
   @endsection
