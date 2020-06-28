<?php

namespace SilNex\GuLa\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Artisan;
use SilNex\GuLa\Models\Gnu\G5Board;

class AutoGenerateG5WriteModels extends Command
{
    protected $signature = 'g5model:write-all';

    protected $description = 'g5_board에 있는 모든 write 테이블을 생성합니다.';

    public function handle()
    {
        $boards = Arr::flatten(G5Board::select('bo_table')->get()->toArray());

        foreach ($boards as $board) {
            Artisan::command('g5model:write ' . $board);
        }
    }
}
