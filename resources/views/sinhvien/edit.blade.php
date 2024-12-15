<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Sửa thông tin sinh viên: <b class="text-danger"> {{$sinhvien->MaSV}} </b></h3>
            </div>
            <div class="card-body">
                <form action="{{route('sinhvien.editSubmit')}}" method="POST">
                    @csrf
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="nvkMaMH">Mã sinh vien</span>
                        <input type="text" class="form-control" aria-describedby="nvkMaMH"
                            name="nvkMaMH" value="{{$sinhvien->MaSV}}" readonly>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="HoSV">Họ sinh viên</span>
                        <input type="text" class="form-control" aria-describedby="HoSV"
                                    name="HoSV" value="{{$sinhvien->HoSV}}">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="TenSV">Tên sinh viên</span>
                        <input type="text" class="form-control" aria-describedby="TenSV"
                                    name="TenSV" value="{{$sinhvien->TenSV}}">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="Phai">Phai</span>
                        <input type="number" class="form-control" aria-describedby="Phai"
                                    name="Phai" value="{{$sinhvien->Phai}}">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="NgaySinh">Ngày sinh</span>
                        <input type="date" class="form-control" aria-describedby="NgaySinh"
                                    name="NgaySinh" value="{{$sinhvien->NgaySinh}}">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="NoiSinh">Nơi sinh</span>
                        <input type="text" class="form-control" aria-describedby="NoiSinh"
                                    name="NoiSinh" value="{{$sinhvien->NoiSinh}}">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="MaKH">Mã khoa</span>
                        <input type="text" class="form-control" aria-describedby="MaKH"
                                    name="MaKH" value="{{$sinhvien->MaKH}}">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="HocBong">Học bổng</span>
                        <input type="number" class="form-control" aria-describedby="HocBong"
                                    name="HocBong" value="{{$sinhvien->HocBong}}">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="DiemTB">Điểm TB</span>
                        <input type="number" class="form-control" aria-describedby="DiemTB"
                                    name="DiemTB" value="{{$sinhvien->DiemTB}}">
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary"
                            name="btnSubmit" value="Cập nhật">
                        <a href="/sinhvien" class="btn btn-secondary">Trở lại</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
