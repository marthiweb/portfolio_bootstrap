<?php include('incs/header.php') ?>

	<div class="container">
		<h1>Título <a href="">Link no título</a></h1>
		<h2>Título <a href="">Link no título</a></h2>
		<h3>Título <a href="">Link no título</a></h3>
		<h4>Título <a href="">Link no título</a></h4>
		<h5>Título <a href="">Link no título</a></h5>
		<h6>Título <a href="">Link no título</a></h6>

		<p>Lorem ipsum dolor sit amet, <a href="">consectetur adipiscing elit</a>. Maecenas elit orci, <strong>vulputate et imperdiet</strong> ut, aliquam a dolor. Vestibulum luctus sapien nisi, nec tincidunt elit interdum vitae. In eleifend turpis ac vestibulum bibendum. Pellentesque euismod est ut ante consectetur ullamcorper in ut nunc. Nunc eget metus quis libero rhoncus pellentesque. Curabitur a tincidunt elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus in justo at fringilla. Sed et mauris dapibus, ornare magna vitae, ultricies erat. Vestibulum volutpat eget turpis at dictum. Donec ac elit eget nisl tempor fermentum. Sed sagittis vehicula nunc vitae malesuada. Nullam tempor consequat leo, eget sodales purus consequat id.</p>


<!--MODELOS DE FORMULÁRIOS-->
		<h1>Olha um modelo de formulário!</h1>
		<div class="row">
			<div class="col">
				<div class="form-group">
					<label for="exampleInputEmail1">Campo de texto</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp" placeholder="Texto">
					<small id="textHelp" class="form-text text-muted">Texto descritivo abaixo do campo.</small>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Campo de texto</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Texto">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="exampleInputEmail1">Campo de texto</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Texto">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="exampleInputEmail1">Campo de texto</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Texto">
					<small class="form-text text-muted">Texto abaixo do campo.</small>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="form-group">
					<label for="">Campo de senha</label>
					<input type="password" class="form-control" id="" aria-describedby="emailHelp" placeholder="Senha">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label for="">Campo de e-mail</label>
					<input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="E-mail">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-6 col-sm-4">
				<div class="form-group">
					<label>Escolha uma opção</label>

					<div class="form-check">
					  <label class="form-check-label">
					    <input class="form-check-input" type="checkbox" value="">
					    Opção 1
					  </label>
					</div>
					<div class="form-check disabled">
					  <label class="form-check-label">
					    <input class="form-check-input" type="checkbox" value="" disabled>
					    Opção 2(desabilitada)
					  </label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">
					    <input class="form-check-input" type="checkbox" value="">
					    Opção 3
					  </label>
					</div>
				</div>
			</div>
			<div class="col-6 col-sm-4">
			<div class="form-group">
				<label for="">Multi select</label>
				<select multiple class="form-control" id="">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>

			</div>
			<div class="col-12 col-sm-4">
				<div class="form-group">
					<label for="">Textarea</label>
					<textarea class="form-control" id="" rows="4"></textarea>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-md-6">
				<div class="form-group">
					<label for="">Select</label>
					<select class="form-control" id="">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="form-group">
					<label for="">File input</label>
					<input type="file" class="form-control-file" id="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="form-group">
					<label class="label-destacado">Escolha uma opção(lado a lado)</label>

					<div class="form-check-inline">
					  <label class="form-check-label">
					    <input class="form-check-input" type="checkbox" value="">
					    Opção 1
					  </label>
					</div>
					<div class="form-check-inline">
					  <label class="form-check-label">
					    <input class="form-check-input" type="checkbox" value="">
					    Opção 2
					  </label>
					</div>
					<div class="form-check-inline">
					  <label class="form-check-label">
					    <input class="form-check-input" type="checkbox" value="">
					    Opção 3
					  </label>
					</div>
					<div class="form-check-inline">
					  <label class="form-check-label">
					    <input class="form-check-input" type="checkbox" value="">
					    Opção 4
					  </label>
					</div>
					<div class="form-check-inline">
					  <label class="form-check-label">
					    <input class="form-check-input" type="checkbox" value="">
					    Opção 5
					  </label>
					</div>
					<div class="form-check-inline">
					  <label class="form-check-label">
					    <input class="form-check-input" type="checkbox" value="">
					    Opção 6
					  </label>
					</div>
					<div class="form-check-inline">
					  <label class="form-check-label">
					    <input class="form-check-input" type="checkbox" value="">
					    Opção 7
					  </label>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<input type="submit" name="" value="Enviar formulário" class="btn btn-info float-right">
			</div>
		</div>

<!---->

		<div class="row mt-5">
			<div class="col-12">
				<h1>Loucura mto louca!</h1>
			</div>
			<div class="col-12 col-md-4">
				<img src="imgs/img01.jpg" class="img-fluid rounded-circle">
			</div>
			<div class="col-12 col-md-8">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed mollis ligula, a dignissim nisi. Pellentesque mollis tincidunt faucibus. Donec porttitor diam id fringilla bibendum. Curabitur tempus elit sed enim laoreet finibus. Duis sit amet rutrum velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer luctus eu nunc id ornare. Cras tristique eget dui non consectetur. Nulla vestibulum fringilla eros. Aenean in leo et mauris elementum lobortis eu vitae tellus. Mauris nec elementum mi, vel maximus urna. Duis at tortor justo. Quisque consectetur vel erat ac viverra. Donec elementum dignissim erat. Vestibulum commodo sodales purus, sed blandit odio laoreet sed.</p>
				<p>Aliquam nec mauris facilisis, malesuada nibh at, pharetra libero. Nunc condimentum diam id leo molestie ullamcorper. Ut tortor lorem, auctor at scelerisque in, euismod ac nisi. Morbi semper nibh sit amet libero dapibus, eget viverra risus pretium. Quisque eget ex mattis, aliquam nibh non, eleifend leo. Donec porttitor lorem faucibus posuere dapibus. Vivamus at tortor tincidunt diam consequat dictum. In non posuere nisi. Duis consequat suscipit diam ut facilisis. Aliquam gravida risus nec leo eleifend porta. Fusce varius sodales tempus. Etiam sit amet tellus est.</p>
			</div>
		</div>

<div class="row">
	<div class="col-7">
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
	</div>
	<div class="col">
		<h2>Isso eh uma tabela mto loka</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed mollis ligula, a dignissim nisi. Pellentesque mollis tincidunt faucibus. Donec porttitor diam id fringilla bibendum. Curabitur tempus elit sed enim laoreet finibus. Duis sit amet rutrum velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer luctus eu nunc id ornare. Cras tristique eget dui non consectetur. Nulla vestibulum fringilla eros. Aenean in leo et mauris elementum lobortis eu vitae tellus. Mauris nec elementum mi, vel maximus urna. Duis at tortor justo. Quisque consectetur vel erat ac viverra. Donec elementum dignissim erat. Vestibulum commodo sodales purus, sed blandit odio laoreet sed.</p>
	</div>
</div>

<div class="row">
	<div class="col"></div>
	<div class="col"></div>
	<div class="col"></div>
</div>

	</div><!--container-->


<?php include('incs/footer.php') ?>