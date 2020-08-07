<form method="POST">

	<input name="command" value="div.games">
	<input type="submit">

</form>
<?php

class Parse {

	private $url = null;
	private $command = null;

	public function __construct ($url, $command){
		$this->url = $url;
		$this->command = $command;
	}

	public function getResult()
	{
		if($this->url === null) return;
		$html = file_get_html($this->url);
		//$html->find('div.games');
		foreach($html->find($command) as $element) 
       		var_dump($element)
	}

}

$url = 'https://terrikon.com/football/teams/227';
if(isset($_POST['command']))
{
	$parser = new Parser($url, $_POST['command']);
	$parser->getResult();
}