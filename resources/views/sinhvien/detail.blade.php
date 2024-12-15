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
                <h3>Thông tin chi tiết sinh viên</h3>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <b>Mã sinh viên:</b>
                    {{$sinhvien->MaSV}}
                </p>
                <p>
                    <b>Họ sv</b>
                    {{$sinhvien->HoSV}}
                </p>
                <p>
                    <b>Tên sv</b>
                    {{$sinhvien->TenSV}}
                </p>
                <p>
                    <b>Phai</b>
                    {{$sinhvien->Phai}}
                </p>
                <p>
                    <b>Ngay sinh</b>
                    {{$sinhvien->NgaySinh}}
                </p>
                <p>
                    <b>Nơi sinh</b>
                    {{$sinhvien->NoiSinh}}
                </p>
                <p>
                    <b>Mã Khoa</b>
                    {{$sinhvien->MaKH}}
                </p>
                <p>
                    <b>Học bổng</b>
                    {{$sinhvien->HocBong}}
                </p>
                <p>
                    <b>Điểm TB</b>
                    {{$sinhvien->DiemTB}}
                </p>
            </div>
            <div class="card-footer">
                <a href="/sinhvien" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </section>
</body>
</html>
