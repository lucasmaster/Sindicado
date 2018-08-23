@extends('layouts.Gentelella')
@section('content')
<div class="row">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Você está em <small>{{$titulo or 'pags'}}</small></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row"> <!--form action -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Cadastramento de <small>{{$titulo or 'Dados referente a Segurança bancária'}}</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form action="{{ url('/painel/segurana/create_seguranca')}}" method="post"  enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <!-- /.row-->
                            <div class="">
                                <div class="col-lg-12">
                                    <!--data e hora da psotagem-->
                                    <input name="create_data" type="hidden" class="form-control" id="create_data" >
                                    <input name="create_hora" type="hidden" class="form-control" id="create_hora" >
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <div class="controls">
                                                <label for="envento">Evento*:</label>
                                                <input name="evento" type="text" class="form-control" id="evento" placeholder="Descreva o Evento...">
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">    
                                        <div class='col-sm-6'>
                                            <label for="descricao">Descrição*:</label>
                                            <textarea name="descricao" class="form-control" id="descricao" placeholder="Descreva aqui o ocorrido..."></textarea>
                                        </div>
                                        <br/>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="cidade">Cidade/Localidade*:</label>
                                            <div class="controls">
                                                <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Cidade/localidade">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">    
                                        <div class='col-sm-6'>
                                            <label for="banco">Banco envolvido*:</label>
                                            <input name="banco" type="text" class="form-control" id="banco" placeholder="Nome do Banco">
                                        </div>
                                        <br/>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="form-group col-md-6">  
                                            <label for="data">Data do Ocorrido*:</label>
                                            <input name="data" type="date" class="form-control" id="data" placeholder="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                    <div class="form-group col-md-6"> 
                                        <label for="fonte">Fonte:</label>
                                        <div class="controls">
                                            <input name="fonte" type="text" class="form-control" id="fonte" placeholder="Abrangência">
                                        </div>
                                    </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="form-group col-md-6"><br>
                                            <label>Ativar? *:</label>
                                            <p style="padding: 5px;">
                                                <input type="radio" name="c_ativar" id="hobby1" value="Sim" data-parsley-mincheck="2" required class="flat" /> Sim
                                                <br/>

                                                <input type="radio" name="c_ativar" id="hobby2" value="Nao" class="flat" /> Não
                                                <br/>
                                            </p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-12"><br>
                                        <div class="actionBar">
                                            <div class="msgBox">
                                                <div class="content"></div>
                                                <button class="btn btn-default" type="button">Cancelar</button> 
                                                <button type="submit" class="btn btn-success">Cadastrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Lista de Paginas <small>{{$pags_tatal or '0'}}</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                            </ul>
                        </li>
                        <!--li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li-->
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="5%">id</th>
                                <th>Evento</th>
                                <th>Data</th>
                                <th>Local</th>
                                <th width="10%">Ações</th>
                                <th width="3%">#</th>
                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <h2><a href="#">Nome do envento</a></h2>

                                    <div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count">
                                        <span class="count_top"><i class="fa fa-home"></i> <small> Banco :0 | </small> </span>
                                        <span class="count_top"><i class="fa fa-city"></i> <small> Cidade :0 | </small> </span>
                                        <span class="count_top"><i class="fa fa-calendar"></i> <small> Atualizada em :12/01/2018 |</small> </span>
                                    </div>
                                </td>
                                <td>date</td>
                                <td>Cidade</td>
                                <td class="center-margin" align="center">
                                    <a href="" class="" title="Visualizar" data-toggle="tooltip" data-placement="top"><i class="fa fa-1x fa-eye"></i></a>
                                    <a href="" class="" title="Editar Cadastro" data-toggle="tooltip" data-placement="top"><i class="fa fa-1x fa-pencil-square-o"></i></a>
                                    <a href="" class="" title=" " data-toggle="tooltip" data-placement="top">
                                        <i class="fa fa-1x fa-fw fa-star"></i>
                                    </a>
                                    <a href="" class="" title="Deletar Cadastro" data-toggle="tooltip" data-placement="top"><i class="glyphicon glyphicon-trash"></i></a>

                                </td>
                                <td><input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> 
                                    <br /></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
