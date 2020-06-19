# <p align="center">![GuLa-logo](./gula.png)</p>
<p align="center">그누보드 개발자를 위한 Laravel Models</p>

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
$G5WriteFree = new G5ModelFactory(['gula', 'g5_write_free']);
$G5WriteFree->get();
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
    
    $G5WriteFree = new G5ModelFactory(['gula', $table]);

    $G5WriteFree->get();
}
```

### 커스텀 모델 (테이블)
```php
<?php
// App/CustomG5Model.php

namespace App;

use SilNex\GuLa\G5Model;

class CustomG5Table extends G5Model
{
    protected $table = 'custom_g5_table';

    // code here
}
```

### Todo
- [x] 그누보드 모델 추가
- [x] Mass Assignment 추가
- [x] 그누보드 DB connection 분리
- [x] 로고제작 (임시용)
- [x] 로고제작 (정식용)
- [x] 모델 인스턴스 팩토리 추가
- [ ] 모델별 릴레이션 추가 (그누보드만 추가됨)
- [ ] 커스텀 모델 artisan:make 커맨드 추가