<!--
 Copyright 2025 ariefsetyonugroho
 
 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at
 
     https://www.apache.org/licenses/LICENSE-2.0
 
 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
-->

# 📦 Vehicle Maps
Website monitoring kendaraan berbaris maps

## ✨ Features  
- API Endpoint (List Data, Get by id, Create Data)


## ⚙️ Installation & 🚀 Usage 
##### Clone Project
```
git clone 
```
<b > Jika menggunakan xampp/ Windows, download file dan simpan di dalam C:/xampp/htdocs</b>

- Rename .env.example dengan .env dan sesuaikan pengaturan DB seperti dibawah
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_name
DB_USERNAME=root
DB_PASSWORD=
```

- Download database di folder ```sql``` dan import di mysql

##### Run Project
- Run Composer
```
composer update
```

- Run server
```
php artisan serve
```
- Development
```
php artisan serve --host=0.0.0.0 --port=8000
```

#### Route
##### VAMPS
- Post
```
Route : http://127.0.0.1:8000/api/vehicle-maps

Body: 
{
    "front_left": '12345',
    "front_right": '12345',
    "rear_left": '12345',
    "rear_right": '12345',
    "status": 'Good',
    "latitude": '12345',
    "longitude": '12345',
}
```
- Get 
```
Route : http://127.0.0.1:8000/api/vehicle-maps
```
- Get By ID
```
Route : http://127.0.0.1:8000/api/vehicle-maps/id
```

## Notes
- Versi Larvel 12.0