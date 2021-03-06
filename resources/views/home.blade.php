@section('title','Home')
@include('header')
    <div class="container">
        <div class="row">
        @if(\Session::has('success'))
            <div class="col-sm-12" id="resultado">
                <div class="alert">
                    <a href="/adm/home" class="close" data-dismiss='alert' arial-label="close">&times;</a>
                    {{\Session::get('success')}}
                </div>
            </div>
        @endif
        </div>
        @if(count($estados) > 0)
        <table class="table" border="1">
            <thead>
                <tr>
                    <th>CÓDIGO</th>
                    <th>Estado</th>
                    <th>Sigla</th>
                    <th>Histórico</th>
                    @if(\Auth::user()->permissao == 1) <th>Opções</th> @endif
                </tr>
            </thead>
            <tbody>
                @foreach($estados as $estado)
                <tr>
                    <td>{{$estado->id}}</td>
                    <td>{{$estado->nome}}</td>
                    <td>{{$estado->sigla}}</td>
                    <td>{{$estado->historico}}</td>
                   @if(\Auth::user()->permissao == 1)  
                    <td>
                        <a href="/adm/alterar/{{$estado->id}}" class="btn"> Alterar </a>
                        <a href="/adm/deletar/{{$estado->id}}" onclick="return confirm_click();" class="btn"> Deletar </a>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <div class="alert alert-info">
                NADA CADASTRADO AINDA..
        </div>
        @endif
    </div>
@include('footer')
