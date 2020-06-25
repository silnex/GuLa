<?php

namespace SilNex\GuLa\Console;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

class GenerateG5WriteModel extends GeneratorCommand
{
    protected $signature = 'g5model:write {name}';

    protected $description = '"g5_write_"로 시작하는 테이블의 G5Model을 만듭니다.';

    protected function getStub()
    {
        return __DIR__ . '/stubs/G5WriteModel.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\G5Models';
    }

    protected function getNameInput()
    {
        return Str::studly('g5_write_' . parent::getNameInput());
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
