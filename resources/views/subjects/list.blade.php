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
                    <h2>Add subjects</h2>
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
                <a  id="printbtn" class="btn btn-primary btn-lg fa fa-user-plus" href="{{route('subs.create')}}"></a>
                <a id="printbtn"  class="btn btn-success btn-sm" onclick="window.print();"><i class="fa fa-print"></i>Print</a>
                
                </div>
                <style type="text/css">
                        @media print {
                            #printbtn{
                                display :  none;
                            }

                        }
                </style>
                </div>
                  

                    <div class="table-responsive">
                    <table  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                          <tr class="headings">   
                            
              
                            <th class="column-title">Subject Code</th>  
                            <th class="column-title">Title</th> 
                            <th class="column-title"></th> 
                          
                        </thead>

                        <tbody>

                        @foreach($subs as $i)
                          <tr class="even pointer">   
                        
                            <td class=" ">{{{$i->code}}}</td>
                            <td class=" ">{{{$i->name}}}</td>
                            <td class=" ">
                           
                         <form class="change" action="{{ route('subs.destroy', $i->id) }}" method="POST">

                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="btn btn-danger btn-sm show_confirm"><i class="fa fa-trash-o"></i></button>
                            </form>

                            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
                  <script type="text/javascript">
                  
                      $('.show_confirm').click(function(event) {
                            var form =  $(this).closest("form");
                            var name = $(this).data("name");
                            event.preventDefault();
                            swal({
                                title: `Delete subject`,
                                text: "This action deletes selected subject from the list",
                                icon: "warning",
                                buttons: true,
                                dangerMode: true,
                            })

                            .then((willDelete) => {
                              if (willDelete) {
                                form.submit();
                           swal( {title: 'Successful',
                                  text: 'Subject has been deleted',
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
