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
        <div class="card mx-auto" style="width: 25em">
            <div class="card-header d-flex justify-content-between">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    <i class="fa-solid fa-graduation-cap"></i>
                    Update Student - {{ $mhs->npm }}
                </h1>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('mahasiswa.update', $mhs->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="">
                                NPM
                                <small class="text-danger">*</small>
                            </label>
                            <input type="text" class="form-control" name="npm"
                                value="{{ old('npm') ?? $mhs->npm }}" placeholder="NPM (Maksimal 8 Karakter)">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">
                                Student Name
                                <small class="text-danger">*</small>
                            </label>
                            <input type="text" class="form-control" name="student_name"
                                value="{{ old('student_name') ?? $mhs->student_name }}"
                                placeholder="Insert Student Name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">
                                BOD (Birth Of Day)
                                <small class="text-danger">*</small>
                            </label>
                            <input type="date" class="form-control" name="bod"
                                value="{{ old('bod') ?? $mhs->bod }}" placeholder="Birth Of Day">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">
                                Class
                                <small class="text-danger">*</small>
                            </label>
                            <input type="text" class="form-control" name="class"
                                value="{{ old('class') ?? $mhs->class }}" placeholder="Your Class">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">
                                Phone Number
                                <small class="text-danger">*</small>
                            </label>
                            <input type="text" class="form-control" name="phone_number"
                                value="{{ old('phone_number') ?? $mhs->phone_number }}"
                                placeholder="Your Phone Number (min:11 and max:13)">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">
                                Address
                                <small class="text-danger">*</small>
                            </label>
                            <textarea name="address" class="form-control" placeholder="Your Address" id="" cols="30" rows="5">{{ old('address') ?? $mhs->address }}</textarea>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <div>
                            <a href="{{ route('mahasiswa.index') }}" class="text-decoration-none">
                                <i class="fa-solid fa-arrow-left"></i>
                                Kembali
                            </a>
                        </div>
                        <div>
                            <button type="reset" class="btn btn-secondary">
                                <i class="fa-solid fa-undo"></i>
                                Reset
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa-solid fa-save"></i>
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
