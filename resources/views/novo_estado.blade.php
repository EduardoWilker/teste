@section('title','Novo Estado')
@include('header')
<div class="col-sm-6">
    <form action="/adm/salvar" class="form-horizontal" id="form_cadastro" method="post">
        {!!csrf_field()!!}
        <div class="form-group">
            <h3>Novo Estado</h3>    
        </div>
        <div class="form-group col-sm-12">
            <label for="nome">Nome do Estado</label>
            <input type="text" name="nome" required="true"  autofocus="true"/>
        </div>
        <div class="form-group col-sm-4">
            <label for="nome">Selecione a Sigla</label>
            <select name="sigla">
                <?php
                    $siglas = array("ESCOLHA","AC","AL","AP","AM","BA","CE","DF","ES","GO","MA","MT","MS","MG","PA","PB","PR","PE","PI","RJ","RN","RS","RO","RR","SC","SP","SE");
		?>
		@foreach($siglas  as $sigla)
                <option value="{{$sigla}}">{{$sigla}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-sm-12">
            <label for="nome">Histórico</label>
            <textarea type="text" name="historico" ></textarea>
        </div>
        <div class="form-group col-sm-12">
            <button type="submit" id="salvar" name="salvar">Salvar</button>
            <a href="/adm/home" id="cancelar" name="cancelar">Cancelar</a>
        </div>
    </form>
</div>
@include('footer')