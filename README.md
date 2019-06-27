## sistem-sekolah-lite

A School Management Software For Indonesia, ,dibangun untuk digunakan oleh institusi sekolah baik SD, SMP hingga Jenjang SMA Dibangun dengan tampilan sderhana agar mudah dipergunakan. Saya membuat aplikasi ini agar semua sekolah dapat menggunakan aplikasi ini juga bisa disebut SSL. Fokus Aplikasi ini akan dimulai dengan pelaporan uang SPP, Pemasukan< pengeluaran, Saldo dan AKun akun yang berkaitan dengan keuangan


## Testing

- Saya harap aplikasi yang saya bangun dapatditest dan melaporkan bila ada bug atau aplikasi yang sudah tidak sesuai dengan administrasi sekolah

# Security Vulnerabilities
jika mendapatkan celah keamanan atau ada keamaan yang tidak sesuai. If you discover a security vulnerability within SMS, please send an e-mail to H.R. Shadhin via [fajar7xx@gmail.com](mailto:fajar7xx@gmail.com). All security vulnerabilities will be promptly addressed.

## License

GNU General Public License v3.0

## Features

This software has following features:

* Roles: Master, Admin, Teacher, Student, Librarian, Accountant

   **(You can Impersonate User Roles in Development environment)** See how [Impersonation](https://github.com/changeweb/Unifiedtransform/pull/118) works. Cool !!
* `Payment`
   * **[Stripe](http://stripe.com/)** is used. See configuration below
   * Students can pay from their accounts.
   * Student can view payment receipts (history)
   * View Screenshot below
* Attendance
* Mark
* Registration
* Notice, Syllabus
* Library
* Exam
* Grade
* Accounts
* Messaging (uses CKEditor 5)
* For any number(e.g: phone_number) starts with zero, put (') before zero.


## Framework used
- Bootstrap 4

## Server Requirements

- PHP >= 7.1.0
- OpenSSL PHP Extension
- Mysqli PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## How to Start


## Create a school and an admin

* Important: only a `master` can create a new school and its admins!
* Login at `example.com/login` using your `Master` account credentials
* Create a new `school`
* Create a new `admin` for the newly created school

## Manage a school

* Important: A `master` CANNOT manage a school's data!
* Login as `admin` at `example.com/login`
* Now add data to the school as required.

## Basic Steps by Serial

* Create Classes
* Create Sections
* Create Exam
* Add Students
* Add Teachers
* Add Courses
* Then teacher can take attendance, give marks



## Here are some screenshots:

Auto generated fake data were used.

![Screenshot_2019-04-11 - Ms Duane Welch(2)](https://user-images.githubusercontent.com/9896315/56895635-841dad00-6aab-11e9-9400-ec79907b0a28.png)
