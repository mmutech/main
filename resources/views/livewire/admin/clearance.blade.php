<div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped custom-table mb-0 datatable">
                <thead>
                    <tr>
                        {{-- <th>#</th> --}}
                        <th>Department / Unit</th>
                        <th>Name & Staff ID</th>
                        <th>Comment</th>
                        <th>Status / Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clearance as $key => $value)
                    <tr>
                        {{-- <td>#</td> --}}
                        <td>{{$value->department}}</td>
                        <td>{{$value->surName}} {{$value->firstName}} {{$value->otherName}} / {{$value->staffid}}</td>
                        <td>{{$value->Comments}}</td>
                        @if ($value->status == 'Approved')
                        <td>
                            <span class="badge bg-inverse-success">{{$value->status}} / {{$value->cleared_date}}</span>
                        </td>
                        @elseif ($value->status == 'Pending')
                        <td>
                            <span class="badge bg-inverse-warning">{{$value->status}} / {{$value->cleared_date}}</span>
                        </td>
                        @endif
                        <td>
                            <a @click="addModal = true" href="#" href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#education_info"><i class="fa fa-pencil"></i></a></h3>
                            {{-- <a @click="addModal = true" class="btn btn-primary" data-bs-toggle="modal" 
                                class="btn btn-primary" data-bs-target="#add_clearance"  
                                href="{{ url('Clearance', $value->id) }}"><i class="fa fa-eye m-r-5"></i></a> --}}
                            {{-- <a @click="addModal = true" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#add_clearance" wire:click="editClearance({{$value->id}})"><i class="fa fa-pencil" style="color:white"></i></a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
