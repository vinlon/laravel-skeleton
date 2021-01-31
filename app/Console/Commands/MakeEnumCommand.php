<?php

namespace App\Console\Commands;

class MakeEnumCommand extends \BenSampo\Enum\Commands\MakeEnumCommand
{
    protected $description = 'Create a new customized enum class';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return $this->option('flagged')
            ? $this->resolveStubPath('/stubs/enum.flagged.stub')
            : $this->resolveStubPath('/stubs/enum.stub');
    }

    /**
     * Resolve the fully-qualified path to the stub.
     *
     * @param string $stub
     *
     * @return string
     */
    protected function resolveStubPath($stub)
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : parent::getStub();
    }
}
