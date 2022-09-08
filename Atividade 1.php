<?php
class usuario{
	public $codigo;
	public $nome;
	public $cpf;
	public $endereco;
	public $telefone;
	public $email;

}
$usuario = new Usuario();

$usuario->codigo = "22";
$usuario->nome = "Angelo Rafael dos Santos";
$usuario->cpf = "21108160-5";
$usuario->endereco = "rua abc";
$usuario->telefone = "13 98118-4776";
$usuario->email = "angelo_rafael_dos_santos@hotmail.com";


echo "<div><strong> Dados do Usuario</strong></div>";
echo "<br>Codigo: ".$usuario->codigo;
echo "<br>Nome: ".$usuario->nome;
echo "<br>Cpf: ".$usuario->cpf;
echo "<br>Endereco: ".$usuario->endereco;
echo "<br>Telefone: ".$usuario->telefone;
echo "<br>Email: ".$usuario->email;

class produto{
	public $codigo;
	public $descricao;
	public $valorCusto;
	public $valorVenda;
	public $quantidade;

} 

$produto = new Produto();

$produto->codigo = "003";
$produto->descricao = "Pacote de Arroz";
$produto->valorCusto = "11";
$produto->valorVenda = "15";
$produto->quantidade = "20";

echo "<br><br><div><strong> Dados do Produto</strong></div>";
echo "<br>Codigo: ".$produto->codigo;
echo "<br>Descrição do produto: ".$produto->descricao;
echo "<br>Valor de custo: ".$produto->valorCusto;
echo "<br>Valor de Venda: ".$produto->valorVenda;
echo "<br>Quantidade do produto: ".$produto->quantidade;

?>
