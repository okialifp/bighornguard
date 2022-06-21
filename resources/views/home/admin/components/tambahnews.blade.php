@extends('home.admin.index')
@section('mainadmin')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>News <small>Upload News Updated</small></h3>
              </div>

              
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel News <small>Insert New Data News</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
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
                    <form action="{{route('inipostnews')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                         <div class="form-group">
                             <label for="exampleInputPassword1">Title News</label>
                             <input type="text" class="form-control" id="exampleInputPassword1"  name="title">
                         </div>
                         <div class="mb-3">
                            <label for="formFile" class="form-label">Pictures News</label>
                            <input class="form-control" type="file" id="formFile" name="pictures">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                        </div>
                       <input type="submit" value="Upload" class="btn btn-primary">
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            PT AEON RISET TEKNOLOGI - Copyright <a href="https://aeon-rt.com">PT AEON RISET TEKNOLOGI</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
@endsection