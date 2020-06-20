<?php

namespace SilNex\GuLa\Console;

use Illuminate\Console\Command;

class CreateG5WriteModel extends Command
{
    protected $signature = 'g5model:write {table} {--without-relation}';

    protected $description = '"g5_write_"로 시작하는 테이블의 G5Model을 만듭니다.';

    public function handle()
    {
        $table = 'g5_write_' . $this->argument('table');

        $this->info("DB에 '{$table}' 테이블이 있는지 확인중...");

        // check table exists

        if ($this->confirm("'{$table}' 데이블이 없습니다. 계속 하시겠습니까?")) {
            // create model
            if ($this->option('without-relation')) {
                // g5member relation
            }
        }
    }
}