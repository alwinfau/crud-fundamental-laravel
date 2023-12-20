<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <div class="container mt-3">
        <div class="card table-responsive">
            <div class="card-header d-flex justify-content-between">
                <h1>
                    <i class="fa-solid fa-graduation-cap me-1"></i>
                    Daftar Mahasiswa
                </h1>
                <div>
                    <a href="" class="btn btn-sm btn-light btn-outline-danger" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        <i class="fa-solid fa-plus-circle"></i>
                        Add Student
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>No.</th>
                        <th>NPM</th>
                        <th>Student Name</th>
                        <th>BOD</th>
                        <th>Class</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Action</th>
                    </thead>

                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($datas as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->npm }}</td>
                                <td>{{ $item->student_name }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->bod)->translatedFormat('l, d M Y') }}</td>
                                <td>{{ $item->class }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->phone_number }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('mahasiswa.edit', $item->id) }}"
                                            class="btn btn-sm btn-danger">
                                            <i class="fa-solid fa-edit"></i>
                                        </a>

                                        <form action="{{ route('mahasiswa.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-warning">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Created Fungsi Modal --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                        <i class="fa-solid fa-graduation-cap"></i>
                        Created Student
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{ route('mahasiswa.store') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="">
                                NPM
                                <small class="text-danger">*</small>
                            </label>
                            <input type="text" class="form-control" name="npm" value="{{ old('npm') }}"
                                placeholder="NPM (Maksimal 8 Karakter)">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">
                                Student Name
                                <small class="text-danger">*</small>
                            </label>
                            <input type="text" class="form-control" name="student_name"
                                value="{{ old('student_name') }}" placeholder="Insert Student Name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">
                                BOD (Birth Of Day)
                                <small class="text-danger">*</small>
                            </label>
                            <input type="date" class="form-control" name="bod" value="{{ old('bod') }}"
                                placeholder="Birth Of Day">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">
                                Class
                                <small class="text-danger">*</small>
                            </label>
                            <input type="text" class="form-control" name="class" value="{{ old('class') }}"
                                placeholder="Your Class">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">
                                Phone Number
                                <small class="text-danger">*</small>
                            </label>
                            <input type="text" class="form-control" name="phone_number"
                                value="{{ old('phone_number') }}" placeholder="Your Phone Number (min:11 and max:13)">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">
                                Address
                                <small class="text-danger">*</small>
                            </label>
                            <textarea name="address" class="form-control" placeholder="Your Address" id="" cols="30" rows="5">{{ old('address') }}</textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary">
                            <i class="fa-solid fa-undo"></i>
                            Reset
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa-solid fa-save"></i>
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Created End Modal --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
