CREATE DATABASE campus;
USE campus;

CREATE TABLE lecturers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    nidn VARCHAR(20) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    join_date DATE NOT NULL
);
CREATE TABLE courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lecturer_id INT NOT NULL,
    course_name VARCHAR(100) NOT NULL,
    course_code VARCHAR(20) NOT NULL,
    semester VARCHAR(20) NOT NULL,
    FOREIGN KEY (lecturer_id) REFERENCES lecturers(id) ON DELETE CASCADE
);

CREATE TABLE research (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lecturer_id INT NOT NULL,
    title VARCHAR(150) NOT NULL,
    year INT NOT NULL,
    funding VARCHAR(100),
    FOREIGN KEY (lecturer_id) REFERENCES lecturers(id) ON DELETE CASCADE
);


INSERT INTO lecturers (name, nidn, phone, join_date) VALUES
('Dr. Ahmad Susanto', '0123456789', '081234567890', '2015-08-15'),
('Prof. Siti Nurhaliza', '0198765432', '082345678901', '2010-03-20'),
('Dr. Budi Santoso', '0156789012', '083456789012', '2018-01-10'),
('Dra. Maya Sari', '0134567890', '084567890123', '2020-09-05'),
('Dr. Rizki Pratama', '0187654321', '085678901234', '2017-06-12'),
('Prof. Dr. Indira Dewi', '0145678901', '086789012345', '2008-11-30'),
('Dr. Eko Wijaya', '0167890123', '087890123456', '2019-02-28'),
('Drs. Farhan Abdullah', '0178901234', '088901234567', '2016-07-18');

INSERT INTO courses (lecturer_id, course_name, course_code, semester) VALUES
(1, 'Pemrograman Web', 'IF101', 'Ganjil 2024/2025'),
(1, 'Basis Data', 'IF102', 'Genap 2024/2025'),
(2, 'Algoritma dan Struktur Data', 'IF201', 'Ganjil 2024/2025'),
(2, 'Matematika Diskrit', 'IF103', 'Genap 2024/2025'),
(3, 'Jaringan Komputer', 'IF301', 'Ganjil 2024/2025'),
(3, 'Keamanan Sistem Informasi', 'IF302', 'Genap 2024/2025'),
(4, 'Pemrograman Mobile', 'IF401', 'Ganjil 2024/2025'),
(4, 'User Interface Design', 'IF402', 'Genap 2024/2025'),
(5, 'Machine Learning', 'IF501', 'Ganjil 2024/2025'),
(5, 'Data Mining', 'IF502', 'Genap 2024/2025'),
(6, 'Sistem Operasi', 'IF601', 'Ganjil 2024/2025'),
(6, 'Arsitektur Komputer', 'IF602', 'Genap 2024/2025'),
(7, 'Rekayasa Perangkat Lunak', 'IF701', 'Ganjil 2024/2025'),
(8, 'Manajemen Proyek IT', 'IF801', 'Genap 2024/2025');

INSERT INTO research (lecturer_id, title, year, funding) VALUES
(1, 'Pengembangan Sistem E-Learning Berbasis Web Progressive', 2024, 'Dikti - 50,000,000'),
(1, 'Implementasi Database NoSQL untuk Big Data Analytics', 2023, 'Internal - 15,000,000'),
(2, 'Optimasi Algoritma Sorting untuk Data Berskala Besar', 2024, 'Dikti - 75,000,000'),
(2, 'Analisis Kompleksitas Algoritma Graf dalam Social Network', 2023, 'BRIN - 100,000,000'),
(3, 'Keamanan Jaringan IoT dengan Implementasi Blockchain', 2024, 'Kemendikbud - 120,000,000'),
(3, 'Deteksi Intrusi pada Jaringan menggunakan Machine Learning', 2022, 'Dikti - 60,000,000'),
(4, 'Pengembangan Aplikasi Mobile untuk Smart City', 2024, 'Pemda - 80,000,000'),
(4, 'Usability Testing Framework untuk Aplikasi Mobile', 2023, 'Internal - 25,000,000'),
(5, 'Prediksi Pola Cuaca menggunakan Deep Learning', 2024, 'BMKG - 150,000,000'),
(5, 'Analisis Sentimen Media Sosial untuk Evaluasi Kebijakan Publik', 2023, 'Dikti - 90,000,000'),
(6, 'Optimasi Kinerja Sistem Operasi untuk Cloud Computing', 2024, 'AWS - 200,000,000'),
(6, 'Implementasi Virtualisasi untuk Efisiensi Data Center', 2022, 'Intel - 180,000,000'),
(7, 'Metodologi Agile dalam Pengembangan Software Enterprise', 2024, 'Industry - 110,000,000'),
(7, 'Framework Testing Automation untuk Aplikasi Web', 2023, 'Internal - 35,000,000'),
(8, 'Manajemen Risiko dalam Proyek Transformasi Digital', 2024, 'Konsultan - 95,000,000');
