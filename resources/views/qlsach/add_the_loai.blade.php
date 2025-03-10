<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Thể Loại</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container{
            margin: auto;
            width: 400px;
        }
        input, button{
            margin-top: 10px; 
            width: 100%;
        }
        .error { color: red; }
    </style>
</head>
<body>

<div class="container">
    <h2>Thêm Thể Loại</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    </form>
    <form action="{{url('add_tl')}}" method="POST">
        @csrf
        <table>
            <tr>
                <th>ID</th>
                <th>Tên thể loại</th>
            </tr>
            <tr>
                <td><input type='text' name='id'></td>
                <td><input type='text' name='ten_the_loai' required></td>
            </tr>
            <tr>
                <td><input type='text' name='id'></td>
                <td><input type='text' name='ten_the_loai' required></td>
            </tr>
        </table>
        @error('ten_the_loai')
            <p class="error">{{ $message }}</p>
        @enderror
        <div class="text-center">
            <button style="width: 80px" type="submit">Lưu</button>
        </div>
    </form>
</div>

</body>
</html>
