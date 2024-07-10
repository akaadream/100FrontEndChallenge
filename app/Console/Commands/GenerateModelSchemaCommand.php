<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

class GenerateModelSchemaCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'schema:generate {model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a schema based on a model';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $model = $this->argument('model');
        $class = "App\\Models\\" . $model;
        if (class_exists($class))
        {
            $instance = new $class;
            $this->info("Found table: " . $instance->getTable());
            $columns = Schema::getColumnListing($instance->getTable());
            $this->info("" . count($columns) . " columns founds");

            if (count($columns) === 0)
            {
                $this->warn("No column found.");
                return;
            }

            $stubPath = resource_path('stubs/schema.ts.stub');
            $targetPath = resource_path('js/');

            if (!File::exists($targetPath))
            {
                File::makeDirectory($targetPath);
            }

            $stub = File::get($stubPath);
            $stub = str_replace('{{ interface }}', $model, $stub);

            $attributes = '';
            $first_passed = false;
            foreach ($columns as $column)
            {
                $this->info("Found column: " . $column . "(" . Schema::getColumnType($instance->getTable(), $column) . ")");

                if ($first_passed)
                {
                    $attributes .= "\n";
                }
                else
                {
                    $first_passed = true;
                }
                $attributes .= "\t" . $column . ": " . $this->getTypescriptType(Schema::getColumnType($instance->getTable(), $column)) . ';';
            }

            $stub = str_replace('{{ data }}', $attributes, $stub);
            File::put($targetPath . $model . 'Schema.ts', $stub);
            $this->info("Schema generated.");
        }
        else
        {
            $this->error("The " . $class . " class cannot be found");
        }
    }

    private function getTypescriptType($type): string
    {
        return match ($type) {
            'bigint' => 'bigint',
            'int', 'float', 'double', 'tinyint', 'smallint', 'mediumint', 'bit', 'decimal' => 'number',
            'varchar', 'char', 'tinytext', 'mediumtext', 'longtext', 'geometrycollection', 'multipolygon', 'multilinestring', 'multipoint', 'geometry', 'linestring', 'point', 'json' => 'string',
            'binary', 'varbinary', 'tinyblob', 'blob', 'mediumblob', 'longblob', 'unknown', 'enum', 'set' => 'any',
            'timestamp', 'date', 'time', 'year', 'datetime' => 'Date',
            default => '',
        };

    }
}
