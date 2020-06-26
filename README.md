# <p align="center">![GuLa-logo](./gula.png)</p>
<p align="center">그누보드로 RESTfull api 개발을 위한 Laravel Models</p>

## Installation
1. 패키지 설치 `composer require silnex/gula`
2. `.env` 설정
```env
GULA_DB_HOST=gnuboard.db.host
GULA_DB_PORT=3306 # (default: 3306)
GULA_DB_DATABASE=gnuboard_db
GULA_DB_USERNAME=gnuboard_db_user
GULA_DB_PASSWORD=gnuboard_db_pass
GULA_CHARSET=utf8mb4 # DB 문자셋 (default: utf8mb4)
GULA_COLLATION=utf8mb4_unicode_ci # DB 문자셋 (default: utf8mb4_unicode_ci)
```

## How to use

### Laravel의 Eloquent 모델을 이용해 데이터 접근 
```php
<?php
// 그누보드
use SilNex\GuLa\Models\Gnu\G5Member;
$g5Member = new G5Member;
$g5Member->where('mb_id', '=', 'admin')->get();

// 영카트
use SilNex\GuLa\Models\Young\G5ShopItem;
$g5ShopItem = new G5ShopItem;
$g5ShopItem->get();
```
자세한 사용법은 [Laravel Eloquent](https://laravel.kr/docs/eloquent) 문서를 참고

### Relationships
Laravel의 모델의 Relation을 사용해 다른 테이블의  내용을 쉽게 가져올 수 있습니다.
```php
<?php
use SilNex\GuLa\Models\Gnu\G5Member;
$g5Member = new G5Member;

$admin = $g5Member->where('mb_id', '=', 'admin')->first();
$admin->g5Points()->get();
```

### G5ModelFactory
미리 생성된 Model이 없는 경우나, 다른 DB에서 가져올 경우  `G5ModelFactory`를 통해 Model 인스턴스를 생성할 수 있습니다.
```php
<?php
// Anywhere

use SilNex\GuLa\G5ModelFactory;

// ['connection', 'table_name']
$g5WriteFree = new G5ModelFactory(['gula', 'g5_write_free']);
$g5WriteFree->get();
```

혹은 이를 응용해 다음과 같은 방법도 가능합니다.
```php
<?php

use SilNex\GuLa\G5ModelFactory;
use Illuminate\Support\Str;

$notExistsModel = "\SilNex\GuLa\Gnu\G5WriteFree";

if (!class_exists($notExistsModel)) {
    $model = explode('\\', $notExistsModel);
    $table = Str::snake(end($model));

    $g5WriteFree = new G5ModelFactory(['gula', $table]);

    $g5WriteFree->get();
}
```

### 자동 릴레이션
그누보드에선 새로운 게시판을 만들때 마다 `g5_write_`으로 시작하는 테이블이 생성됩니다.
GuLa에선 이를 자동으로 릴레이션 해줍니다.
```php
<?php
use SilNex\GuLa\Models\Gnu\G5Member;

var_dump(class_exists("\SilNex\GuLa\Gnu\G5WriteFree")); // bool(false)

$g5Member = new G5Member;
$admin = $g5Member->where('mb_id', '=', 'admin')->first();
$admin->g5WriteFree()->first(); // g5_write_free의 mb_id가 admin인 게시글을 가져옵니다.

// 여러 테이블에서 가져올 수 있습니다.
$admin->with('g5WriteFree', 'g5WriteNotice', 'g5WriteQa')->get();
```

### 커스텀 모델 (테이블)
커스텀 모델을 직접 만들지 않고 커맨드로 생성 할 수 있습니다.
#### 모델 생성
커맨드 `php artisan g5model:write {table_name}`를 입력하면 `app/G5Models`에 모델이 생성 됩니다.  
##### 예시
```bash
php artisan g5model:write my_g5_custom_table
```
```php
/** app/G5Models/MyG5CustomTable.php */

<?php

namespace App\G5Models;

use SilNex\GuLa\G5Model;

class MyG5CustomTable extends G5Model
{
    protected $table = 'my_g5_custom_table';

    // ... 그외 MyG5CustomTable에 필요한 사항들
}

```

#### g5_write_table 생성
그누보드의 게시판 생성시 `g5_write_free`와 같은 자동생성되는 테이블들은  
`php artisan g5model:write {board}`를 통해서 `G5Model`을 생성 할 수 있습니다.  
기본적으로 `wr_id`와 `wr_parent`의 릴레이션이 추가되어있어 바로 사용하실 수 있습니다.
##### 예시
```bash
php artisan g5model:write free
```
```php
/** app/G5Models/G5WriteFree.php */

<?php

namespace App\G5Models;

use SilNex\GuLa\G5Model;

class G5WriteFree extends G5Model
{
    use \SilNex\GuLa\Traits\BelongToG5Member;

    protected $table = 'g5_write_free';

    // ... 그외 G5WriteFree에 필요한 사항들

    /**
     * 댓글 리스트
     */
    public function comments()
    {
        return $this->hasMany({{ class }}::class, 'wr_parent', 'wr_id');
    }

    /**
     * 댓글이라면, 게시글을 보여줌
     */
    public function parent()
    {
        if ($this->wr_is_comment) {
            return $this->belongsTo({{ class }}::class, 'wr_id', 'wr_parent');
        } else {
            throw new \Exception("해당 글은 댓글이 아닙니다.");
        }
    }
}

// Using
$g5WriteFree = new G5Writ1eFree;
$g5WriteFree->comments();
```


### Todo
- [x] 그누보드 모델 추가
- [x] Mass Assignment 추가
- [x] 그누보드 DB connection 분리
- [x] 로고제작 (임시용)
- [x] 로고제작 (정식용)
- [x] 모델 인스턴스 팩토리 추가
- [x] 모델별 릴레이션 추가
- [x] g5_write 테이블 자동 릴레이션
- [x] 커스텀 모델 artisan:make 커맨드 추가
- [ ] DB에 있는 g5_write_ 테이블 모델 일괄 생성 커맨드 추가