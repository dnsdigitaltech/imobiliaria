@extends('admin.layout.layout')

@section('content')
    <style>
        .attachment-block {
            background-color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.125);
        }
        .attachment-block .attachment-img {
            float: left;
            height: auto;
            max-height: 300px;
            max-width: 300px;
            padding: 5px;
        }
    </style>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-4 col-sm-6 col-12">
                <div class="info-box shadow">
                    <div class="card-body">
                        <h5 class="mb-2"><i class="fas fa-book mr-1"></i> Clientes</h5>
                        <hr>        
                        <div class="text-muted">
                            <div><b>Locadores:</b> 100</div>
                            <div><b>Locatários:</b> 100</div>
                            <div><b>Time:</b> 3</div>
                        </div>
                    </div>
                </div>
                <!-- /.info-box -->
              </div>
              <div class="col-md-4 col-sm-6 col-12">
                <div class="info-box shadow">
                    <div class="card-body">
                        <h5 class="mb-2"><i class="fas fa-book mr-1"></i> Imóveis</h5>
                        <hr>        
                        <div class="text-muted">
                            <div><b>Disponíveis:</b> 100</div>
                            <div><b>Locados:</b> 100</div>
                            <div><b>Total:</b> 200</div>
                        </div>
                    </div>
                </div>
                <!-- /.info-box -->
              </div>
              <div class="col-md-4 col-sm-6 col-12">
                <div class="info-box shadow">
                    <div class="card-body">
                        <h5 class="mb-2"><i class="fas fa-book mr-1"></i> Contratos</h5>
                        <hr>        
                        <div class="text-muted">
                            <div><b>Oficializados:</b> 455</div>
                        </div>
                    </div>
                </div>
                <!-- /.info-box -->
              </div>
        </div>
        </div>
    </section>
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><i class="nav-icon fas fa-tachometer-alt"></i> Últimos Contratos Cadastrados</h1>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

            <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <h3 class="card-title">DataTable with default features</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        </tr>
                        <tr>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 5.0
                        </td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>
                        </tr>
                        <tr>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 5.5
                        </td>
                        <td>Win 95+</td>
                        <td>5.5</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 6
                        </td>
                        <td>Win 98+</td>
                        <td>6</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 7</td>
                        <td>Win XP SP2+</td>
                        <td>7</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Trident</td>
                        <td>AOL browser (AOL desktop)</td>
                        <td>Win XP</td>
                        <td>6</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Gecko</td>
                        <td>Firefox 2.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Gecko</td>
                        <td>Firefox 3.0</td>
                        <td>Win 2k+ / OSX.3+</td>
                        <td>1.9</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Gecko</td>
                        <td>Camino 1.0</td>
                        <td>OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Gecko</td>
                        <td>Camino 1.5</td>
                        <td>OSX.3+</td>
                        <td>1.8</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Gecko</td>
                        <td>Netscape 7.2</td>
                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                        <td>1.7</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Gecko</td>
                        <td>Netscape Browser 8</td>
                        <td>Win 98SE+</td>
                        <td>1.7</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Gecko</td>
                        <td>Netscape Navigator 9</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.1</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.1</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.2</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.2</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.3</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.3</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.4</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.4</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.5</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.5</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.6</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.6</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.7</td>
                        <td>Win 98+ / OSX.1+</td>
                        <td>1.7</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.8</td>
                        <td>Win 98+ / OSX.1+</td>
                        <td>1.8</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Gecko</td>
                        <td>Seamonkey 1.1</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Gecko</td>
                        <td>Epiphany 2.20</td>
                        <td>Gnome</td>
                        <td>1.8</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Webkit</td>
                        <td>Safari 1.2</td>
                        <td>OSX.3</td>
                        <td>125.5</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Webkit</td>
                        <td>Safari 1.3</td>
                        <td>OSX.3</td>
                        <td>312.8</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Webkit</td>
                        <td>Safari 2.0</td>
                        <td>OSX.4+</td>
                        <td>419.3</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Webkit</td>
                        <td>Safari 3.0</td>
                        <td>OSX.4+</td>
                        <td>522.1</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Webkit</td>
                        <td>OmniWeb 5.5</td>
                        <td>OSX.4+</td>
                        <td>420</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Webkit</td>
                        <td>iPod Touch / iPhone</td>
                        <td>iPod</td>
                        <td>420.1</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Webkit</td>
                        <td>S60</td>
                        <td>S60</td>
                        <td>413</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Presto</td>
                        <td>Opera 7.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>-</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Presto</td>
                        <td>Opera 7.5</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td>-</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Presto</td>
                        <td>Opera 8.0</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td>-</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Presto</td>
                        <td>Opera 8.5</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td>-</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Presto</td>
                        <td>Opera 9.0</td>
                        <td>Win 95+ / OSX.3+</td>
                        <td>-</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Presto</td>
                        <td>Opera 9.2</td>
                        <td>Win 88+ / OSX.3+</td>
                        <td>-</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Presto</td>
                        <td>Opera 9.5</td>
                        <td>Win 88+ / OSX.3+</td>
                        <td>-</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Presto</td>
                        <td>Opera for Wii</td>
                        <td>Wii</td>
                        <td>-</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Presto</td>
                        <td>Nokia N800</td>
                        <td>N800</td>
                        <td>-</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Presto</td>
                        <td>Nintendo DS browser</td>
                        <td>Nintendo DS</td>
                        <td>8.5</td>
                        <td>C/A<sup>1</sup></td>
                        </tr>
                        <tr>
                        <td>KHTML</td>
                        <td>Konqureror 3.1</td>
                        <td>KDE 3.1</td>
                        <td>3.1</td>
                        <td>C</td>
                        </tr>
                        <tr>
                        <td>KHTML</td>
                        <td>Konqureror 3.3</td>
                        <td>KDE 3.3</td>
                        <td>3.3</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>KHTML</td>
                        <td>Konqureror 3.5</td>
                        <td>KDE 3.5</td>
                        <td>3.5</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Tasman</td>
                        <td>Internet Explorer 4.5</td>
                        <td>Mac OS 8-9</td>
                        <td>-</td>
                        <td>X</td>
                        </tr>
                        <tr>
                        <td>Tasman</td>
                        <td>Internet Explorer 5.1</td>
                        <td>Mac OS 7.6-9</td>
                        <td>1</td>
                        <td>C</td>
                        </tr>
                        <tr>
                        <td>Tasman</td>
                        <td>Internet Explorer 5.2</td>
                        <td>Mac OS 8-X</td>
                        <td>1</td>
                        <td>C</td>
                        </tr>
                        <tr>
                        <td>Misc</td>
                        <td>NetFront 3.1</td>
                        <td>Embedded devices</td>
                        <td>-</td>
                        <td>C</td>
                        </tr>
                        <tr>
                        <td>Misc</td>
                        <td>NetFront 3.4</td>
                        <td>Embedded devices</td>
                        <td>-</td>
                        <td>A</td>
                        </tr>
                        <tr>
                        <td>Misc</td>
                        <td>Dillo 0.8</td>
                        <td>Embedded devices</td>
                        <td>-</td>
                        <td>X</td>
                        </tr>
                        <tr>
                        <td>Misc</td>
                        <td>Links</td>
                        <td>Text only</td>
                        <td>-</td>
                        <td>X</td>
                        </tr>
                        <tr>
                        <td>Misc</td>
                        <td>Lynx</td>
                        <td>Text only</td>
                        <td>-</td>
                        <td>X</td>
                        </tr>
                        <tr>
                        <td>Misc</td>
                        <td>IE Mobile</td>
                        <td>Windows Mobile 6</td>
                        <td>-</td>
                        <td>C</td>
                        </tr>
                        <tr>
                        <td>Misc</td>
                        <td>PSP browser</td>
                        <td>PSP</td>
                        <td>-</td>
                        <td>C</td>
                        </tr>
                        <tr>
                        <td>Other browsers</td>
                        <td>All others</td>
                        <td>-</td>
                        <td>-</td>
                        <td>U</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                        </tr>
                        </tfoot>
                    </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
            </div>
        </section>

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><i class="nav-icon fas fa-tachometer-alt"></i> Últimos Imóveis Cadastrados</h1>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card card-solid">
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-sm-5">
                    <div class="col-12">
                      <img src="{{ url(mix('backend/assets/img/prod-1.jpg'))}}" alt="Product Image">
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <h3 class="my-3">#1 Casa Residencial - Campeche</h3>
                    
                    <div class="row">                       
                        
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="info-box shadow-lg">
                                <span class="info-box-icon bg-info"><i class="fas fa-map-marked-alt"></i></span>
                
                                <div class="info-box-content">
                                <span class="info-box-text">Bairro:</span>
                                <span class="info-box-number">Campeche</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="info-box shadow-lg">
                                <span class="info-box-icon bg-success"><i class="fas fa-house-damage"></i></span>
                
                                <div class="info-box-content">
                                <span class="info-box-text">Área Útil:</span>
                                <span class="info-box-number">300 m²</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="row">                       
                        
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="info-box shadow-lg">
                                <span class="info-box-icon bg-warning"><i class="fas fa-bed"></i></span>
                
                                <div class="info-box-content">
                                <span class="info-box-text">Domitórios:</span>
                                <span class="info-box-number">2 Quartos <small> (Sendo 1 suítes)</small></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="info-box shadow-lg">
                                <span class="info-box-icon bg-danger"><i class="fas fa-warehouse"></i></span>
                
                                <div class="info-box-content">
                                <span class="info-box-text">Garagem:</span>
                                <span class="info-box-number">2 Vagas <small> (Sendo 1 cobertas)</small></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    
      
                    
      
                    <div class="row">                       
                        
                        <div class="col-md-6 col-sm-6 col-12">

                            <div class="bg-gray py-2 px-3 mt-4">
                                <h2 class="mb-0">
                                    Venda
                                </h2>
                                <h4 class="mt-0">
                                    <small>R$ 1.000,00 </small>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="bg-gray py-2 px-3 mt-4">
                                <h2 class="mb-0">
                                    Aluguel
                                </h2>
                                <h4 class="mt-0">
                                    <small>R$ 1.000,00 </small>
                                </h4>
                            </div>
                        </div>
                    </div>
      
                    <div class="mt-4">
                      <div class="btn btn-primary btn-lg btn-flat">
                        <i class="far fa-eye"></i>
                        Vizualizar Imóvel
                      </div>
      
                      <div class="btn btn-success btn-lg btn-flat">
                        <i class="fas fa-edit"></i>
                        Editar Imóvel
                      </div>
                    </div>
      
                    <div class="mt-4 product-share">
                      <a href="#" class="text-gray">
                        <i class="fab fa-facebook-square fa-2x"></i>
                      </a>
                      <a href="#" class="text-gray">
                        <i class="fab fa-twitter-square fa-2x"></i>
                      </a>
                      <a href="#" class="text-gray">
                        <i class="fas fa-envelope-square fa-2x"></i>
                      </a>
                      <a href="#" class="text-gray">
                        <i class="fas fa-rss-square fa-2x"></i>
                      </a>
                    </div>
      
                  </div>
                </div>                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
      
          </section>
@endsection