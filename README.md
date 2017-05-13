# dru-mysql-tutor
แบบทดสอบภาคปฏิบัติวิชา SQL ขั้นสูง (ผูสอน ผศ.ดร.ประไพ ศรีดามา) ภาคเรียน 1/2559

## วิธีติดตั้ง
1. Click `clone or download ไฟล์ ZIP`  แลว้แตกไฟล์ ZIP ไว้ใน htdocs
2. Import ไฟล์ `db_sheet1.sql` โดยสร้าง database ชื่อ db_sheet1 ด้วย phpMyAdmin ก่อน แล้ว Import

## Note Import ผ่าน CLI
- Setting path for Windows: Advance system settings -> Environment Variables -> New.. Or Edit.. PATH และใส Value `C:\xampp\mysql\bin` ต้องคั่น Path อื่นๆ ด้วยเครื่องหมาย `;`
- promt>`mysql -uroot -p db_name < db_name.sql`