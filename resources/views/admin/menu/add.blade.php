@extends('admin.main')

@section('header')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
<form action="" method="POST">
  <div class="card-body">
    <div class="form-group">
      <label>Tên danh mục</label>
      <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục">
    </div>
 
    <div class="form-group">
      <label>Danh mục cha</label>
        <select name="prarent_id" id="prarent_id" class="form-control">
            <option value="0">Danh mục cha </option>
            <option value="1">Danh muc 2 </option>
        </select>
    </div>

    <div class="form-group">
        <label>Mô tả</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label>Mô tả chi tiết</label>
        <textarea name="content" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label>kích hoạt</label>
        <div class="custom-control custom-radio">
          <input class="custom-control-input" value="1" type="radio" name="active" checked>
          <label for="active" class="custom-control-label">Có</label>
        </div>

        <div class="custom-control custom-radio">
          <input class="custom-control-input" value="2" type="radio" name="active" >
          <label for="no-active" class="custom-control-label">Không</label>
        </div>
  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Tạo danh mục</button>
  </div>
  @csrf
</form>
@endsection

@section('footer')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
