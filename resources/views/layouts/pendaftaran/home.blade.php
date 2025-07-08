@extends('layouts.template')

@section('name-nav')
    <p>Pendaftaran</p>
@endsection

@section('conten')
<div class="container">

    <!-- HEADER CETAK -->
    <div id="print-header" class="text-center mb-4 no-screen">
        {{-- <img src="{{ asset('img/logo.png') }}" alt="Logo Sekolah" height="60" class="mb-2"> --}}
        <h4 class="fw-bold">Data Siswa</h4>
        <p id="print-date" class="text-muted" style="font-size: 14px;"></p>
    </div>

    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="card-title">Data Siswa <small class="text-muted">Admin</small></h2>
            <div class="btn-group no-print">
                <button class="btn btn-outline-primary" onclick="exportToCSV()">
                    <i class="nc-icon nc-paper"></i> Export CSV
                </button>
                <button class="btn btn-outline-secondary" onclick="window.print()">
                    <i class="nc-icon nc-print"></i> Print
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahSiswa">
    <i class="nc-icon nc-simple-add"></i> Tambah Data
</button>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table id="studentTable" class="table table-striped table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 50px; text-align: center;">
                                <input type="checkbox" id="selectAll" class="form-check-input">
                            </th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>JK</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $students = [
                                ['09674539871', 'Sri Maharani', '1109278262', 'Perempuan', 'Aceh Singkil'],
                                ['09674539872', 'Putri Chantyka', '1109278263', 'Perempuan', 'Banda Aceh'],
                                ['09674539873', 'Nabiilah Aula Safda', '1109278264', 'Perempuan', 'Lampeunerut'],
                                ['09674539874', 'Raihan Ramadhani', '1109278265', 'Laki-laki', 'Mibo'],
                                ['09674539875', 'Kania Nabila Muntaz', '1109278266', 'Perempuan', 'Pidi Jaya']
                            ];
                        @endphp

                        @foreach($students as $student)
                        <tr>
                            <td style="text-align: center;">
                                <input type="checkbox" class="form-check-input select-checkbox">
                            </td>
                            <td>{{ $student[0] }}</td>
                            <td>{{ $student[1] }}</td>
                            <td>{{ $student[2] }}</td>
                            <td>{{ $student[3] }}</td>
                            <td>{{ $student[4] }}</td>
                            <td><span class="badge bg-warning text-dark">Siswa</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-2 action-buttons">
                                    <a href="#" class="text-primary" title="Lihat"><i class="nc-icon nc-zoom-split"></i></a>
                                    <a href="#" class="text-success" title="Edit"><i class="nc-icon nc-ruler-pencil"></i></a>
                                    <a href="#" class="text-danger" title="Hapus"><i class="nc-icon nc-simple-remove"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="row mt-3 no-print">
                <div class="col-md-6">
                    <div class="dataTables_info">
                        Menampilkan 1 sampai 5 dari 5 entri
                    </div>
                </div>
                <div class="col-md-6">
                    <nav aria-label="Navigasi halaman">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled"><span class="page-link">Sebelumnya</span></li>
                            <li class="page-item active"><span class="page-link">1</span></li>
                            <li class="page-item disabled"><span class="page-link">Selanjutnya</span></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Siswa -->
<div class="modal fade" id="modalTambahSiswa" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <form action="{{ route('pendaftaran.store') }}" method="POST">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title" id="modalTambahLabel">Tambah Data Siswa</h5>
            <button type="button"  href="" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
          </div>
          <div class="modal-body">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">NISN</label>
                <input type="text" class="form-control" name="nisn" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">NIK</label>
                <input type="text" class="form-control" name="nik" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Jenis Kelamin</label>
                <select name="jk" class="form-select" required>
                  <option value="">-- Pilih --</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="col-md-12">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="2" required></textarea>
              </div>
              <div class="col-md-6">
                <label class="form-label">Status</label>
                <select name="status" class="form-select" required>
                  <option value="">-- Pilih --</option>
                  <option value="Siswa">Siswa</option>
                  <option value="Alumni">Alumni</option>
                </select>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary"><i class="nc-icon nc-check-2"></i> Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

<!-- STYLING -->
<style>
    .form-check-input {
        transform: scale(1.1);
        margin-top: 3px;
    }

    th:first-child, td:first-child {
        vertical-align: middle;
        text-align: center;
    }

    .action-buttons i {
        font-size: 16px;
        transition: transform 0.2s;
    }

    .action-buttons a:hover i {
        transform: scale(1.2);
    }

    .no-screen {
        display: none;
    }

    @media print {
        body * {
            visibility: hidden;
        }

        #studentTable,
        #studentTable *,
        #print-header,
        #print-header * {
            visibility: visible;
        }

        #studentTable {
            position: absolute;
            top: 120px;
            left: 0;
            width: 100%;
        }

        #print-header {
            display: block;
            position: absolute;
            top: 0;
            width: 100%;
            text-align: center;
        }

        .no-print {
            display: none !important;
        }
    }
</style>

<!-- SCRIPT -->
<script>
    // Select All Checkbox
    document.addEventListener('DOMContentLoaded', function () {
        const selectAllCheckbox = document.getElementById('selectAll');
        if (selectAllCheckbox) {
            selectAllCheckbox.addEventListener('change', function () {
                document.querySelectorAll('.select-checkbox').forEach(cb => {
                    cb.checked = selectAllCheckbox.checked;
                });
            });
        }

        // Tanggal Cetak
        const printDate = document.getElementById("print-date");
        if (printDate) {
            const now = new Date();
            const tanggalCetak = now.toLocaleDateString('id-ID', {
                weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'
            });
            printDate.textContent = `Dicetak pada: ${tanggalCetak}`;
        }
    });

    // Export CSV
    function exportToCSV() {
        const rows = document.querySelectorAll('#studentTable tbody tr');
        let csv = "NISN,Nama,NIK,JK,Alamat,Status\n";

        rows.forEach(row => {
            const cols = row.querySelectorAll('td');
            let data = [];
            for (let i = 1; i <= 6; i++) {
                let text = cols[i].textContent.trim();
                data.push('"' + text.replace(/"/g, '""') + '"');
            }
            csv += data.join(",") + "\n";
        });

        const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
        const url = URL.createObjectURL(blob);
        const link = document.createElement("a");
        link.setAttribute("href", url);
        link.setAttribute("download", "data_siswa.csv");
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }
</script>
@endsection
