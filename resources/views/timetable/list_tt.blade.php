<html><body>
	

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
           
             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Time Tables</h2>
                      <!-- <ul class="nav navbar-right panel_toolbox">
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
                    </ul> -->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     
                <div class="col-md-8 col-sm-8 ">
                <div class="buttons">
                                            <!-- Standard button -->
                <a id="printbtn" class="btn btn-primary btn-lg fa fa-user-plus" href="{{route('timet.create')}}"></a>
              
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
                            <td id="printbtn" class=" ">
                            
                                           
                          <a href="{{ route('timet.edit', $i->clss)}}" class="btn btn-info btn-sm"><i class="fa fa-print"></i>Print</a>

                           
                         <form class="change" action="{{ route('timet.destroy',$i->clss) }}" method="POST">

                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="btn btn-danger btn-sm show_confirm"><i class="fa fa-trash-o"></i>Delete</button>
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
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        </body></html>
