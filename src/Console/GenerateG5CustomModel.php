<?php

namespace SilNex\GuLa\Console;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

class GenerateG5CustomModel extends GeneratorCommand
{
    protected $signature = 'g5model:make {name}';

    protected $description = '테이블의 G5Model을 만듭니다.';

    protected function getStub()
    {
        return __DIR__ . '/stubs/G5CustomModel.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\G5Models';
    }

    protected function getNameInput()
    {
        return Str::studly(parent::getNameInput());
    }

    public function handle()
    {
        parent::handle();

        $this->generateG5WriteModel();
    }

    protected function generateG5WriteModel()
    {
        $class = $this->getNameInput();

        $table = Str::snake($class);

        $class = $this->qualifyClass($class);
        $path = $this->getPath($class);

        $content = file_get_contents($path);
        $content = str_replace('{{ table }}', $table, $content);

        file_put_contents($path, $content);
    }
}
