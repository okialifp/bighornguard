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
                    <a href="{{route('tambahnews')}}"><button class="btn btn-primary" type="button">Tambah</button></a>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Picutres</th>
                          <th>Judul</th>  
                          <th>Isi</th>
                          <th>Tanggal upload</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($news as $row => $data)
                        <tr>
                          <th scope="row">{{$loop->index+1}}</th>
                          <td><img width="150px" src="{{ URL::to('data_file/'.$data->pictures) }}"></td></td>
                          <td>{{$data->title??''}}</td>
                          <td>{{$data->description}}</td>
                          <td>{{$data->created_at}}</td>
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