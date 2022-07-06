# macron2
## 概要

## URL

## 機能一覧 （※予定含む）

## 技術一覧


## DB設計（現状の予定）
### postsテーブル
|Column|Type|Options|
|------|----|-------|
|user_id|reference|null: false, foreign_key: true|
|food|string|null: false|
|image|string||
|calorie|decimal|null: false|
|carbo|decimal|null: false|
|fat|decimal|null: false|
|protein|decimal|null: false|
|weight|decimal|null: false|
|date|date|null: false|

### usersテーブル
|Column|Type|Options|
|------|----|-------|
|name|string|null: false|

### standardsテーブル
|Column|Type|Options|
|------|----|-------|
|user_id|reference|null: false, foreign_key: true|
|calorie|decimal|null: false|
|carbo|decimal|null: false|
|fat|decimal|null: false|
|protein|decimal|null: false|
|weight|decimal|null: false|
|idealweight|decimal|null: false|

### likesテーブル
|Column|Type|Options|
|------|----|-------|

### tagsテーブル
|Column|Type|Options|
|------|----|-------|

### post_tagテーブル（中間テーブル）
|Column|Type|Options|
|------|----|-------|

### followsテーブル（中間テーブル）
|Column|Type|Options|
|------|----|-------|
