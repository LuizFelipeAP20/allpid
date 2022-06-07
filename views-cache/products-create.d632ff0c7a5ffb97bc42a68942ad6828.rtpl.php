<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Fotos  </h1>
  <ol class="breadcrumb">
    <li><a href="/admind"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admind/categories">Categorias</a></li>
    <li class="active"><a href="/admind/categories/create">Cadastrar</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Nova Foto</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admind/products/create" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="desproduct">Descrição da Foto</label>
              <input type="text" class="form-control" id="desproduct" name="desproduct" placeholder="Descrição da Foto">
            </div>
            <div class="form-group">
              <label for="vlprice">Preço</label>
              <input type="number" class="form-control" id="vlprice" name="vlprice" step="0.01" placeholder="0.00">
            </div>

            <div class="form-group">

              <label for="vlprice">Publicitario? </label>

            <input type="radio" id="html" name="vlprice" value="Sim">
  <label for="Sim">Sim</label>
  <input type="radio" id="nao" name="vlprice" value="CSS">
  <label for="nao">Não</label><br><BR>
<label>Carregar anexo se PUBLICITARIO: <input type="file" name="image"></label>
            </div>
            <div class="form-group">
              <label for="desurl">URL</label>
              <input type="text" class="form-control" id="desurl" name="desurl">
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success">Cadastrar</button>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->