@extends('home.admin.index')
@section('mainadmin')
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Report <small>Lihat semua hasil report contact pada BHG</small></h3>
              </div>

              
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel Contact</h2>
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
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Subject</th>
                          <th>Messages</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($contact as $data)
                        <tr>
                          <th>{{$data->id}}</th>
                          <td>{{$data->name}}</td>
                          <td>{{$data->email}}</td>
                          <td>{{$data->subject}}</td>
                          <td>{{$data->messages}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{ $contact->links() }}
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