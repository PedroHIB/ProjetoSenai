<?php 

class usuario
{
	private $pdo;
	public $msgErro = "";

	public function conectar($nome, $host, $usuario, $senha)
	{
		global $pdo;
		global $msgErro;

		try {
			$pdo = new PDO("mysql:dbname=". $nome.";host=". $host, $usuario, $senha);
		} catch (PDOException $e) {
			$msqErro = $e->getMessage();
		}
		
	}

	public function cadastrar($nome, $telefone, $email, $senha)
	{
		global $pdo;
		//verifica se já existe o email cadastrado.
		$sql = $pdo->prepare("SELECT id_usuarios FROM usuarios WHERE email = :e");
		$sql->bindValue(":e", $email);
		$sql->execute();
		if($sql->rowCount() > 0)
		{
			return false;
		}
		else
		{
			//caso não cadastrado
			$sql = $pdo->prepare("INSERT INTO usuarios (nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
			$sql->bindValue(":n", $nome);
			$sql->bindValue(":t", $telefone);
			$sql->bindValue(":e", $email);
			$sql->bindValue(":s", md5($senha));
			$sql->execute();
			return true;
		}
	}

	public function logar($email, $senha)
	{
		global $pdo;
		//verificar se email e senha válidos
		$sql = $pdo->prepare("SELECT id_usuarios FROM usuarios WHERE email = :e AND senha = :s");
		$sql->bindValue(":e",$email);
		$sql->bindValue(":s",md5($senha));
		$sql->execute();
		if($sql->rowCount() > 0)
		{
		 //Entrar no sistema (sessao)
			$dado = $sql->fetch();
			session_start();
			$_SESSION['id_usuarios'] = $dado ['id_usuarios'];
			return true; //logado
		}
		else
		{	
			return false; //não logou
		}
	}
}

 ?>