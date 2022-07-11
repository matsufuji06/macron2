# macron2（制作途中）
## 概要
以前、Railsで作成したものをLaravelで改良しています。  
目標の体重に向けて、今日食べたメニューからの摂取カロリーとマクロ栄養素を記録するアプリです。なお、体重は減らすだけでなく、増やす目標も立てることができます。  
（※カロリー計算に関しては、体脂肪1kgあたりの増減で7,200kcalが必要という前提のもと、「日本医師会ホームページ」の”推定エネルギー”参考にしています。）

## URL

## 機能一覧 （※予定含む）
- ユーザー登録ログイン機能  
- メニュー投稿・一覧・詳細表示・編集・削除機能
- いいね機能  
- グラフ機能（カロリー合計や目標への摂取マクロの表示が可能）（※予定）   
- メニュー検索機能（※予定）     
- タグ機能（※予定）  
- フォロー機能（※予定）  
- ユーザーページ機能（※予定）  


## 技術一覧
- PHP (ver: 7.4.30)  
- laravel (ver: 6.20.44)  
- Docker (ver: 20.10.8)  
- PostgreSQL (ver: 14.4)  
- Vue.js  
- MDBootstrap  




## DB設計（現状の予定）
### postsテーブル
|Column|Type|Options|
|------|----|-------|
|user_id|int|null: false, foreign_key: true|
|food|string|null: false|
|image|string|-------|
|calorie|decimal|null: false|
|carbo|decimal|null: false|
|fat|decimal|null: false|
|protein|decimal|null: false|
|weight|decimal|null: false|
|date|date|null: false|

### usersテーブル
|Column|Type|Options|
|------|----|-------|
|name|string|null: false, unique制約|
|email|string|null: false, unique制約|
|password|string|null許容|
|remember_token|string|null許容|


### standardsテーブル
|Column|Type|Options|
|------|----|-------|
|user_id|int|null: false, foreign_key: true|
|calorie|decimal|null: false|
|carbo|decimal|null: false|
|fat|decimal|null: false|
|protein|decimal|null: false|
|weight|decimal|null: false|
|idealweight|decimal|null: false|

### likesテーブル（usersテーブルとarticlesテーブルの中間テーブル）
|Column|Type|Options|
|------|----|-------|
|user_id|int|null: false, foreign_key: true|
|post_id|int|null: false, foreign_key: true|

### tagsテーブル
|Column|Type|Options|
|------|----|-------|
|name|string|null: false, unique制約|

### post_tagテーブル（articlesテーブルとtagsテーブルの中間テーブル）
|Column|Type|Options|
|------|----|-------|
|post_id|int|-------|
|tag_id|int|-------|

### followsテーブル（usersテーブルとusersテーブルの中間テーブル）
|Column|Type|Options|
|------|----|-------|
|follower_id|int|-------|
|followee_id|int|-------|
