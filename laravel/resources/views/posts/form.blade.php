@csrf
<div class="md-form">
  <label>食べたもの</label>
  <input type="text" name="food" class="form-control" required value="{{ old('food') }}">
</div>

<!-- ↓画像 -->
<div class="form-group">
  <label></label>
  <input type="file" name="image" class="form-control" required value="{{ old('image') }}">
</div>

<div class="form-group">
  <label>炭水化物</label>
  <input type="number" step="0.1" name="carbo" class="form-control" required value="{{ old('carbo') }}">
</div>

<div class="form-group">
  <label>脂質</label>
  <input type="number" step="0.1" name="fat" class="form-control" required value="{{ old('fat') }}">
</div>

<div class="form-group">
  <label>タンパク質</label>
  <input type="number" step="0.1" name="protein" class="form-control" required value="{{ old('protein') }}">
</div>

<div class="form-group">
  <label>カロリー</label>
  <input type="number" step="0.1" name="calorie" class="form-control" required value="{{ old('calorie') }}">
</div>

<div class="form-group">
  <label>現在の体重</label>
  <input type="number" step="0.1" name="weight" class="form-control" required value="{{ old('weight') }}">
</div>
