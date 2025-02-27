# Projek Web Kuliah Semester 5 Web Programming ✨

Proyek Web Kuliah Semester 5 - Teknologi Web Service ✨

Pada tugas ini, kami ditugaskan untuk mengembangkan sebuah situs web menggunakan framework PHP, yakni CodeIgniter. Inspirasi utama dalam pembuatan program ini datang dari situs web kos.id. Saya berfokus pada pengembangan fitur dan desain yang serupa dengan kos.id, mencoba menciptakan pengalaman pengguna yang intuitif dan menarik, terutama dalam konteks tema kos-kosan.

---

## 💻 Demo Website

![Demo Website](https://github.com/user-attachments/assets/31ecf9fb-2399-4708-9b84-4ad73e1a3c36)

[![Tonton di YouTube](https://img.shields.io/badge/Tonton%20di%20YouTube-FF0000?style=for-the-badge&logo=youtube&logoColor=white)](https://www.youtube.com/watch?v=OCJJ4_BYnv4)
---

## 🚀 Tech Stack Used

- **HTML, CSS, JavaScript**
- **Bootstrap**
- **PHP, CodeIgniter 3**

---

## 📝 Panduan Instalasi

### Prasyarat

- **PHP 7.x atau lebih baru**
- **Web Server Apache**
- **MySQL Database Server**

---

### Langkah-langkah Instalasi

#### 1. Clone atau Download Repositori:

**Clone repositori:**

```bash
git clone https://github.com/auliyaapri/Projek-Web-Kuliah-Semester-5.git
cd Projek-Web-Kuliah-Semester-5
```

**Atau download repositori sebagai file ZIP dan ekstrak:**

```bash
cd path/to/extracted-folder
```

---

#### 2. Ubah nama direktori proyek:

Pindahkan folder proyek ke dalam direktori **xampp/htdocs** atau sejenisnya:

```bash
mv Projek-Web-Kuliah-Semester-5 kos_online
cd kos_online
```

---


---

#### 3. Buat Basis Data:

- Buat basis data baru di server MySQL Anda dengan nama **`db_kost`**.

---

#### 4. Import Basis Data:

- Import file SQL **`db_kost.sql`** yang disediakan ke dalam basis data MySQL Anda. Pastikan file ini berada di direktori yang sesuai di komputer Anda.

- Gunakan terminal atau alat seperti phpMyAdmin untuk mengimpor:

```bash
mysql -u your-username -p db_kost < path/to/db_kost.sql
```

- Jika menggunakan phpMyAdmin, unggah file SQL tersebut melalui antarmuka import.

---

#### 5. Konfigurasi Aplikasi:

- Perbarui konfigurasi basis data di **`application/config/database.php`**:

```php
$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'your-username',
    'password' => 'your-password',
    'database' => 'db_kost',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
```

---

#### 6. Jalankan Aplikasi:

- Mulai server Apache Anda.
- Buka browser, lalu navigasikan ke **[http://localhost/kos_online](http://localhost/kos_online)** atau sesuai dengan konfigurasi yang Anda gunakan.

---
