<?php
    require_once 'src/config/database.php';

    class Blood {
        public $id;
        public $name;

        public function connectDb() {
            $connection = mysqli_connect(DB_HOST,
                DB_USERNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }
    
            return $connection;
        }

        public function insert($blood = []) {
            $connection = $this->connectDb();
            //tạo và thực thi truy vấn
            $queryInsert = "INSERT INTO tb_blood(`bd_name`, `bd_sex`, `bd_age`, `bd_bgroup`, bd_reg_date, bd_phone) 
            VALUES ('{$blood['name']}', '{$blood['sex']}', '{$blood['age']}', 
            '{$blood['group']}', '{$blood['date']}', '{$blood['phone']}')";
            $isInsert = mysqli_query($connection, $queryInsert);
            $this->closeDb($connection);

            return $isInsert;
        }

        public function indexABC() {
            $connection = $this->connectDb();
            //truy vấn
            $querySelect = "SELECT * FROM tb_blood";
            $results = mysqli_query($connection, $querySelect);
            $bloods = [];
            if (mysqli_num_rows($results) > 0) {
                $bloods = mysqli_fetch_all($results, MYSQLI_ASSOC);
            }

            $this->closeDb($connection);
    
            return $bloods;
        }

        public function closeDb($connection = null) {
            mysqli_close($connection);
        }

        public function getBloodById($id = null) {
            $connection = $this->connectDb();
            $querySelect = "SELECT * FROM tb_blood WHERE bd_id=$id";
            $results = mysqli_query($connection, $querySelect);
            $blood = [];
            if (mysqli_num_rows($results) > 0) {
                $bloods = mysqli_fetch_all($results, MYSQLI_ASSOC);
                $blood = $bloods[0];
            }
            $this->closeDb($connection);
    
            return $blood;
        }

        public function update($blood) {
          
            $connection = $this->connectDb();
            $queryUpdate = "UPDATE tb_blood SET `bd_name` = '{$blood['name']}', `bd_sex` = '{$blood['sex']}',  `bd_age` = '{$blood['age']}'
            ,  `bd_bgroup` = '{$blood['group']}',  `bd_reg_date` = '{$blood['date']}',  `bd_phone` = '{$blood['phone']}'  WHERE `bd_id` = {$blood['id']} ";
            $isUpdate = mysqli_query($connection, $queryUpdate);
            $this->closeDb($connection);
    
            return $isUpdate;
        }

        public function delete($id = null) {
            $connection = $this->connectDb();
    
            $queryDelete = "DELETE FROM tb_blood WHERE bd_id = $id";
            $isDelete = mysqli_query($connection, $queryDelete);
    
            $this->closeDb($connection);
    
            return $isDelete;
        }
    }
 ?>