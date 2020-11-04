@extends('dashboard.layouts.master', ['title' => 'لیست درخواست ها'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />



    <div class="modal fade text-left" id="AddTicket" tabindex="-1" role="dialog" aria-labelledby="AddTicket" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddTicket">ایجاد پکیج جدید برای کاربر</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form  style="vertical-align:center;text-align:center" enctype="multipart/form-data" method="post" action="{{ route('tickets.store') }}" class="form form-horizontal form-bordered striped-rows">
                        @csrf
                        <div class="form-body">






                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="date">Title:</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" value="{{old('title')}}" name="title" id="">
                                </div>
                            </div>





                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">Description:</label>
                                <div class="col-md-9">
                                    <textarea id="description" rows="3" class="form-control" name="description" >{{old('description')}}</textarea>
                                </div>
                            </div>




                        </div>

                        <div class="form-actions">
                            <center>
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-check-square-o"></i> Submit
                                </button>

                                <button data-dismiss="modal" type="button" class="btn btn-warning mr-1"><i class="ft-x"></i> Cancel</button>
                            </center>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>





    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">تطابق </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">پکیج ها</span>
            </div>

        </div>
    </div>

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">




        <div class="row">
            <div class="col-lg-12">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title borj-color">
                                درخواست ها
                            </h3>
                        </div>

                        <div style="" class="kt-portlet__head-toolbar">
                           @if (\Auth::user()->type == 'admin')
                                {{--<button class="btn btn-sm btn-success mr-1  ladda-button"  data-target="#AddTicket" data-toggle="modal" ><span class="ladda-label">  <i class="la la-plus"></i>  ایجاد پکیج جدید  </span></button>--}}
                            @endif
                        </div>

                    </div>
                    <div class="kt-portlet__body">
                        <table style=" width: 100% !important;" class="table display nowrap table-striped table-bordered scroll-horizontal " id="m_table_2">
                            <thead style="text-align:center">
                            <tr style="text-align:center">
                                <th>شناسه</th>
                                <th>عنوان</th>
                                <th>نام کاربر</th>
                                <th>شناسه کاربر</th>
                                <th>تاریخ ایجاد</th>
                                <th>بروزرسانی</th>
                                <th>مشاهده جزییات</th>
                                @can('admin')
                                    <th>حذف</th>
                                @endcan
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tickets as $ticket)
                                <tr>
                                    <td>{{ $ticket->id }}</td>
                                    <td>{{ $ticket->title }}</td>
                                    <td>{{ $ticket->user->fName . ' ' . $ticket->user->lName }}</td>
                                    <td>{{ $ticket->user->id }}</td>
                                    <td>{{ jdate($ticket->created_at) }}</td>
                                    <td>{{ jdate($ticket->updated_at) }}</td>
                                    <td style="color: #3BAFDA"><a href="{{ route('tickets.show', $ticket->id) }}"><i style="font-size: 20px" class="fa fa-edit"></i></a></td>
                                    @can('admin')
                                        <td style="color: #3BAFDA"><a href="{{ route('ticket.delete', $ticket->id) }}"><i style="font-size: 20px" class="fa fa-trash"></i></a></td>
                                    @endcan
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection


@section('footerScripts')
    <script src="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
    <script>
        var DatatablesExtensionButtons = {
            init: function () {




                // start data table m_table_2
                var t;
                t = $("#m_table_2").DataTable({

                        scrollY:"",scrollX:!0,scrollCollapse:!0,
                        responsive: !0,

                        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
                        "order": [[ 0, "desc" ]]
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
// end data table m_table_2






            }
        };


        jQuery(document).ready(function () {
                DatatablesExtensionButtons.init()
            }
        );


    </script>
@stop