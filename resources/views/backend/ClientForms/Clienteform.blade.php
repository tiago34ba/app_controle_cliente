@extends('adminlte::page')
@section('title', 'client')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{url('usuarios')}}">voltar</a>

                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    @if(Request::is('*/edit'))
                    <form action="{{url('usuarios/update')}}/{{$usuario->id}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" class="form-control" id="name" name='name' value="{{$usuario->name}}" aria-describedby="nomelHelp" placeholder="informe o nome">
                            <small id="nomeHelp" class="form-text text-muted">Informe o nome do usuário</small>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputPassword1">E-mail</label>
                            <input type="email" name='email' class="form-control" id="email" value={{$usuario->email}} placeholder="email">
                        </div>
                        <br>

                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>


                    @else
                    <form action="{{url('usuarios/add')}}" method="post">
                        @csrf
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                              <h5>Cadastrar novo Cliente</h5>
                            </div>
                            <div class="widget-content nopadding">
                            <form id="form1" name="form1" method="POST" action="/pizzanet/sistema/index.php?pagina=cadastrar_cliente" class="form-horizontal">

                                <div class="control-group">
                                  <label class="control-label">Pessoa:</label>
                                  <div class="controls">
                                    <select name="pessoa" id="pessoa" required>
                                      <option value="Fisica">FISICA</option>
                                      <option value="Juridica">JURIDICA</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="control-group">
                                  <label class="control-label">Nome:</label>
                                  <div class="controls">
                                    <input class="span11" name="razao" type="text" id="razao" placeholder="Nome" required />
                                  </div>
                                </div>

                                <div class="control-group">
                                  <label class="control-label">Sobrenome:</label>
                                  <div class="controls">
                                    <input class="span11" name="nome_fantasia" type="text" id="nome_fantasia" placeholder="Sobrenome" />
                                  </div>
                                </div>

                                <div class="control-group">
                                  <label class="control-label">CPF ou CNPJ:</label>
                                  <div class="controls">
                                    <input type="text" name="cnpj" id="cnpj" class="span11" placeholder="CPF ou CNPJ" value=" - " disabled="disabled" />
                                  </div>
                                </div>

                                <div class="control-group">
                                  <label class="control-label">RG ou IE:</label>
                                  <div class="controls">
                                    <input type="text" name="ie" id="ie" class="span11" placeholder="RG ou IE" value=" - " disabled="disabled" />
                                  </div>
                                </div>

                                <div class="control-group">
                                  <label class="control-label">Endereço:</label>
                                  <div class="controls">
                                    <input type="text" name="rua" id="rua" class="span11" placeholder="Nome da Rua" required />
                                  </div>
                                </div>

                                <div class="control-group">
                                  <label class="control-label">Nº:</label>
                                  <div class="controls">
                                    <input  type="text" name="numero" id="numero" class="span11" placeholder="Numero" required />
                                  </div>
                                </div>

                                <div class="control-group">
                                  <label class="control-label">Bairro:</label>
                                  <div class="controls">
                                    <input  type="text" name="bairro" id="bairro" class="span11" placeholder="Bairro" required />
                                  </div>
                                </div>

                                <div class="control-group">
                                  <label class="control-label">Cidade:</label>
                                  <div class="controls">
                                    <input  type="text" name="cidade" id="cidade" class="span11" placeholder="Cidade" value=""  required/>
                                  </div>
                                </div>

                                <div class="control-group">
                                  <label class="control-label">CEP:</label>
                                  <div class="controls">
                                    <input  type="text" name="cep" id="cep" class="span11" placeholder="40000-000" value=""  required/>
                                  </div>
                                </div>

                                <div class="control-group">
                                  <label class="control-label">Estado:</label>
                                  <div class="controls">
                                  <select id="estado" name="estado" required>
                                      <option value="AC">Acre</option>
                                      <option value="AL">Alagoas</option>
                                      <option value="AP">Amapá</option>
                                      <option value="AM">Amazonas</option>-->
                                      <option value="BA" selected="true">Bahia</option>
                                      <option value="CE">Ceará</option>
                                      <option value="DF">Distrito Federal</option>
                                      <option value="ES">Espírito Santo</option>
                                      <option value="GO">Goiás</option>
                                      <option value="MA">Maranhão</option>
                                      <option value="MT">Mato Grosso</option>
                                      <option value="MS">Mato Grosso do Sul</option>
                                      <option value="MG">Minas Gerais</option>
                                      <option value="PA">Pará</option>
                                      <option value="PB">Paraíba</option>
                                      <option value="PR">Paraná</option>
                                      <option value="PE">Pernambuco</option>
                                      <option value="PI">Piauí</option>
                                      <option value="RJ">Rio de Janeiro</option>
                                      <option value="RN">Rio Grande do Norte</option>
                                      <option value="RS">Rio Grande do Sul</option>
                                      <option value="RO">Rondônia</option>
                                      <option value="RR">Roraima</option>
                                      <option value="SC">Santa Catarina</option>
                                      <option value="SP">São Paulo</option>
                                     <option value="SE">Sergipe</option>
                                      <option value="TO">Tocantins</option>
                                  </select><!--
                                    <input  type="text" name="estado" id="estado" class="span11" placeholder="Estado" />
                                    -->
                                  </div>
                                </div>

                                <div class="control-group">
                                  <label class="control-label">Telefone ou Celular:</label>
                                  <div class="controls">
                                    <input  type="text" name="fone" id="fone" class="span11" placeholder="Telefone ou Celular" required/>
                                  </div>
                                </div>

                                <div class="control-group">
                                  <label class="control-label">Ponto de Referencia:</label>
                                  <div class="controls">
                                    <input type="text" name="responsavel" id="responsavel" class="span11" placeholder="Ponto de Referencia" value="  "  />
                                  </div>
                                </div>

                                <div class="control-group">
                                  <label class="control-label">Observação:</label>
                                  <div class="controls">
                                    <textarea class="span11" name="contato" id="contato" placeholder="Observação"></textarea>
                                        </div>
                                </div>

                                <input type="hidden" name="id_loja" id="id_loja" value="1" />
                                <div class="form-actions">
                                  <button type="submit" name="cadastrar" id="cadastrar" class="btn btn-success">Cadastrar</button>
                                </div>
                              <input type="hidden" name="MM_insert" value="form1" />

                              </form>
                            </div>
                          </div>
                    <!--End-Chart-box-->
                        </div>
                        <br>

                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
