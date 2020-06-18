# GuLa
그누보드 사용자를 위한 Laravel Model

## 사용법
1. 패키지 설치 `composer require SilNex/GuLa`
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
3. Laravel의 Eloquent 모델을 이용해 데이터 접근 
```php
<?php
use SilNex\GuLa\Models\Gnu\G5Member;

$g5Member = new G5Member;
$g5Member->all();
$g5Member->where('mb_id', '=', 'admin');
```
자세한 사용법은 [Laravel Eloquent](https://laravel.kr/docs/7.x/eloquent) 문서를 참고

### Todo
- [x] 그누보드 모델 추가
- [x] Mass Assignment 추가
- [x] 그누보드 DB connection 분리