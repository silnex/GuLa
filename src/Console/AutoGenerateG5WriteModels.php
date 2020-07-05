<?php

namespace SilNex\GuLa\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use SilNex\GuLa\Models\Gnu\G5Board;

class AutoGenerateG5WriteModels extends Command
{
    protected $signature = 'g5model:write-all';

    protected $description = 'g5_board에 있는 모든 write 테이블을 생성합니다.';

    public function handle()
    {
        $boards = Arr::flatten(G5Board::select('bo_table')->get()->toArray());

        foreach ($boards as $board) {
            $this->info("{$board} 게시판 모델을 생성합니다.");
            $this->call('g5model:write', ['name' => $board]);
        }

        $this->info("모든 게시판 모델이 생성되었습니다.");
    }
}
