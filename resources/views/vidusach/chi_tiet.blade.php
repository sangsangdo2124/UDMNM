<x-book-layout>
    <x-slot name='title'>
        Thông tin sách
    </x-slot>

<style>
    .info{
        display:grid;
        grid-template-columns:repeat(2,30%,70%);
    }
</style>

<h4>{{ $sach->tieu_de }}</h4>
<div class="info">
    <div class="row">
        <div>
            <img src="{{ asset('book_image/'.$sach->file_anh_bia) }}" width="200px" height="200px">
        </div>
        <div>
            Nhà cung cấp: <b> {{ $sach->nha_cung_cap }}</b><br>
            Nhà xuất bản: <b>{{ $sach->nha_xuat_ban }}</b><br>
            Tác giả: <b> {{ $sach->tac_gia }}</b><br>
            Hình thức bìa: {{ $sach->hinh_thuc_bia }}
        </div>
        <div class="row">
            <div class="col-sm-12">
                <b>Mô tả:</b><br>
                {{ $sach->mo_ta }}
            </div>
        </div>
    </div>
</div>
</x-book-layout>

