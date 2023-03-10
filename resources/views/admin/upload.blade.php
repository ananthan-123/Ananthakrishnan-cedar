@extends('layout.admin.app')
@section('title', 'Upload')
@section('pagename', 'Upload Data')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
            </div>
            <div id="errorsign" class="alert-box"></div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <main role="main" class="pb-3">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="" style="width: 100%;">
                                    <div class="card" style="
                      border-bottom: 1px solid #e5e5e5;
                      box-shadow: 0 5px 15px rgb(0 0 0 / 50%);
                      border: 1px solid rgba(0, 0, 0, 0.2);
                      border-radius: 6px;
                      outline: 0;
                      max-width: 300px;
                      margin: auto;
                    ">
                                        <div class="card-body table-responsive p-0" style="padding: 5px !important;">
                                            <form action="{{route('importExcelIcs')}}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group m-2">
                                                    <label for="">Xlsx file</label>
                                                    <input class="form-control" style="padding-bottom: 37px;"
                                                        type="file" id="xlsx" name="excel_file" accept=".xlsx"
                                                        placeholder="Name" />
                                                </div>
                                                <div class="form-group m-2">
                                                    <label for="">Ics file</label>
                                                    <input class="form-control" style="padding-bottom: 37px;"
                                                        type="file" id="ics" name="ics_file" accept=".ics"
                                                        placeholder="Name" />
                                                </div>
                                                <div class="form-group m-2">
                                                    <button type="submit" name="submit" class="btn btn-primary" style="
                                                                                    width: 100px;
                                                                                    margin: auto;
                                                                                    margin-top: 30px;
                                                        
                                                                                    color: #fff;
                                                                                    background-color: #337ab7;
                                                                                    border-color: #2e6da4;
                                                                                  ">
                                                        Upload
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
@endsection
@push('styles')
<style>
    #errorsign,
    .error {
        /* display: none; */
        text-align: center;
        position: absolute;
        right: 0;
        z-index: 200;

        border-radius: 8px;
        margin-right: 10px;
        transition: 0.5s;
        width: 0px;
    }

    .next-prev {
        margin-bottom: 20px;
    }

    .next-previn {
        display: flex;
        text-align: center;
        justify-content: center;
    }

    .prev {
        color: blue;
        cursor: pointer;
        margin-right: 10px;
    }

    .next {
        color: blue;
        cursor: pointer;
        margin-left: 10px;
    }

    .page-no {}

    .cap-in {
        /* margin-left: 10px; */
        margin-bottom: 10px;
    }

    .righthead {
        margin-left: auto;
        display: flex;
    }

    .headcreate {
        font-size: 14px;
        color: #0000ff;
        margin-right: 15px;
        cursor: pointer;
    }

    .headsearch {
        font-size: 15px;
        display: flex;
        align-items: center;
        margin-top: 3px;
        margin-right: 10px;
        cursor: pointer;
    }

    .searchfilters {
        transition: 0.3s;
        display: flex;
        overflow-y: hidden;
        background-color: rgba(0, 0, 0, 0.05);
        border: 0 solid rgba(0, 0, 0, 0.125);
        align-items: center;
        padding: 0 10px;
    }

    .filterbut {
        width: 100px;
        height: 35px;
        margin-left: auto;
        color: #fff;
        background-color: #337ab7;
        border: 1px solid #2e6da4;
    }

    .clearbut {
        width: 100px;
        height: 35px;
        margin-right: auto;
        color: #333;
        background-color: #fff;
        border: 1px solid #ccc;
        margin-right: 10px;
    }

    .filtname {
        text-transform: uppercase;
        font-weight: 600;
        margin-right: 10px;
    }

    .filterbox {
        border-radius: 3px;
        /* border: none; */
        padding: 5px;
        border: 1px solid palevioletred;
        min-width: 100px;
        max-width: 137px;
        margin-right: 10px;
    }

    .align-center {
        margin: 10px;
        text-align: center;
    }

    /*  */
</style>
@endpush