@extends('admin::layouts.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Quản lý sản phẩm</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"></h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <select class="form-control" name="category" id="category">
                                            <option value="0" selected>Tất cả</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap" id="product-table">
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-2">
                        <div class="info-box mb-3 bg-warning">
                            <span class="info-box-icon"><i class="fas fa-user"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Số sản phẩm</span>
                                <span class="info-box-number">{{count($products)}}</span>
                            </div>
                        </div>
{{--                        <div class="info-box mb-3 bg-blue">--}}
{{--                            <span class="info-box-icon"><i class="fas fa-user"></i></span>--}}

{{--                            <div class="info-box-content">--}}
{{--                                <span class="info-box-text">Đã bán</span>--}}
{{--                                <span class="info-box-number">10</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        let products = {!! json_encode($products); !!};

        $('#category').on('change', function() {
            let selectID = this.value;
            let productFilter = [];
            if(selectID === "0") {
                productFilter = products;
            } else {
                productFilter = products.filter(product => product.category.id == selectID);
            }

            $('#product-table').DataTable().destroy();
            renderData(productFilter);
        });

        $(document).ready(function() {
            renderData(products);
        });

        function renderData(data) {
            let table = $('#product-table').DataTable( {
                "searching": false,
                "info": false,
                "paging": true,
                "lengthChange": false,
                "pageLength": "25",
                "order": [[0, 'asc']],
                "data": data,
                "columns": [
                    { "title": "ID", "data": null},
                    { "title": "Hình ảnh"},
                    { "title": "Tên"},
                    { "title": "Loại sản phẩm"},
                    { "title": "Giá gốc"},
                    { "title": "Giá khuyến mãi"},
                    { "title": "Số lượng"},
                    { "title": "Thao tác"}
                ],
                "columnDefs": [
                    {
                        "targets": 0,
                        "searchable": false,
                        "orderable": false,
                        "className": "text-center align-middle",
                        "width": "5%"
                    },
                    {
                        "targets": 1,
                        "className": "text-center align-middle",
                        "render": ( data, type, row ) => {
                            return `<img width="45" src="${row.image}">`;
                        },
                    },
                    {
                        "targets": 2,
                        "className": "align-middle",
                        "render": ( data, type, row ) => {
                            return `${row.title}`;
                        },
                    },
                    {
                        "targets": 3,
                        "className": "text-center align-middle",
                        "width": "10%",
                        "render": ( data, type, row ) => {
                            return `${row.category.name}`;
                        },
                    },
                    {
                        "targets": 4,
                        "className": "text-center align-middle",
                        "width": "10%",
                        "render": ( data, type, row ) => {
                            return `${row.value}đ`;
                        },
                    },
                    {
                        "targets": 5,
                        "className": "text-center align-middle",
                        "width": "10%",
                        "render": ( data, type, row ) => {
                            return `${row.price}đ`;
                        },
                    },
                    {
                        "targets": 6,
                        "className": "text-center align-middle",
                        "width": "5%",
                        "render": ( data, type, row ) => {
                            return `${ row.quantity != null ? row.quantity.quantity : "0"}`;
                        },
                    },
                    {
                        "targets": 7,
                        "className": "text-center align-middle",
                        "width": "8%",
                        "render": ( data, type, row ) => {
                            return `
                                <button type='button' class='btn btn-outline-warning btn-sm'><i class="fas fa-edit"></i></button>
                                <button type='button' class='btn btn-outline-success btn-sm'><i class="fas fa-eye"></i></button>
                            `;
                        },
                    },
                ]
            });
            table.on('order.dt search.dt', function () {
                table.column(0, { search: 'applied', order: 'applied' }).nodes().each(function (cell, i) {
                    cell.innerHTML = i + 1;
                });
            }).draw();
        }
    </script>
@endsection
