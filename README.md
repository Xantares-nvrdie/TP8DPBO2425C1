# TP8DPBO2425C1
TUGAS PRAKTIKUM 8 DPBO MVC PHP Bintang Fajar Putra Pamungkas (2405073) Ilmu Komputer C1 Universitas Pendidikan Indonesia

Aplikasi web berbasis **PHP Native + MySQL** dengan arsitektur **MVC (Model–View–Controller)**.  
Digunakan untuk mengelola data:

- Lecturers (Dosen)
- Courses (Mata Kuliah)
- Research (Penelitian)

Semua tabel memiliki fitur **CRUD (Create, Read, Update, Delete)** dan tampilan menggunakan **Bootstrap**.

---

## 🚀 Fitur Utama

| Modul | Fitur |
|-------|-------|
| Lecturers | Create, Read, Edit, Delete |
| Courses | Create, Read, Edit, Delete + relasi ke Lecturer |
| Research | Create, Read, Edit, Delete + relasi ke Lecturer |

### Relasi
- LECTURERS (1) ────< (Many) COURSES
- LECTURERS (1) ────< (Many) RESEARCH


Courses & Research menggunakan **dropdown untuk memilih Lecturer**, dan index menampilkan **ID + nama lecturer**.

---

## 📂 Struktur Folder
```
TP8MVC/PROGRAM/
│
├── app/
│   ├── controllers/
│   │   ├── LecturerController.php
│   │   ├── CourseController.php
│   │   └── ResearchController.php
│   │
│   ├── models/
│   │   ├── Lecturer.php
│   │   ├── Course.php
│   │   └── Research.php
│   │
│   ├── views/
│   │   ├── lecturers/ (index, create, edit)
│   │   ├── courses/ (index, create, edit)
│   │   └── research/ (index, create, edit)
│   │
│   └── core/
│       ├── Database.php
│       └── Config.php
│
├── public/
│   ├── index.php   ← Router
│   └── assets/     ← bootstrap.min.css, js, jquery, dll
│
├── db_passwordnya_admin123.sql
|
└── README.md
```

## 🧩 DESAIN PROGRAM — ARSITEKTUR MVC

Program dirancang agar setiap lapisan memiliki tanggung jawab yang jelas — View tidak berisi query database, Controller tidak berisi HTML, Model tidak berurusan dengan router.

```
┌─────────────┐      ┌─────────────┐      ┌──────────────┐
│ Controller  │ ---> │   Model     │ ---> │   Database   │
└──────┬──────┘      └─────┬───────┘      └──────┬───────┘
       │                   │                     │
       ▼                   ▼                     │
  menerima request   mengelola data            query SQL
       │                                         │
       ▼                                         │
┌──────┴──────┐                                  │
│    View     │ <--------------------------------┘
└─────────────┘
menampilkan UI kepada user
```

## 📁 Penjelasan Folder `app/` — MVC Architecture Overview

Folder `app/` merupakan inti utama aplikasi dan berisi seluruh komponen pola arsitektur **MVC (Model – View – Controller)**.  
Struktur di dalamnya terdiri dari 4 subfolder:
```
app/
├─ controllers/
├─ models/
├─ views/
└─ core/
```
Setiap bagian memiliki peran spesifik seperti berikut.

---

### 🧠 `controllers/` — Pengatur Alur Aplikasi
Berisi file **Controller**, yaitu bagian yang menerima request dari router kemudian menghubungkan View (<– user) dengan Model (<– database).

| File | Fungsi |
|------|--------|
| `LecturerController.php` | Mengatur CRUD untuk Lecturers |
| `CourseController.php` | Mengatur CRUD untuk Courses |
| `ResearchController.php` | Mengatur CRUD untuk Research |

Controller bertanggung jawab untuk:
- menerima aksi pengguna (klik menu, submit form, edit, delete)
- meminta data ke Model
- mengirimkan data ke View untuk ditampilkan

Tanpa controller, View akan bercampur dengan SQL dan menjadi tidak modular.

---

### 🗄 `models/` — Logika Database
Berisi **Model**, yaitu bagian yang berhubungan langsung dengan database melalui kelas `Database`.

| File | Fungsi |
|------|--------|
| `Lecturer.php` | Query pada tabel lecturers |
| `Course.php` | Query pada tabel courses |
| `Research.php` | Query pada tabel research |

Model berisi operasi:
- `fetchAll()` — mengambil banyak data
- `fetchOne()` — mengambil satu data
- `insert()`
- `update()`
- `delete()`

Model **tidak** menampilkan HTML dan **tidak** menangani request pengguna.

---

### 👁 `views/` — Tampilan HTML / UI
Berisi semua file **View**, yaitu tampilan yang dilihat pengguna.
```
views/
├─ lecturers/
│ ├─ index.php
│ ├─ create.php
│ └─ edit.php
├─ courses/
│ ├─ index.php
│ ├─ create.php
│ └─ edit.php
└─ research/
  ├─ index.php
  ├─ create.php
  └─ edit.php

```
---

### ⚙ `core/` — Mesin MVC (Engine)
Berisi class inti yang membuat MVC dapat berjalan.

| File | Fungsi |
|------|--------|
| `Config.php` | Membuat `BASEURL` otomatis untuk asset dan redirect |
| `Database.php` | Mengatur koneksi database & menjalankan query |

Peran utama `core/`:
- memastikan aplikasi tetap **portable** (tidak perlu ubah config walaupun nama folder berbeda)
- menyederhanakan query melalui functions `execute()`, `fetchOne()`, `fetchAll()`

---

## 🔗 Hubungan antar folder dalam `app/`

```
View  ↔  Controller  ↔  Model  ↔  Database
            ▲
            │
      Router (public/index.php)

```

# 💿 DATABASE
<img width="669" height="212" alt="Screenshot 2025-11-16 at 00 45 48" src="https://github.com/user-attachments/assets/5f94f78b-5ba5-41dd-b0e5-491376a975dc" />
<br>

## 🗄 Penjelasan Database

Database pada aplikasi ini digunakan untuk menyimpan data **Lecturers**, **Courses**, dan **Research**.  
Struktur database dibuat dengan konsep **relasi satu–ke–banyak (one-to-many)** antara tabel **lecturers** dengan tabel **courses** serta **research**.

---

### 📌 Daftar Tabel

Database terdiri dari **3 tabel utama**:

| Tabel | Fungsi |
|-------|--------|
| `lecturers` | Menyimpan data dosen |
| `courses` | Menyimpan data mata kuliah dan relasi ke dosen |
| `research` | Menyimpan data penelitian dan relasi ke dosen |

---

### 📍 Struktur Tabel `lecturers`
Digunakan sebagai **tabel induk** untuk mengelola identitas dosen.

| Field | Tipe | Keterangan |
|-------|------|-------------|
| `id` | INT (PK, Auto Increment) | Primary key |
| `name` | VARCHAR(100) | Nama dosen |
| `nidn` | VARCHAR(50) | Nomor induk dosen nasional |
| `phone` | VARCHAR(50) | Nomor telepon |
| `join_date` | DATE | Tanggal bergabung |

---

### 📍 Struktur Tabel `courses`
Menyimpan daftar mata kuliah dan **menghubungkannya dengan dosen** melalui `lecturer_id`.

| Field | Tipe | Keterangan |
|-------|------|-------------|
| `id` | INT (PK, Auto Increment) | Primary key |
| `lecturer_id` | INT (FK) | Relasi ke `lecturers.id` |
| `course_name` | VARCHAR(100) | Nama mata kuliah |
| `course_code` | VARCHAR(50) | Kode mata kuliah |
| `semester` | VARCHAR(50) | Semester pengajaran |

---

### 📍 Struktur Tabel `research`
Menyimpan data penelitian dosen.

| Field | Tipe | Keterangan |
|-------|------|-------------|
| `id` | INT (PK, Auto Increment) | Primary key |
| `lecturer_id` | INT (FK) | Relasi ke `lecturers.id` |
| `title` | VARCHAR(150) | Judul penelitian |
| `year` | INT | Tahun penelitian |
| `funding` | VARCHAR(100) | Pendanaan penelitian |

---
