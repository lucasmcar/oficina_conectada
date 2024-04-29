<?php

namespace App\Core\Maker;

class Make
{

    /**
     * [1] tipo de classe a ser criada
     * [2] nome da classe (Validar se vier lowercase, transforar em uppercase)
     */

    private $arguments = [];

    public function __construct($arguments)
    {
        $this->arguments = $arguments;
        return $this;
    }

    public function make()
    {
        if($this->arguments[1] == '--controller'){
            $file = "App\\Controller\\".$this->arguments[2].'Controller.php';
            // Abre o arquivo para obter o conteúdo existente
            $current = file_get_contents($file);
            // Acrescenta a nova pessoa no arquivo
            $current .= $this->makeControllerTemplate();
            // Escreve o conteúdo de volta no arquivo
            file_put_contents($file, $current);
        }

        if($this->arguments[1] == '--model'){
            $file = "App\\Model\\".$this->arguments[2].'.php';
            // Abre o arquivo para obter o conteúdo existente
            $current = file_get_contents($file);
            // Acrescenta a nova pessoa no arquivo
            $current .= $this->makeControllerTemplate();
            // Escreve o conteúdo de volta no arquivo
            file_put_contents($file, $current);
        }
        return $this;
    }


    public function makeControllerTemplate()
    {
        return sprintf("<?php\nnamespace App\\Controller;\nuse App\\Router\\Controller\\Action;\n\nclass %sController extends Action\n{\n\tpublic function index()\n\t{\n\n\t}\n\tpublic function show()\n\t{\n\n\t}\n\n\tpublic function destroy()\n\t{\n\n\t}\n\n\tpublic function update()\n\t{\n\n\t}\n}", $this->arguments[2]);
    }

    public function classTemplate()
    {
        return " <?php \n\n 
        
        namespace App\\
        
        ";
    }


    
    public function run()
    {
        return $this;
    }
}