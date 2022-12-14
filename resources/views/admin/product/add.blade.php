<?php
use App\Models\Category;
$ca = Category::all();
?>
@extends('admin.index')
@section('content')

<div class="card">
    <div class="card-header">
        <strong>Thêm Sản Phẩm</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{route('admin.postaddProduct')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
           @csrf 
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Tên sản phẩm</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="name" placeholder="Nhập tên sản phẩm" class="form-control">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">Số lượng </label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="email-input" name="amount" placeholder="Nhập số lượng " class="form-control">
                    @error('amount')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Giá thành sản phẩm </label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="price" placeholder="Nhập giá thành sản phẩm " class="form-control">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="select" class=" form-control-label">Loại sản phẩm</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="level" id="select" class="form-control">
                        @foreach ($ca as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                        
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="textarea-input" class=" form-control-label">Nhập thông tin sản phẩm</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="general" id="textarea-input" rows="9" placeholder="Nhập thông tin sản phẩm" class="form-control"></textarea>
                    @error('general')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="file-input" class=" form-control-label">Ảnh 1</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" id="file-input" name="img1" class="form-control-file">
                    @error('img1')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="file-input" class=" form-control-label">Ảnh 2</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" id="file-input" name="img2" class="form-control-file">
                    @error('img2')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="file-input" class=" form-control-label">Ảnh 3</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" id="file-input" name="img3" class="form-control-file">
                    @error('img3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
            </div>
        </form>
    </div>
    
</div>
@stop();