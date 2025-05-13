@extends('layout.template_admin')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Rooms</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="#">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Rooms</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Singgle Room</a>
                </li>
              </ul>
            </div>
            <div class="row">
                <div class="col-md-6" style="width: 100%">
                    <div class="card">
                        <div class="card-header" style="display: flex; justify-content:space-between">
                            <div class="card-title">Data Kamar</div>
                            <button class="btn btn-secondary">
                                <span class="btn-label">
                                    <i class="fa fa-plus"></i>
                                </span>
                                Tambah Data
                            </button>
                  </div>
                  <div class="card-body">
                    <table class="table mt-3">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>
                            <a href="" class="btn btn-warning"><span class="btn-label"><i class="fa fa-edit"></i></span>Edit</a>
                            <a href="" class="btn btn-danger"><span class="btn-label"><i class="fa fa-trash"></i></span>Hapus</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
