@section('title','Alterar Estado')
@include('header')
<div class="col-sm-6">
    <form action="/adm/salvar_alteracao" class="form-horizontal" id="form_cadastro" method="post">
        {!!csrf_field()!!}
        <div class="form-group">
            <h3>ALTERANDO O ESTADO...{{$estado->nome}} </h3>    
        </div>
        <div class="form-group col-sm-12">
            <input type="hidden" name="id" value="{{$estado->id}}"/>
            <label for="nome">Nome do Estado</label>
            <input type="text" name="nome" value="{{$estado->nome}}" required="true"/>
        </div>
        <div class="form-group col-sm-4">
            <label for="nome">Sigla</label>
            <select name="sigla" >
                <?php
                    $siglas = array("ESCOLHA","AC","AL","AP","AM","BA","CE","DF","ES","GO","MA","MT","MS","MG","PA","PB","PR","PE","PI","RJ","RN","RS","RO","RR","SC","SP","SE");
		?>
		@foreach($siglas  as $sigla)
                   @if($sigla == $estado->sigla)
			<option value="{{$sigla}}" selected>{{$sigla}}</option>
                   @endif
		@if($sigla != $estado->sigla)
			<option value="{{$sigla}}">{{$sigla}}</option>
		@endif
		@endforeach
            </select>
        </div>
        <div class="form-group col-sm-12">
            <label for="nome">Histórico</label>
            <textarea type="text" name="historico" > {{$estado->historico}} </textarea>
        </div>
        <div class="form-group col-sm-12">
            <button type="submit" id="salvar" name="salvar">Salvar Estado</button>
            <a href="/adm/home" id="cancelar" name="cancelar">Cancelar</a>
        </div>
    </form>
</div>
@include('footer')