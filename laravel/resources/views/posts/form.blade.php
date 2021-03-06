@csrf
<div class="md-form">
  <label>食べたもの</label>
  <input type="text" name="food" class="form-control" required value="{{ $post->food ?? old('food') }}">
</div>

<div class="form-group">
  <post-tags-input
  :initial-tags='@json($tagNames ?? [])'
  >
  </post-tags-input>
</div>

<!-- ↓画像 -->
<div class="form-group">
  <label></label>
  <input type="file" name="image" class="form-control" required value="{{ $post->image ?? old('image') }}">
</div>

<div class="form-group">
  <label>炭水化物</label>
  <input type="number" step="0.1" name="carbo" class="form-control" required value="{{ $post->carbo ?? old('carbo') }}">
</div>

<div class="form-group">
  <label>脂質</label>
  <input type="number" step="0.1" name="fat" class="form-control" required value="{{ $post->fat ?? old('fat') }}">
</div>

<div class="form-group">
  <label>タンパク質</label>
  <input type="number" step="0.1" name="protein" class="form-control" required value="{{ $post->protein ?? old('protein') }}">
</div>

<div class="form-group">
  <label>カロリー</label>
  <input type="number" step="0.1" name="calorie" class="form-control" required value="{{ $post->calorie ?? old('calorie') }}">
</div>

<div class="form-group">
  <label>現在の体重</label>
  <input type="number" step="0.1" name="weight" class="form-control" required value="{{ $post->weight ?? old('weight') }}">
</div>
