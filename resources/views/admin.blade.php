@extends('layouts.app')
@section('content')
    <div class="card"
        style="border-radius: 10px; overflow:hidden; -webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0); box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0); margin:20px">
        <div class="card-body">
            <button id="1" class="btn btn-primary" style="margin:10px; display: flex; justify-content:center">THÊM PHIM
                MỚI</button>
            <div id="2" style="display:none">
                <form action="/admin/addmovie" method="POST" style="margin-top:40px">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Tên Phim:</label>
                        <input name="tenphim" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Link Hình:</label>
                        <input name="linkhinh" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Link Phim:</label>
                        <input name="linkphim" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="sel1">Thể Loại Phim:</label>
                        <select name="theloai" class="form-control" id="sel1">
                            <option value="Hành Động">Hành Động</option>
                            <option value="Kinh Dị">Kinh Dị</option>
                            <option value="Hài Hước">Hài Hước</option>
                            <option value="Tình Cảm">Tình Cảm</option>
                            <option value="Hoạt Hình">Hoạt Hình</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ngày Ra Mắt:</label>
                        <input name="ngaysanxuat" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Đánh Giá:</label>
                        <input name="danhgia" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Diễn Viên:</label>
                        <input name="dienvien" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="comment">Mô Tả:</label>
                        <textarea name="mota" class="form-control" rows="5" id="comment"></textarea>
                    </div>
                    <div class="form-group" style=" margin:50px; display: flex; justify-content:center">
                        <button style="width:20%;" type="submit" class="btn btn-success">Thêm Phim Mới</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row" style="margin:20px">
        <table class="table table-dark"
            style="border-radius: 10px; overflow:hidden;-webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0); box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên Phim </th>
                    <th scope="col">Hình</th>
                    <th scope="col">Thể Loại</th>
                    <th scope="col">Link</th>
                    <th scope="col">Tuỳ Chọn</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr>
                        <td style="vertical-align: middle;">{{ $movie['id'] }}</td>
                        <td style="vertical-align: middle;">{{ $movie['tenphim'] }}</td>
                        <td style="vertical-align: middle;"> <img width="80px" src="{{ $movie['hinhanh'] }}"></td>
                        <td style="vertical-align: middle;">{{ $movie['theloai'] }}</td>
                        <td style="vertical-align: middle;">{{ $movie['link'] }}</td>
                        <td style="vertical-align: middle;">
                            <button class="btn btn-success">Cập Nhật</button>
                            <button class="btn btn-danger">Xoá Phim</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
