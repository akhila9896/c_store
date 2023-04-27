@extends('admin.header_footer')
@section('admin-body')

<div class="content-wrapper">
    <div class="card-header">
        <h2 class="card-title">USER VIEW PAGE</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <table id="example1" class="table   table-bordered table-striped dataTable dtr-inline collapsed"
                    aria-describedby="example1_info">
                    <thead>
                        <tr>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending">
                               ID
                            </th>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-sort="ascending"
                                aria-label="Rendering engine: activate to sort column descending">
                                FULL NAME
                            </th>

                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending">
                                EMAIL
                            </th>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-sort="ascending"
                                aria-label="Rendering engine: activate to sort column descending">
                               CONTACT
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending">
                              PASSWORD
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($result as $value)
                        <tr class="odd">
                        <td class="dtr-control sorting_1" tabindex="0">{{$value->id}}</td>
                            <td class="dtr-control sorting_1" tabindex="0">{{$value->fullname}}</td>
                            <td class="dtr-control sorting_1" tabindex="0">{{$value->email}}</td>
                            <td class="dtr-control sorting_1" tabindex="0">{{$value->contact}}</td>
                            <td class="dtr-control sorting_1" tabindex="0">{{$value->password}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
