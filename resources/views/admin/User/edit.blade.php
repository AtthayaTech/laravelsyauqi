
@extends('layouts.admin.app')
@section('content')

<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">User</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Edit User
            </li>
        </ol>
    </nav>

    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Edit User</h1>
            <p class="mb-0">Form untuk mengedit data user.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
            <div class="card-body">

                <form action="{{ route('user.update', $dataUser->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row mb-4">

                        <!-- Nama -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text"
                                    id="name"
                                    class="form-control"
                                    name="name"
                                    value="{{ old('name', $dataUser->name) }}"
                                    required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email"
                                    id="email"
                                    class="form-control"
                                    name="email"
                                    value="{{ old('email', $dataUser->email) }}"
                                    required>
                            </div>
                        </div>

                        <!-- Role dan Password -->
                        <div class="col-lg-4 col-sm-12">

                            <!-- Role -->
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select name="role" id="role" class="form-select" required>
                                    <option value="">-- Pilih Role --</option>

                                    <option value="Super Admin"
                                        {{ old('role', $dataUser->role) == 'Super Admin' ? 'selected' : '' }}>
                                        Super Admin
                                    </option>

                                    <option value="Pelanggan"
                                        {{ old('role', $dataUser->role) == 'Pelanggan' ? 'selected' : '' }}>
                                        Pelanggan
                                    </option>

                                    <option value="Mitra"
                                        {{ old('role', $dataUser->role) == 'Mitra' ? 'selected' : '' }}>
                                        Mitra
                                    </option>
                                </select>
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password"
                                    id="password"
                                    class="form-control"
                                    name="password"
                                    placeholder="Kosongkan jika tidak diubah">
                            </div>

                            <!-- Buttons -->
                            <div>
                                <button type="submit" class="btn btn-info">
                                    Simpan Perubahan
                                </button>

                                <a href="{{ route('user.index') }}"
                                    class="btn btn-outline-secondary ms-2">
                                    Batal
                                </a>
                            </div>

                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
