<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="author" content="Jean Albano">
		<meta http-equiv="content-language" content="pt-br">
	    <title>Rezolve</title>
	    <meta name="description" content="Teste Rezolve">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.css">
		<script src="js/jquery.js"></script>

	</head>
	<body>

		<!-- Formulário de contato -->
		<div class="container-fluid">
			<div class="col-md-6 col-md-offset-3">

				<h1>Contato</h1>

				<form id="formContato">
					<div class="form-group">
						<div class="col-md-12">
							<input type="text" class="form-control" placeholder="Nome*" name="nome" maxlength="95" required oninvalid="this.setCustomValidity('Informe seu nome completo!')" onchange="this.setCustomValidity('')">
							<div class="help-block"></div>
						</div>
					</div>
					
					<div class="form-group">	
						<div class="col-md-12">
							<input type="email" class="form-control" placeholder="Email*" name="email" maxlength="45" required oninvalid="this.setCustomValidity('Informe um e-mail válido!')" onchange="this.setCustomValidity('')">
							<div class="help-block"></div>
						</div>
					</div>

					<div class="form-group">	
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Telefone" name="telefone" maxlength="15">
							<div class="help-block"></div>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Celular*" name="celular" maxlength="14" required oninvalid="this.setCustomValidity('Informe seu celular!')" onchange="this.setCustomValidity('')">
							<div class="help-block"></div>
						</div>				
					</div>
					
					<div class="form-group">	
						<div class="col-md-12">
							Deseja contato via Whatsapp?
							<input type="radio" name="whats" value="sim" checked> Sim
							<input type="radio" name="whats" value="nao"> Não
						</div>
					</div>

					<div class="form-group">	
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Cidade*" name="cidade" maxlength="45" required oninvalid="this.setCustomValidity('Informe sua cidade!')" onchange="this.setCustomValidity('')">
							<div class="help-block"></div>
						</div>
						<div class="col-md-6">
							<select name="estado" class="form-control">
								<option value="" disabled selected>Estado*</option>
								<option value="AC">Acre</option>
								<option value="AL">Alagoas</option>
								<option value="AP">Amapá</option>
								<option value="AM">Amazonas</option>
								<option value="BA">Bahia</option>
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
							</select>
							<div class="help-block"></div>
						</div>				
					</div>
					
					<div class="form-group">
						<div class="col-md-12">
							<textarea type="text" class="form-control" placeholder="Mensagem*" name="mensagem" maxlength="500" required oninvalid="this.setCustomValidity('Informe sua mensagem!')" onchange="this.setCustomValidity('')"></textarea>
							<div class="help-block"></div>
						</div>
					</div>

					<div class="form-group">	
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary">Enviar</button>
						</div>
					</div>	
				</form>	
			</div>	
		</div>
			
		<!-- plugin para utilizar mascara nos números de telefone -->
		<script type="text/javascript" src="jQueryMaskPlugin/jquery.mask.min.js"></script>	
		<script>
			//função para validar o telefone.
			function validaNumero(tel){
				exp = /^\([1-9]{2}\) [2-9][0-9]{3}\-[0-9]{4}|(^\([1-9]{2}\) [2-9][0-9]{4}\-[0-9]{4})$/;	//expresão regular para (xx) xxxx-xxxx ou (xx) xxxxx-xxxx
				if(!exp.test(tel)){	//inválido
					return false;
				}else{	//válido
					return true;	
				}
			}

			$(document).ready(function(){
				//mascara para os números de telefone e celular
				$("input[name=telefone]").mask("(00) 0000-00009");
				$("input[name=telefone]").blur(function(event) {
				   if($(this).val().length == 15){ // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
					  $("input[name=telefone]").mask('(00) 00000-0009');
				   } else {
					  $("input[name=telefone]").mask('(00) 0000-00009');
				   }
				});

				$("input[name=celular]").mask("(00) 0000-00009");
				$("input[name=celular]").blur(function(event) {
				   if($(this).val().length == 15){ // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
					  $("input[name=celular]").mask('(00) 00000-0009');
				   } else {
					  $("input[name=celular]").mask('(00) 0000-00009');
				   }
				});

				$("#formContato").submit(function(e){	//validação do formulário de contato
					e.preventDefault();	//para evitar o submit do formulário
					var erro = 0;	//variavel para confirmar que não houve nenhum erro
					
					//campos obrigatorios
					var nome = $("input[name=nome]").val();
					var email = $("input[name=email]").val();
					var celular = $("input[name=celular]").val();
					var whats = $("input[name=whats]").val();
					var cidade = $("input[name=cidade]").val();
					var estado = $("select[name=estado] option:selected").val();
					var mensagem = $("input[name=mensagem]").val();

					//validação do nome
					if(nome.trim().length){		//verifica se não existem apenas espaços em branco
						$("input[name=nome]").parent().removeClass("has-error");	//removendo o erro se houver
						$("input[name=nome]").next().hide();
					}else{
						$("input[name=nome]").parent().addClass("has-error");
						$("input[name=nome]").next().show().html("Nome inválido!");	//informando o erro
						erro++;
					}

					//validação do celular
					if(!validaNumero(celular)){	//celular inválido
						$("input[name=celular]").parent().addClass("has-error");
						$("input[name=celular]").next().show().html("Telefone inválido!");	//informando o erro
						erro++;
					}else{
						$("input[name=celular]").parent().removeClass("has-error");	//removendo o erro se houver
						$("input[name=celular]").next().hide();
					}

					//validação da cidade
					if(cidade.trim().length){		//verifica se não existem apenas espaços em branco
						$("input[name=cidade]").parent().removeClass("has-error");	//removendo o erro se houver
						$("input[name=cidade]").next().hide();
					}else{
						$("input[name=cidade]").parent().addClass("has-error");
						$("input[name=cidade]").next().show().html("Cidade inválida!");	//informando o erro
						erro++;
					}

					//campo opcional
					var telefone = $("input[name=telefone]").val();

					//validação do telefone caso tenha sido informado
					if(telefone.trim().length){	//verifica se o campo esta preenchido
						if(!validaNumero(telefone)){	//telefone inválido
							$("input[name=telefone]").parent().addClass("has-error");
							$("input[name=telefone]").next().show().html("Telefone inválido!");	//informando o erro
							erro++;
						}else{
							$("input[name=telefone]").parent().removeClass("has-error");	//removendo o erro se houver
							$("input[name=telefone]").next().hide();
						}	
					}

					//se não houve nenhum erro nos inputs
					if(erro == 0){
						$("#formContato").html("<h4 class='alert alert-success'>Mensagem enviada.</h4>");	
					}
				});	
			});
		</script>	

	</body>
</html>	