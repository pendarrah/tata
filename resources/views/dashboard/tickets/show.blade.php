@extends('dashboard.layouts.master', ['title' => 'ویرایش درخواست'])

@section('headerScripts')
    <link href="/assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css"/>


@stop


@section('content')








    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">تطابق </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">ویرایش درخواست</span>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div class="kt-container  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-xl-12">



                @if ($errors->any())
                    <div style="background-color: #e47474" class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif





                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                مشاهده جزییات درخواست شماره {{ $ticket->id }}
                            </h3>

                        </div>


                    </div>

                    <div class="kt-portlet__body">
                        <!--begin: Datatable -->

                        <div class="kt-widget3">
                            @foreach ($ticket->replies as $reply)

                                <div style="margin: 20px; padding: 20px;border: 1px dashed {{ $reply->user->type == 'admin' ? '#39b11b' : '#1818256e' }};" class="kt-widget3__item">
                                    <div class="kt-widget3__header">
                                        <div  class="kt-widget3__info">
                                            <a href="#" class="kt-widget3__username">
                                                @if ($reply->user->type == 'admin')
                                                    <span style="font-size: 16px; color: green">پاسخ تطابق:</span>
                                                @else
                                                    {{ $ticket->user->fName . ' ' . $ticket->user->lName }}
                                                @endif

                                            </a>    | <span style="font-family: BYekan!important;" class="kt-widget3__time">{{ jdate($ticket->created_at) }}</span>
                                        </div>
                                    </div>
                                    <div class="kt-widget3__body">
                                        <p style="text-align: right; margin: 10px" class="kt-widget3__text">
                                            {{ $reply->body }}
                                        </p>
                                            <iframe src="http://docs.google.com/gview?url={{ asset($ticket->attachment) }}&embedded=true" style="width:100%; height:500px;" frameborder="0"></iframe>
                                    </div>
                                </div>
                            @endforeach
                        </div>


                        @can('admin')
                            <form method="post" action="{{ route('tickets.update', $ticket->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <p>جهت بروزرسانی، فیلد زیر را تکمیل نمایید:</p>
                                                    <div class="form-group mb-0 col-12">

                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <textarea id="description" rows="3" class="form-control" name="description" >{{old('description')}}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <input  type="file" class="form-control" value="{{ old('attachment') }}" name="attachment" ></input>
                                                            </div>
                                                        </div>

                                                    </div>


                                                </div>

                                            </div>

                                            <!--end card-body-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->

                                    <!--end col-->
                                </div>


                                <div class="text-right mb-3">
                                    <button style="margin: 30px" type="submit" class="btn btn-success px-5 py-2  iranyekan rounded ">بروزرسانی</button><br>
                                </div>
                            </form>
                            @endcan
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- end:: Content -->

@stop


@section('footerScripts')
    <script src="/assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

    <script>


        //datatables


    </script>

    <!--begin::Page Scripts -->
    <script>
        var DatatablesExtensionButtons = {
            init: function () {
                var t;
                t = $("#m_table_2").DataTable({
                        "searching": true,
                        scrollY:"50vh",scrollX:!0,scrollCollapse:!0,
                        responsive: !0,
                        "order": [[ 6, "desc" ]]

                        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
                    }
                ),
                    $("#export_print").on("click", function (e) {
                            e.preventDefault(), t.button(0).trigger()
                        }
                    ),
                    $("#export_copy").on("click", function (e) {
                            e.preventDefault(), t.button(1).trigger()
                        }
                    ),
                    $("#export_excel").on("click", function (e) {
                            e.preventDefault(), t.button(2).trigger()
                        }
                    ),
                    $("#export_csv").on("click", function (e) {
                            e.preventDefault(), t.button(3).trigger()
                        }
                    ),
                    $("#export_pdf").on("click", function (e) {
                            e.preventDefault(), t.button(4).trigger()
                        }
                    )



            }
        };
        jQuery(document).ready(function () {
                DatatablesExtensionButtons.init()
            }
        );

        $("#show").click(function () {
            $("#edu").toggle('slow');
        });

    </script>
    <!--end::Page Scripts -->
    <script src="/assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>

@stop