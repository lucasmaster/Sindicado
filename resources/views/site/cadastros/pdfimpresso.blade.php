<!DOCTYPE html>
<html>

  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>

<body>
    
    <table align="center">
		<tr>
			<td width="373" height="62" valign="top"><img src="images/favicon/logo.png" height="70"></td>
			<td colspan="1" width="265"><p style="font-size: 10px;">
					Rua Gabriel Ferreira, 740, Centro/N Teresina-PI<br> Fone: (86)
					3087-8878 Fax: (86) 3087-8853<br> E-mail:
					contato@bancariospi.org.br CEP: 64.000-250<br> site:
					www.bancariospi.org.br CNPJ: 06.849.640/0001-57
				</p></td>
		</tr>
		
	</table>
    <table align="center">
		<tr>
			<td  colspan="2" align="center" ><b><big>Ficha de Sindicalização</big></b></td>
		</tr>
	</table>

	<table align=center width=650 border=0>

		<tr>
			<td><table align=center width=650 border=0>

					<tr style="font-size: 12px;">
						<td width="50"><b>NOME:</b></td>
						<td colspan="1">{{$socio->nome }}</td>
						<td width="148" ><b>Mat:</b> {{$socio->matricula }}</td>
					</tr>

					<tr style="font-size: 12px;">
						<td height="28"><b>ENDEREÇO:</b></td>
						<td width="189">{{$socio->endereco }}</td>
						<td width="175"><b>BAIRRO:</b>{{$socio->bairro }}</td>
						<td width="220"><b>CEP:</b>{{$socio->cep }}</td>
					</tr>

					<tr style="font-size: 12px;">
						<td height=21><b>CIDADE/UF:</b></td>
						<td>{{$socio->cidade}}/{{$socio->uf}}</td>
						<td><b>FONE:</b>{{$socio->fone }}</td>
						<td width="220"><b>CELULAR:</b> {{$socio->celular }}</td>
					</tr>

					<tr style="font-size: 12px;">
						<td height=21><b>EMAIL:</b></td>
						<td colspan=3>{{$socio->email }}</td>
					</tr>
					
					<tr style="font-size: 12px;">
						<td with="21" colspan="1"><b>DATA NASC:</b></td>
						<td>{{$socio->datanasc }}</td>
						<td><b>NATURALIDADE: </b>{{$socio->naturalidade }}</td>
						<td align=right><b>SEXO:</b>{{$socio->sexo }}</td>
					</tr>

					<tr style="font-size: 12px;">
						<td with="21" colspan="1"><b>NOME MÃE:</b></td>
						<td>{{$socio->nomemae }}</td>
					</tr>

					<tr style="font-size: 12px;">
						<td height="21"><b>NOME PAI:</b></td>
						<td colspan="3">{{$socio->nomepai }}</td>
					</tr>

					<tr style="font-size: 12px;">
						<td height=21><b>RG/UF:</b></td>
						<td>{{$socio->rg }}/{{$socio->rguf }}</td>
						<td><b>CPF:</b>{{$socio->cpf }}</td>
						<td width="180"><b>ESTADO CIVIL:</b>{{$socio->estadocivil }}</td>
					</tr>

					<tr style="font-size: 12px;">
						<td height=21><b>BANCO:</b></td>
						<td>{{$socio->banco }}</td>
						<td><b>AGÊNCIA:</b>{{$socio->agencia }}</td>
						<td width="180"><b>CIDADE: </b>{{$socio->cidade_banco }}</td>
					</tr>

					<tr style="font-size: 12px;">
						<td height=21 colspan=2><b>ADMISSÃO BANCO:</b>{{$socio->dataadmi }}</td>
						<td><b>CTPS:</b>{{$socio->ctps }}</td>
						<td width="180"><b>SÉRIES/UF: </b>{{$socio->serieuf }}</td>
					</tr>
					
					<tr>
						<td height="21" colspan="2" style="font-size: 12px;"><p>
								<b>Relação de Dependentes:</b> <br> <b>1)</b> {{$socio->dependente1 }}
								<br> <b>2)</b> {{$socio->dependente2 }}<br>

								<b>3)</b> {{$socio->dependente3 }}<br> <b>4)</b> {{$socio->dependente4 }} 
								<br> <b>5)</b> {{$socio->dependente5 }}<br>

								<b>6)</b>{{$socio->dependente6 }}
							</p></td>

						<td height="41" colspan=4"  align="center"><br> <br> ________________,_____ de
							_________________de_______</td>

					</tr>

					<tr>
						<td height=21 colspan=4 align=center><br>

							______________________________________________________<br>

							Assinatura do(a) Associado(a)</td>

					</tr>


				</table></td>
		</tr>

	</table>




	<table align=center width=100% border=0>
		<tr>
			<td><img src="images/favicon/linhacorte.gif" height="30"></td>
		</tr>
	</table>

	<table align="center">
		<tr>
			<td width="373" height="62" valign="top"><img src="images/favicon/logo.png" height="70"></td>
			<td colspan="1" width="265"><p style="font-size: 10px;">
					Rua Gabriel Ferreira, 740, Centro/N Teresina-PI<br> Fone: (86)
					3087-8878 Fax: (86) 3087-8853<br> E-mail:
					contato@bancariospi.org.br CEP: 64.000-250<br> site:
					www.bancariospi.org.br CNPJ: 06.849.640/0001-57
				</p></td>
		</tr>
		
	</table>
	<table align="center">
		<tr>
			<td  colspan="2" align="center" ><b><big>Ficha de Sindicalização</big></b></td>
		</tr>
	</table>
	
	<table  width="460" border="0">

		<tr>

			<td  width="250" height="21"><p style="font-size: 12px;" align="justify">
					Nome: <b>{{$socio->nome }}</b> Mat.: <b>{{$socio->matricula }}</b>
					solicita sua sindicalização e AUTORIZA o Banco <b>{{$socio->banco }}
					</b> Agência (nº e nome: ) <b>{{$socio->agencia }}</b> 
					Cidade <b>{{$socio->cidade_banco }}</b> a efetuar o desconto em seu salário da
					mensalidade sindical (1% da remuneração base (verbas fixas)
					limitando a 5% do piso da FENABAN - Art. 165 do Estatuto) e o valor
					do desconto assistencial definido em assembleia, a favor do
					Sindicato dos Empregados em Estabelecimentos Bancários e
					Financiários no Estado do Piauí.
				</p></td>

		</tr>

		<tr>

			<td align="center" valign="bottom"><br> <br> ________________,_____
				de _________________de_______<br> <br> <br>


				______________________________________________________<br>


				Assinatura do(a) Associado(a)</td>

		</tr>

	</table>
	
	<table align=center width=100% border=0>
		<tr>
			<td><img src="images/favicon/linhacorte.gif" height="30"></td>
		</tr>
	</table>
	
	<table align=center width=540 border=0>

		<tr>
			<td height="70" width="470" colspan="2" ><p
					style="font-size: 12px;" align="justify">Ao(à) {{$socio->banco }}
					AG. {{$socio->agencia }} Cidade: {{$socio->cidade_banco }}
					Estado: {{$socio->uf }} Notificamos-lhe que o funcionário
					supracitado foi admitido como associado deste Sindicato a partir do
					corrente mês. Assim, de acordo com o que preceitua o Art. 545 da
					CLT, solicitamos DESCONTAR a nosso favor sua contribuição mensal, a
					partir de ______/______/_______.</p></td>
		</tr>

	</table>
	
	<table align=center width=535 border=0>
	
	   <tr>
			<td width=230 height=47 align=center valign=bottom><br>


				TERESINA(PI),___ de __________de____<br> <br> <br></td>


			<td width=350 align=center valign=bottom><p>
					____________________________________________<br> Sind. dos Emp. em
					Estab. Bancários e Financiários no<br> Estado do Piauí
				</p></td>
		</tr>
	
	</table>


	


	

</body>

</html>